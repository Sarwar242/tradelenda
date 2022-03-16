<?php

namespace App\Http\Controllers\API\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Notifications\VerifyOtpMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Socialite;
use Exception;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;



    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_no' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'],
            //'g-recaptcha-response' => 'required|captcha'
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone_no' => $data['phone_no'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function register(Request $request)
    {
        Log::info($request);
        $otp=self::randomNDigitNumber(6);
        $this->validator($request->all())->validate();
        $user = $this->create($request->all());
        $user->otp = $otp;
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
        $user->save();

        return response()->json([
                  'success' => true,
                  'message' => 'Successfully registered! Please log in to verify your account.',
                  'user' => $user
                ]);

    }

    private function randomNDigitNumber($digits)
    {
        $returnString = mt_rand(1, 9);
        while (strlen($returnString) < $digits) {
            $returnString .= mt_rand(0, 9);
        }
        return $returnString;
    }






    //use this method to signin users
    public function login(Request $request)
{
if (!Auth::attempt($request->only('email', 'password'))) {
return response()->json([
'message' => 'Invalid login details'
           ], 401);
       }

$user = User::where('email', $request['email'])->firstOrFail();

$token = $user->createToken('auth_token')->plainTextToken;

return response()->json([
           'access_token' => $token,
           'token_type' => 'Bearer',
]);
}
    // this method signs out users by removing tokens
    public function signout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }

    public function me(Request $request)
{
return $request->user();
}

}
