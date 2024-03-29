<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Str;
use App\Notifications\VerifyOtpMail;
use App\Notifications\WelcomeNotification;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

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
        return back()->withResent('Verification code sent to your mail and phone, please enter the code to verify.');
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
            return redirect()->route('account.page')->withStatus('Congratulations, You have successfully verified your contact.');
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
