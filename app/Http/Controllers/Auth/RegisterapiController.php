<?php

namespace App\Http\Controllers\Auth;

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



class RegisterapiController extends Controller
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

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
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
        $user->notify(new VerifyOtpMail($otp));
        
        $token = $user->createToken('auth_token')->plainTextToken;
        $user->save();  
    
    return response()->json([
                  'access_token' => $token,
                       'token_type' => 'Bearer',
                      
    ]);
    
           return redirect()->route('login')->withAlert('Registered successfully, please check your email and login to verify your email.');
       
    
    
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
