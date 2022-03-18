<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\VerificationController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\AccountController;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\LoanController;
use App\Http\Controllers\API\GuarantorController;
use App\Http\Controllers\API\NotificationController;
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


    Route::post('/kyc/personal/update', [AccountController::class, 'personalUpdate']);
    Route::post('/kyc/business/update', [AccountController::class, 'businessUpdate']);
    Route::post('/kyc/financial/update', [AccountController::class, 'financialUpdate']);

    /***** ******************* ***** ****** Loan Requests ****************************** ******************* */
    Route::get('/loans', [LoanController::class, 'loans']);
    Route::get('/loan', [LoanController::class, 'show']);
    Route::post('/loan/request', [LoanController::class, 'store']);

    /***** ******************* ***** ****** Guarantor ****************************** ******************* */
    Route::get('/guarantors', [GuarantorController::class, 'index']);
    Route::get('/guarantor', [GuarantorController::class, 'show']);
    Route::post('/guarantor/create', [GuarantorController::class, 'store']);

    /***** ******************* ***** ****** Guarantor ****************************** ******************* */
    Route::get('notifications', [NotificationController::class, 'index']);
    Route::post('read-notification',  [NotificationController::class, 'readOne']);
    Route::post('delete-notification',  [NotificationController::class, 'delete']);
    Route::get('read-notifications', [NotificationController::class, 'readall']);
});


//Countries
Route::get('/countries', [LocationController::class, 'getCountries']);
Route::get('/getstate', [LocationController::class, 'getState']);
Route::get('/getcity', [LocationController::class, 'getCity']);


/** ************************************************ End ********************************************** */
