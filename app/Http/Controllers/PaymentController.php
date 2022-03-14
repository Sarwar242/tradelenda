<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Integrate;
use App\Payment;
use App\User;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use DB;
use Auth;

class PaymentController extends Controller
{

    public function carding(){
        $data = array();
        $integration = Integrate::where('user_id', auth()->id())
                            ->where('payment_method', 'collect')
                            ->first();
        if( $integration )
        {
            $data['collect'] = $integration->is_connected ==1? 1:0;
            $data['is_reusable'] = $integration->is_reusable ==1? 1:0;
        }
        return view('pages.integration', compact('data'));
    }

    public function index(Request $request){
        $payments = Payment::orderBy('created_at','desc')->get();
        return view('admin.payment.index', compact('payments'));
    }
    public function chargeAdmin(Request $request, $id)
    {
        $this->validate($request,[
            'user_id'             => 'required|numeric',
            'amount'              => 'required|numeric',
            'description'         => 'nullable|string'
        ]);
        $integration = Integrate::where('user_id',$request->user_id)
                                ->where('payment_method', 'collect')
                                ->first();
        if (!is_null($integration)) {
            $post_fields = [
                "email"=>$integration->email,
                "authorization_code"=>$integration->ba_auth,
                "reference"=>(string) Str::uuid(),
                "amount"=> (int)$request->amount * 100,
                "description"=> is_null($request->description)?'Api charged by Admin': $request->description,
            ];
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://devapi.collect.africa/payments',
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($post_fields),
                CURLOPT_HTTPHEADER => [
                    "Accept: application/json",
                    "Authorization: Bearer ".config('collect.secret_key'),
                    "Content-Type: application/json",
                ],
            ]);
            $response = curl_exec($curl);
            $err = curl_error($curl);

            if(!is_null($err)){Log::error(json_decode($err, true));}
            curl_close($curl);

