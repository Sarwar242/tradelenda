<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Admin;
use App\Setting;
use Auth;
use Carbon\Carbon;
use DB;
use App\Loans;
use App\Integrate;
use App\Payment;
use Validator;
use Illuminate\Support\Facades\Notification;
use App\Notifications\LoanNotificationAdmin;
use App\Notifications\LoanDueReminderNotification;
use App\Notifications\LoanApprovalNotification;
use App\Notifications\LoanRejectionNotification;
use App\Notifications\RejectionNotificationAdmin;
use App\Notifications\DisburseNotificationAdmin;
use App\Notifications\DisburseNotificationUser;
use App\Notifications\ApprovedNotificationAdmin;
use App\Notifications\OfferSendAdmin;
use App\Notifications\OfferAccepted;

class LoanController extends Controller
{
    public function lonn(){

        $memmm = Loans::where('email', Auth::user()->email)->orderBy('created_at','desc')->get();
        $isapproved  = Loans::where('email', Auth::user()->email)->orderBy('updated_at', 'desc')
                            ->get()->where('status','approved');
        $isdeclined  = Loans::where('email', Auth::user()->email)
                            ->orderBy('updated_at', 'desc')->get()->where('status','declined');
        $ispending  = Loans::where('email', Auth::user()->email)
                            ->orderBy('updated_at', 'desc')->get()->where('status','pending');
        return view('pages.myloans', compact('memmm','isapproved','isdeclined','ispending'));

    }
    public function carding(){

        return view('pages.integration');
    }
    public function loanrequest(){
        return view('pages.newloanrequest');
    }

    public function loanrequestpost(Request $request){
        $this->validate($request,[
            'amount'              => 'required|numeric',
            'reason'              => 'nullable|string',
            'loan_tenor'          => 'nullable|string',
            'interest'            => 'nullable|string',
            'note'                => 'nullable|string',
            'proforma'            => 'nullable|file',
            'lpo'                 => 'nullable|file',
        ]);

        $loan = new Loans;
        $loan->amount= $request->amount;
        $loan->reason= $request->reason;
        $loan->loan_tenor= $request->loan_tenor;
        $loan->interest= $request->interest;
        $loan->note= $request->note;
        $interest=Setting::where('slug','interest')->first();
        $loan->interest= $interest ? $interest->value: "2";
        $loan->status= "pending";

        $loan->email= auth()->user()->email;
        $loan->user_id= auth()->user()->id;



        if ($request->loan_tenor == "30 days") {
            $loan->payback_date = Carbon::now()->addDays(30);
        }
        elseif($request->loan_tenor == "60 days"){
            $loan->payback_date = Carbon::now()->addDays(60);
        }
        elseif($request->loan_tenor == "90 days"){
            $loan->payback_date = Carbon::now()->addDays(90);
        }
        elseif($request->loan_tenor == "180 days"){
            $loan->payback_date = Carbon::now()->addDays(180);
        }

        if($request->reason == "LPO"){
            if($request->hasFile('proforma')){
                /*$clouder= Cloudder::upload($image_name, null, array("folder" => "proforma_files/", "overwrite" => true, "api_secret" => 'nOOuzf0reixvsbN9nDyr24uyFR8',"api_key" => '236952377564179', "cloud_name" => 'trade-lenda'));
                $image_url = $clouder->getResult()['secure_url'];
                $public_id = $clouder->getPublicId(); */

              $path = $request->file('proforma')->store('proforma', 's3');

             Storage::disk('s3')->setVisibility($path, 'public');
                $loan->public_id_proforma= basename($path);
                $loan->proformafile = Storage::disk('s3')->url($path);
            }
            if($request->hasFile('lpo')){
                /* $name= $request->file('lpo')->getClientOriginalName();
                $image_name = $request->file('lpo')->getRealPath();
                $clouder= Cloudder::upload($image_name, null, array("folder" => "lpo_files/", "overwrite" => true, "api_secret" => 'nOOuzf0reixvsbN9nDyr24uyFR8',"api_key" => '236952377564179', "cloud_name" => 'trade-lenda'));
                $image_url = $clouder->getResult()['secure_url'];
                $public_id = $clouder->getPublicId(); */

                $path = $request->file('lpo')->store('lpo', 's3');

                Storage::disk('s3')->setVisibility($path, 'public');
                $loan->public_id_lpo= basename($path);
                $loan->lpofile = Storage::disk('s3')->url($path);
            }
        }

        $loan->save();
        $admins=Admin::where('pcft',1)->get();
        if(!is_null($admins)){
            try{
                Notification::send($admins, new LoanNotificationAdmin($loan));
            }catch(\Exception $e){
                \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
            }

        }
        return response()->json([
            'success'=>true,
            'message'=> 'Loan request added successfully!',
        ]);
    }

    public function show($id){
        $loan= Loans::findOrFail($id);
        return view('pages.viewloan', compact('loan'));
    }

    public function view($id){
        $loan= Loans::findOrFail($id);
        return view('pages.letter', compact('loan'));
    }

    public function acknowledge(Request $request, $id){
        $loan= Loans::findOrFail($id);
        if($request->has('acknowledge') && $request->acknowledge=='on'){
            $loan->acknowledgement = 1;
        }else{
            $loan->acknowledgement = 0;
        }
        $loan->save();
        $admins=Admin::where('pcft',1)->get();
        if(!is_null($admins)){
            try{
                // Notification::send($admins, new OfferAccepted($loan));
            }catch(\Exception $e){
                \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
            }

        }
        return redirect()->route('letter.page', compact('loan'));
    }




/** *********************************************************************************** */
/** *********************************************************************************** */
/** ******************************** Admin's Operations ********************************* */
/** *********************************************************************************** */
/** *********************************************************************************** */

