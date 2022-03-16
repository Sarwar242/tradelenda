<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\VerificationController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\AccountController;
use App\User;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

// Public routes

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::group(['middleware' => 'jwt.verify'], function(){
    Route::post('/verify/code/send', [VerificationController::class, 'resend_code']);
    Route::post('/verify/code', [VerificationController::class, 'verify_code']);
    Route::post('/logout', [LoginController::class, 'logout']);
});

// Protected routes

/* Route::get('/kyc/personal' , [
    'uses' => 'AccountapiController@personalinfo0',
    'as' => 'personalinfo.page',


]); */



Route::get('/kyc/business' , [
    'uses' => 'AccountapiController@businessinfo0',
    'as' => 'businessinfo.page',
    'middleware' => 'auth'

]);

Route::post('/kyc/business/update' , [
    'uses' => 'AccountapiController@update',
    'as' => 'kyc.business.update',
    'middleware' => 'auth'

]);

Route::get('/kyc/financial' , [
    'uses' => 'AccountapiController@financialinfo0',
    'as' => 'financialinfo.page',
    'middleware' => 'auth'

]);

Route::post('/kyc/financial/update' , [
    'uses' => 'AccountapiController@financialupdate',
    'as' => 'kyc.financial.update',
    'middleware' => 'auth'

]);

/************************ Okra Verify Routes */
Route::get('/kyc/personal/bvn' , [
    'uses' => 'VerificationController@getWithBVN',
    'as' => 'personalinfo.getData',

]);
Route::get('/kyc/personal/tin' , [
    'uses' => 'VerificationController@verifyWithTIN',
    'as' => 'tin.verify',

]);
Route::get('/kyc/personal/rc' , [
    'uses' => 'VerificationController@verifyWithRC',
    'as' => 'rc.verify',

]);

Route::post('/financialinfo/connectokra' , [
    'uses' => 'VerificationController@connectOkra',
    'as' => 'okra.connect',

]);

 Route::put('/kyc/personal/update', [AccountController::class, 'personalupdate']);


/** **********************End */
/*
//login user
Route::post('/login', [ApiController::class, 'login']);
//using middleware
Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

    Route::post('/sign-out', [ApiController::class, 'logout']);
 */
