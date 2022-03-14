<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use App\Notifications\VerifyOtpMail;
use Illuminate\Support\Facades\Log;
use Socialite;
use Exception;



class ApiController extends Controller

{public function register(Request $request)
    {
    $validatedData = $request->validate([
                       'first_name' => 'required|string|max:255',
                       'last_name' => 'required|string|max:255',
                       'phone_no' => 'required|string|max:255',
                       'email' => 'required|string|email|max:255|unique:users',
                       'password' => 'required|string|min:8',
    ]);
    
          $user = User::create([
                  'first_name' => $validatedData['first_name'],
                  'last_name' => $validatedData['last_name'],
                  'phone_no' => $validatedData['phone_no'],
                  'email' => $validatedData['email'],
                  'password' => Hash::make($validatedData['password']),
           ]);
    
    $token = $user->createToken('auth_token')->plainTextToken;
    
    return response()->json([
                  'access_token' => $token,
                       'token_type' => 'Bearer',
    ]);
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
