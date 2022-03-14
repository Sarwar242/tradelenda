<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Str;
use App\Notifications\VerifyOtpMail;
use App\Notifications\WelcomeNotification;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }


    public function resend_code(){
        $user = auth()->user();
        $otp=self::randomNDigitNumber(6);
        $user->otp =$otp;
        $user->save();
        $user->notify(new VerifyOtpMail($otp));
        return back()->withResent('Verification code sent to your mail, please enter the code to verify.');
    }


    public function verify_code(Request $request){
        $user = auth()->user();
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
            return redirect()->route('editprofile.page')->withStatus('Congratulations, You have successfully verified your email.');
        }
        return back()->withFailed('Sorry, The code you entered seems to be incorrect, Please enter the correct code.');
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
