<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/terms-and-conditions', function(){
    return view('pages.terms-and-conditions');
});
Route::get('/aboutus', function(){
    return view('pages.aboutus');
});
Route::get('/learn', function(){
    return view('pages.invest');
});

Auth::routes(['verify' => true]);
// Route::get('/', function () {
//     if (Auth::check()) {
//         return redirect('/home');
//     } else {
//         return view('auth.login');
//     }
// });
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/verify/code/send', 'Auth\VerificationController@resend_code')->name('verification.code.resend');
Route::post('/verify/code', 'Auth\VerificationController@verify_code')->name('verification.code.verify');


Route::get('/loans' , [
    'uses' => 'LoanController@lonn',
    'as' => 'loans.page',
    'middleware' => 'auth'

]);

Route::get('/createguarantor' , [
    'uses' => 'SureController@addguaranter',
    'as' => 'createguarantor.page',
    'middleware' => 'auth'

]);

Route::get('/guarantor' , [
    'uses' => 'SureController@index',
    'as' => 'guarantor.page',
    'middleware' => 'auth'

]);

Route::get('/viewguarantor/{id}' , [
    'uses' => 'SureController@indexview',
    'as' => 'viewguarantor.page',
    'middleware' => 'auth'
]);

Route::get('/notification' , [
    'uses' => 'NotificationController@indexnotify',
    'as' => 'notification.page',
    'middleware' => 'auth'

]);
Route::get('/notifications/readall', 'NotificationController@readall')->name('notifications.readall');
Route::get('/notifications/delete/{id}', 'NotificationController@delete')->name('notifications.delete');

Route::get('/integration' , [
    'uses' => 'PaymentController@carding',
    'as' => 'integration.page',
    'middleware' => 'auth'

]);
Route::get('/integration/success' , [
    'uses' => 'PaymentController@successConnection',
    'as' => 'integration.success',
    'middleware' => 'auth'
]);
Route::get('/integration/unlink' , [
    'uses' => 'PaymentController@unlinkCollect',
    'as' => 'integration.unlink',
    'middleware' => 'auth'
]);

Route::post('/createguarantor/guarant','SureController@guarant');

Route::get('/deleteg/{id}', [
    'uses'=> 'SureController@Delete',
    'as'=> 'delete.gmember',
    'middleware' => 'auth'
    ]);

/* Route::get('/editprofile' , [
    'uses' => 'AccountController@acct',
    'as' => 'editprofile.page',
    'middleware' => 'auth'

]); */