    public function loansEditAdmin($id){
        $loan= Loans::findOrFail($id);
        $user_payment_method = Integrate::where('user_id', $loan->user_id)
                                        ->where('payment_method', 'collect')
                                        ->first();
        $score = \Helper::creditScore($loan->user_id);
        $degree = ($score/100)*360;
        return view('admin.loan.edit_loan', compact(['loan','user_payment_method','score','degree']));
    }

    public function loanApprove($id){
        $loan= Loans::findOrFail($id);
        $loan->status ="approved";
        $loan->admin_id= Auth::guard('admin')->user()->id;
        $loan->save();
        $user= $loan->user;
        if($user){
            try{
                $user->notify(new LoanApprovalNotification($loan));
            }catch(\Exception $e){
                \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
            }
        }
        return back()->with('success', 'The Loan has been approved.');
    }


    public function loanNotify($id){
        $loan= Loans::findOrFail($id);
        $user= $loan->user;
        if($user){
            try{
                $user->notify(new LoanDueReminderNotification($loan));
            }catch(\Exception $e){
                \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
            }
        }
        return back()->with('success', 'The User: '.$user->name.' has been notified successfully.');
    }


    public function loanReject($id){
        $loan= Loans::findOrFail($id);
        $loan->status ="declined";
        $loan->admin_id= Auth::guard('admin')->user()->id;
        $loan->save();
        $user= $loan->user;
        if($user){
            try{
                $user->notify(new LoanRejectionNotification($loan));
            }catch(\Exception $e){
                \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
            }
        }
        return back()->with('success', 'The Loan has been declined.');
    }


    public function loansAdmin(){
        $loans = Loans::orderBy('created_at','desc')->get();
        return view('admin.loan.loans', compact('loans'));
    }


    public function loansUpdateAdmin(Request $request, $id){
        $this->validate($request,[
            'amount'              => 'required|numeric',
            'reason'              => 'nullable|string',
            'loan_tenor'          => 'required|string',
            'interest'            => 'nullable|string',
            'note'                => 'nullable|string',
        ]);

        $loan = Loans::findOrFail($id);
        $loan->amount= $request->amount;
        $loan->reason= $request->reason;
        $loan->loan_tenor= $request->loan_tenor;
        $loan->interest= $request->interest;
        $loan->note= $request->note;


        if ($request->loan_tenor == "30 days") {
            $loan->payback_date = Carbon::parse($loan->created_at)->addDays(30);
        }
        elseif($request->loan_tenor == "60 days"){
            $loan->payback_date = Carbon::parse($loan->created_at)->addDays(60);
        }
        elseif($request->loan_tenor == "90 days"){
            $loan->payback_date = Carbon::parse($loan->created_at)->addDays(90);
        }
        elseif($request->loan_tenor == "180 days"){
            $loan->payback_date = Carbon::parse($loan->created_at)->addDays(180);
        }
        $loan->save();
        return back()->with('success','Update Successfull!');
    }


    public function loanStatusUpdate(Request $request, $id){
        $this->validate($request,[
            'status'              => 'required|string',
            'note'                => 'nullable|string',
        ]);

        $loan = Loans::findOrFail($id);
        $loan->note= $request->note;
        $loan->status = $request->status;
        $loan->save();

        $admins=Admin::where('pcft',1)->get();
        if($request->status == 'approved'){
            $user= $loan->user;
            if($user){
                try{
                    $user->notify(new LoanApprovalNotification($loan));
                }catch(\Exception $e){
                    \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
                }
            }
            if(!is_null($admins)){
                try{
                    Notification::send($admins, new ApprovedNotificationAdmin($loan));
                }catch(\Exception $e){
                    \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
                }

            }
        }
        if($request->status == 'declined'){
            $user= $loan->user;
            if($user){
                try{
                    $user->notify(new LoanRejectionNotification($loan));
                }
                catch(\Exception $e){
                    \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
                }
            }
            // if(!is_null($admins)){
            //     Notification::send($admins, new RejectionNotificationAdmin($loan));
            // }
        }
        if($request->status == 'disbursed'){
            $user= $loan->user;
            if($user){
                try{
                    $user->notify(new DisburseNotificationUser($loan));
                }catch(\Exception $e){
                    \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
                }

            }
            if(!is_null($admins)){
                try{
                    Notification::send($admins, new DisburseNotificationAdmin($loan));
                }catch(\Exception $e){
                    \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
                }
            }
        }
        return back()->with('success','Loan Status Update Successfull!');
    }

    public function loansDelete($id){
        $loan = Loans::findOrFail($id);
        $loan->delete();
        return redirect()->route('admin.loans')->with('success','Delete Successfull!');;
    }

    public function viewletter($id){
        $loan = Loans::findOrFail($id);
        return view('admin.loan.viewofferletter', compact('loan'));
    }

    public function sendoffer($id){
        $loan = Loans::findOrFail($id);
        $loan->acknowledge_active_page=1;
        $loan->save();
        $user= $loan->user;
        if($user){
            try{
                $user->notify(new OfferSendAdmin($loan));
            }catch(\Exception $e){
                \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
            }

        }
        return back();
    }

}
