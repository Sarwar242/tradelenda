<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterapiController;
use App\Http\Controllers\Auth\LoginapiController;
use App\Http\Controllers\AccountapiController;
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

    Route::post('/register', [RegisterapiController::class, 'register']);
Route::post('/login', [LoginapiController::class, 'login']);
Route::get('/verify/code/send', 'Auth\VerificationController@resend_code')->name('verification.code.resend');
Route::post('/verify/code', 'Auth\VerificationController@verify_code')->name('verification.code.verify');


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

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
     
 Route::put('/kyc/personal/update', [AccountapiController::class, 'personalupdate']);

/* Route::put('/kyc/personal/update{id}' , [
    'uses' => 'AccountapiController@personalupdate',
    'as' => 'kyc.personal.update',
]);
    */

    Route::post('/logout', [AuthController::class, 'logout']);
});

/** **********************End */
/* 
//login user
Route::post('/login', [ApiController::class, 'login']);
//using middleware
Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

    Route::post('/sign-out', [ApiController::class, 'logout']);
 */