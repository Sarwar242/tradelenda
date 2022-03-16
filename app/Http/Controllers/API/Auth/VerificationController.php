<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Str;
use App\Notifications\VerifyOtpMail;
use App\Notifications\WelcomeNotification;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class VerificationController extends Controller
{

    public function resend_code(Request $request){
        $user = auth('api')->user();
        $otp=self::randomNDigitNumber(6);
        $user->otp =$otp;
        $user->save();
        try {
            $message = "Hi ".$user->first_name.", Your otp verification code is ".$otp;
            $receiverNumber=$user->phone_no;
            $client = new Client(env("TWILIO_SID",'AC2b063bdc70dc88b7cb5f8f8f361bcfe1'), env("TWILIO_TOKEN",'502b336391ee9c9cffdc5a54bdb796cf'));
            $client->messages->create($receiverNumber, [
                'from' => env("TWILIO_FROM",'+12532814934'),
                'body' => $message]);
        } catch (\Throwable $th) {
            \Log::error($th);
        }


        $user->notify(new VerifyOtpMail($otp));
        $verified = false;
        if(!is_null($user->email_verified_at)){
            $verified=true;
        }
        $response = [
            'success' => true,
            'verified' => $verified,
            'user' => $user,
        ];
        return response($response, 201);
    }


    public function verify_code(Request $request){
        $user = auth('api')->user();
        $this->validate($request, [
            'code'=>'required|numeric|digits_between:5,10',
           ]);
        $code=$request->code;
        if($user->otp === $code){
            $user->otp="";
            $user->email_verified_at=now();
            $user->save();
            try{
                $user->notify(new WelcomeNotification());
            }catch(\Exception $e){
                \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
            }
            $response = [
                'success' => true,
                'verified' => true,
                'user' => $user,
            ];
            return response($response, 201);
        }
        $verified = false;
        $message="Invalid OTP!";
        if(!is_null($user->email_verified_at)){
            $verified=true;
            $message="Already verified!";
        }
        $response = [
            'success' => false,
            'verified' => $verified,
            'message' => $message,
            'user' => $user,
        ];
        return response($response, 400);
    }

    private function randomNDigitNumber($digits)
    {
        $returnString = mt_rand(1, 9);
        while (strlen($returnString) < $digits) {
            $returnString .= mt_rand(0, 9);
        }
        return $returnString;
    }
}
