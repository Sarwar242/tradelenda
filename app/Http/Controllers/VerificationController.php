<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Loans;
use Auth;
use DB;
use App\User;
use Validator;

class VerificationController extends Controller
{

    public function getWithBVN(Request $request){

        $curl = curl_init();
        try {
            curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.okra.ng/v2/products/kyc/bvn-verify",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{"bvn":"'.$request->bvn.'"
                                       }',
            CURLOPT_HTTPHEADER => [
                "Accept: application/json; charset=utf-8",
                "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWViZjBlN2MwZDcxZDAwMWRkOGZjZWEiLCJpYXQiOjE2NDI4NTI1ODR9.eJ7ZwHlHt4Tnhh18Z42f3yLYFiipRHYFwTXs0eB6_IU",
                "Content-Type: application/json"
            ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            info(json_decode( $response,true,JSON_PRETTY_PRINT));
            curl_close($curl);
            if ($err) {
                return json_encode([
                    'status' => 'error',
                    'data' => $err
                ]);
            }
            else{
                return $response;
            }

        } catch (\Exception $e) {
            return json_encode([
                'status' => 'error',
                'data' => $e
            ]);
        }

    }
    public function verifyWithRC(Request $request){

        $curl = curl_init();
        try {
            curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.okra.ng/v2/products/kyc/rc-verify",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{"rc_number":"'.$request->rc_num.'",
                "company_name":"'.$request->business_name.'"}',
            CURLOPT_HTTPHEADER => [
                "Accept: application/json; charset=utf-8",
                "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWViZjBlN2MwZDcxZDAwMWRkOGZjZWEiLCJpYXQiOjE2NDI4NTI1ODR9.eJ7ZwHlHt4Tnhh18Z42f3yLYFiipRHYFwTXs0eB6_IU",
                "Content-Type: application/json"
            ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            info(json_decode( $response,true,JSON_PRETTY_PRINT));
            curl_close($curl);
            if ($err) {
                return json_encode([
                    'status' => 'error',
                    'data' => $err
                ]);
            }
            else{
                return $response;
            }

        } catch (\Exception $e) {
            return json_encode([
                'status' => 'error',
                'data' => $e
            ]);
        }

    }
    public function verifyWithTIN(Request $request){

        $curl = curl_init();
        try {
            curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.okra.ng/v2/products/kyc/tin-verify",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{"tin_number":"'.$request->tin.'",
                "company_name":"'.$request->business_name.'"
                }',
            CURLOPT_HTTPHEADER => [
                "Accept: application/json; charset=utf-8",
                "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWViZjBlN2MwZDcxZDAwMWRkOGZjZWEiLCJpYXQiOjE2NDI4NTI1ODR9.eJ7ZwHlHt4Tnhh18Z42f3yLYFiipRHYFwTXs0eB6_IU",
                "Content-Type: application/json"
            ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            info("TIN");
            info(json_decode( $response,true,JSON_PRETTY_PRINT));
            curl_close($curl);
            if ($err) {
                return json_encode([
                    'status' => 'error',
                    'data' => $err
                ]);
            }
            else{
                return $response;
            }

        } catch (\Exception $e) {
            return json_encode([
                'status' => 'error',
                'data' => $e
            ]);
        }
    }
    public function connectOkra(Request $request){
        info("OKRA");
        info($request);
        $this->validate($request,[
            'customer_id'       => 'required|string',
            'bank_name'         => 'nullable|string',
            'name'              => 'nullable|string',
            'nuban'             => 'nullable|string',
        ]);
        $user=User::findOrFail(auth()->id());
        $user->customer_id = $request->customer_id;
        $user->has_online_banking = 1;

        if($request->bank_name){
            $user->bank_name =$request->bank_name;
        }if($request->name){
            $user->bank_account_name =$request->name;
        }if($request->nuban){
            $user->bank_account_number =$request->nuban;
        }
        $user->save();
        return json_encode(['success' => true]);
    }

    public function userTransactions($id)
    {
        $user=User::findOrFail($id());
        $today = \Carbon\Carbon::today()->format('Y/m/d');
        $treemonth = \Carbon\Carbon::today()->subMonths(5)->format('Y/m/d');
        if($user->customer_id!=""){
            return false;
        }
        $curl = curl_init();
        try {
            curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.okra.ng/v2/transactions/getByCustomerDate",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{"tin_number":"'.$request->tin.'",
                "customer_id":"'.$user->customer_id.'",
                "from":"'.$treemonth.'",
                "to":"'.$today.'",
                "pdf":true
                }',
            CURLOPT_HTTPHEADER => [
                "Accept: application/json; charset=utf-8",
                "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWViZjBlN2MwZDcxZDAwMWRkOGZjZWEiLCJpYXQiOjE2NDI4NTI1ODR9.eJ7ZwHlHt4Tnhh18Z42f3yLYFiipRHYFwTXs0eB6_IU",
                "Content-Type: application/json"
            ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            info("Transactions");
            info(json_decode( $response,true,JSON_PRETTY_PRINT));
            curl_close($curl);
            if ($err) {
                return json_encode([
                    'status' => 'error',
                    'data' => $err
                ]);
            }
            else{
                return $response;
            }

        } catch (\Exception $e) {
            return json_encode([
                'status' => 'error',
                'data' => $e
            ]);
        }
    }
}