Route::get('/kyc/personal' , [
    'uses' => 'AccountController@personalinfo0',
    'as' => 'personalinfo.page',
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

/** **********************End */
Route::get('/kyc/business' , [
    'uses' => 'AccountController@businessinfo0',
    'as' => 'businessinfo.page',
    'middleware' => 'auth'

]);

Route::post('/kyc/business/update' , [
    'uses' => 'AccountController@update',
    'as' => 'kyc.business.update',
    'middleware' => 'auth'

]);

Route::get('/kyc/financial' , [
    'uses' => 'AccountController@financialinfo0',
    'as' => 'financialinfo.page',
    'middleware' => 'auth'

]);

Route::get('/profile' , [
    'uses' => 'AccountController@profili',
    'as' => 'profile.page',
    'middleware' => 'auth'

]);

Route::get('/account' , [
    'uses' => 'AccountController@acctview',
    'as' => 'account.page',
    'middleware' => 'auth'

]);

Route::post('/kyc/personal/update' , [
    'uses' => 'AccountController@personalupdate',
    'as' => 'kyc.personal.update',
    'middleware' => 'auth'

]);

Route::post('/kyc/business/update' , [
    'uses' => 'AccountController@update',
    'as' => 'kyc.business.update',
    'middleware' => 'auth'

]);

Route::post('/kyc/financial/update' , [
    'uses' => 'AccountController@financialupdate',
    'as' => 'kyc.financial.update',
    'middleware' => 'auth'

]);

Route::get('/loans' , [
    'uses' => 'LoanController@lonn',
    'as' => 'myloans.page',
    'middleware' => 'auth'

]);

Route::get('/request/loan' , [
    'uses' => 'LoanController@loanrequest',
    'as' => 'newloanrequest.page',
    'middleware' => 'auth'

]);

Route::post('/request/loan' , [
    'uses' => 'LoanController@loanrequestpost',
    'as' => 'newloanrequest.post',
    'middleware' => 'auth'

]);


Route::get('/view/loan/details/{id}' , [
    'uses' => 'LoanController@show',
    'as' => 'viewloan.page',
    'middleware' => 'auth'

]);

Route::get('/offerletter/{id}', [
    'uses' => 'LoanController@view',
    'as' => 'letter.page',
    'middleware' => 'auth'

]);

Route::post('/offerletter/acknowledge/{id}', [
    'uses' => 'LoanController@acknowledge',
    'as' => 'letter.acknowledge',
    'middleware' => 'auth'
]);



Route::post('/personalinfo/profic' , [
    'uses' => 'AccountController@propic',
    'as' => 'personalinfo.propic',
    'middleware' => 'auth'

]);

Route::post('/businessinfo/seal','AccountController@sealFileUpload')->middleware('auth');
Route::post('/financialinfo/bank_statement','AccountController@bankStatement')->middleware('auth');
Route::post('/businessinfo/cacCertificate','AccountController@cacCertificate')->middleware('auth');
Route::post('/businessinfo/cac2FileUpload','AccountController@cac2FileUpload')->middleware('auth');
Route::post('/businessinfo/cac7FileUpload','AccountController@cac7FileUpload')->middleware('auth');

//Locations Api

Route::get('/get-cities/{id}', function ($id) {
    return json_encode(App\City::where('state_id', $id)->get());
});
Route::get('/get-states/{id}', function ($id) {
    return json_encode(App\State::where('country_id', $id)->get());
});


//Payments
Route::post('/webhook/collect','PaymentController@webhookCollect')->name('webhook.collect');
Route::post('/webhook/payment','PaymentController@webhookPayment')->name('webhook.payment');

// Google Auth
Route::get('google', function () {
    return view('googleAuth');
});

Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');



//Admins
Route::group( ['prefix' => 'admin', 'as' => 'admin.'], function() {

    //Authorization
    Route::get('/login','Auth\AdminAuthController@showLoginForm')->name('login');

    Route::post('/login', 'Auth\AdminAuthController@login')->name('login.submit');
    Route::get('/logout', 'Auth\AdminAuthController@logout')->name('logout');

    // Password Reset
    Route::get('/password/reset','Auth\AdminAuthController@showLinkRequestForm')
    ->name('password.request');
    Route::post('/password/email','Auth\AdminResetPasswordController@sendResetLinkEmail')
    ->name('password.email');

    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')
    ->name('password.reset');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')
        ->name('password.update');
    //out of middleware
    Route::post('password/update', 'AdminController@passwordUpdate')->name('password.update.submit');
    Route::get('password/change', 'AdminController@passwordForm')->name('password.change');

    Route::group(['middleware' => 'check_pcft'], function(){
        //Dashboard
        Route::get('/', 'AdminController@index')->name('dashboard');
        //Admin
        Route::get('admin/create', 'AdminController@createAdmin')->name('admin.create');
        Route::post('admin/create', 'AdminController@storeAdmin')->name('admin.create.submit');
        Route::get('admins', 'AdminController@admins')->name('admins');
        Route::get('profile/update', 'AdminController@editProfile')->name('profile.update');
        Route::post('profile/update', 'AdminController@updateProfile')->name('profile.update.submit');
        Route::get('admin/delete/{id}', 'AdminController@destroy')->name('admin.delete');
        Route::get('userlist', 'AdminController@usersdisplay')->name('userlist');
        Route::get('userview/{id}', 'AdminController@usersdetail')->name('userview');
        Route::get('/deleteu/{id}', 'AdminController@Deleteuser')->name('delete.user');
        Route::get('/viewguarantor/{id}', 'AdminController@viewguarantor')->name('viewguarantor');
        //Loans
        Route::get('/loans', 'LoanController@loansAdmin')->name('loans');
        Route::get('/loan/reject/{id}', 'LoanController@loanReject')->name('loan.reject');
        Route::get('/loan/approve/{id}', 'LoanController@loanApprove')->name('loan.approve');
        Route::get('/loan/notify/{id}', 'LoanController@loanNotify')->name('loan.notify');
        Route::get('/loan/delete/{id}', 'LoanController@loansDelete')->name('loan.delete');
        Route::get('/loan/edit/{id}', 'LoanController@loansEditAdmin')->name('loan.edit');
        Route::get('/loan/sendoffer/{id}', 'LoanController@sendoffer')->name('loan.sendoffer');
        Route::get('/loan/viewoffer/{id}', 'LoanController@viewletter')->name('loan.viewofferletter');
        Route::post('/loan/update/{id}', 'LoanController@loansUpdateAdmin')->name('loan.update.submit');
        Route::post('/loan/status/update/{id}', 'LoanController@loanStatusUpdate')->name('loan.status.update');

        //Charge admin.loan.charge
        Route::post('/loan/charge/{id}', 'PaymentController@chargeAdmin')->name('loan.charge');
        Route::get('/payments', 'PaymentController@index')->name('payments');
        Route::get('/payment/recheck/{id}', 'PaymentController@checkPayment');

        //Notifications
        Route::get('/notifications', 'NotificationController@notificationsAdmin')->name('notifications');
        Route::get('/notifications/readall', 'NotificationController@readallAdmin')->name('notifications.readall');
        Route::get('/notifications/delete/{id}', 'NotificationController@deleteAdmin')->name('notifications.delete');


        /** ********************************************************************************** */
        /** ********************************* Settings *************************************** */
        /** ********************************************************************************** */

        Route::get('/settings', 'SettingController')->name('settings');
        Route::post('/settings/update/{slug}', 'SettingController@updateInterest')->name('settings.update.submit');



        //Countries
        Route::get('/countries', 'CountryController')->name('countries');
        Route::get('/states', 'StateController')->name('states');
        Route::get('/cities', 'CityController')->name('cities');

    });

});