            if(!is_null($response)){
                $res = json_decode($response, true);
                if(!is_null($res['data']['status']) && ($res['data']['status']=="pending" || $res['data']['status']=="success")){
                    $payment = new Payment;
                    $payment->cpid = $res['data']['id'];
                    $payment->amount = (int)$res['data']['amount']/100;
                    $payment->fee = (int)$res['data']['fee']/100;
                    $payment->status = $res['data']['status'];
                    $payment->ip = $res['data']['ip'];
                    $payment->channel = $res['data']['channel'];
                    $payment->method = $res['data']['payment_method'];
                    $payment->reference = $res['data']['reference'];
                    $payment->initiator = "api";
                    $payment->reason = "admin_charge";
                    $payment->description =$res['data']['description'];

                    $payment->charged_at = Carbon::parse($res['data']['charged_at']);
                    $payment->user_id =$request->user_id;
                    $payment->integrate_id =$integration->id;
                    $payment->loan_id =$id;
                    $payment->admin_id =Auth::guard('admin')->user()->id;
                    $payment->save();

                    // $payment->status = self::checkPayment($payment->cpid);
                    // $payment->save();
                    session()->flash('success','Charge successfull! NGN'.$payment->amount);
                }else{
                    session()->flash('failed','Someting went wrong in the server!');
                }
                Log::debug($res['data']['status']);
                return back();

            }
            else{
                session()->flash('failed','Bad Request!');
            }
            return back();
        }

        session()->flash('failed','User integrated payment method not found!');
        return back();

    }

    public function webhookCollect(Request $request)
    {
        $payload=file_get_contents('php://input');
        if ($request->hasHeader('X-Collect-Signature')) {
            if(hash_equals ($request->header('X-Collect-Signature'), self::calculateHash($payload))){
                $reference = $request->payment['reference'];
                $user_id=substr($reference, 0, strpos($reference, '-'));
                Log::info($user_id);
                if($request->event == "payment.success"){
                    if($request->payment['initiator'] == "checkout"){
                        $check = 0;
                        $fileName = $request->customer["code"].'_success_checkout_'.time(). '_datafile.json';
                        File::put(public_path('/json/collect/success/'.$fileName),$request);
                        $integrated = Integrate::where('user_id', $user_id)
                                                ->orWhere('customer_code', $request->customer["code"])
                                                ->where('payment_method', 'collect')
                                                ->first();
                        if(!$integrated){
                            $check = 1;
                            $integration = new Integrate;
                        }else{
                            $integration = Integrate::where('user_id', $user_id)
                                                    ->orWhere('customer_code', $request->customer["code"])
                                                    ->where('payment_method', 'collect')
                                                    ->first();
                            $check = $integration->is_connected == 1? 0:1;
                        }
                        DB::beginTransaction();
                        try {
                            $integration->email  = $request->customer["email"];
                            $integration->ba_auth  = $request->bank_account["authorization_code"];
                            $integration->customer_code = $request->customer["code"];
                            $integration->account_name = $request->bank_account["account_name"];
                            $integration->bank_name = $request->bank_account["bank_name"];
                            $integration->signature = $request->bank_account["signature"];
                            $integration->is_reusable = $request->bank_account["is_reusable"];
                            $integration->is_active = $request->bank_account["is_active"];
                            $integration->is_connected = 1;
                            $integration->user_id = $user_id;
                            $integration->save();

                            $payment = new Payment;
                            $payment->cpid = $request->payment['id'];
                            $payment->amount = (int)$request->payment['amount']/100;
                            $payment->fee = (int)$request->payment['fee']/100;
                            $payment->status = $request->payment['status'];
                            $payment->ip = $request->payment['ip'];
                            $payment->channel = $request->payment['channel'];
                            $payment->method = $request->payment['payment_method'];
                            $payment->reference = $request->payment['reference'];
                            $payment->initiator = $request->payment['initiator'];
                            $payment->reason = $check==1? "connection": "loan_payment";
                            $payment->description =$request->payment['description'];
                            $payment->x_collect_signature =$request->header('X-Collect-Signature');
                            $payment->charged_at = Carbon::parse($request->payment['charged_at']);
                            $payment->user_id =$user_id;
                            $payment->integrate_id =$integration->id;
                            $payment->save();
                            DB::commit();
                            session()->flash('success','Payment successfull! NGN'.$payment->amount);
                        }catch (\Throwable $e) {
                            DB::rollback();
                            Log::error("Error Occured: ". $e);
                            session()->flash('failed','Something went wrong! 500');
                        }

                    }else{
                        $fileName = $request->customer["code"].'_charged_api_'.time(). '_datafile.json';
                        File::put(public_path('/json/collect/charged/'.$fileName),$request);
                    }
                }elseif($request->event == "mandate.connected"){
                    $fileName = $request->customer["code"].'_connected_'.time(). '_datafile.json';
                    File::put(public_path('/json/collect/connection/'.$fileName),$request);
                }
                else{
                    $fileName = $request->customer["code"].'_failed_'.time(). '_datafile.json';
                    File::put(public_path('/json/collect/failed/'.$fileName),$request);
                }
            }
            else{
                Log::warning("Signature is not valid!");
            }
        }else{
            Log::warning("Signature not found! Invalid Request!");
        }
        // Response::download(public_path('/json/'.$fileName));
    }

    public function webhookPayment(Request $request)
    {
        session()->flash('success2','Integration successfull!');
        info("test");
        \Log::info($request);
    }
    public function calculateHash($payload){

        return hash_hmac('sha512',$payload, config('collect.secret_key'));
    }

    public function checkPayment($id)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
        CURLOPT_URL => "https://devapi.collect.africa/payments/".$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "Accept: application/json",
            "Authorization: Bearer ".config('collect.secret_key')
        ],
        ]);
        $status="";
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if(!is_null($response)){
            $res = json_decode($response, true);
            $status =$res['data']['status'];

            $payment = Payment::where('cpid', $id)->first();
            $payment->status = $status;
            $payment->save();
        }

        return $status;
    }
    public function successConnection(Request $request)
    {
        session()->flash('success', "Collect is integrated successfully! NGN100 payment sucessfull!");
        return redirect()->route('integration.page');
    }

    public function unlinkCollect(Request $request)
    {
        $integration = Integrate::where('user_id', auth()->id())
                            ->where('payment_method', 'collect')
                            ->first();
        if( $integration )
        {
            $integration->is_connected=0;
            $integration->save();
            session()->flash('success', "Collect is unlinked successfully!");
        }

        return back();
    }
}
