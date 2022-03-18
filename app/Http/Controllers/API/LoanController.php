<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Admin;
use App\Setting;
use Auth;
use Carbon\Carbon;
use DB;
use App\Loans;
use App\Integrate;
use App\Payment;
use Illuminate\Support\Facades\Notification;
use App\Notifications\LoanNotificationAdmin;
use App\Notifications\LoanDueReminderNotification;
use App\Notifications\LoanApprovalNotification;
use App\Notifications\LoanRejectionNotification;
use App\Notifications\RejectionNotificationAdmin;
use App\Notifications\DisburseNotificationAdmin;
use App\Notifications\DisburseNotificationUser;
use App\Notifications\ApprovedNotificationAdmin;
use App\Notifications\OfferSendAdmin;
use App\Notifications\OfferAccepted;
use App\Helpers\Helper;
class LoanController extends Controller
{
    public function loans(){
        $loans= Loans::where('user_id',auth('api')->user()->id)->get();
        return response()->json([
            'success'=>true,
            'loans'=> $loans,
        ],200);
    }
    public function show(Request $request){
        $loan= Loans::find($request->loan_id);
        if(empty($loan)){
            return response()->json([
                'success'=>false,
                'message'=> 'Loan not found!',
            ], 404);
        }
        return response()->json([
            'success'=>true,
            'loan'=> $loan,
        ], 200);
    }
    public function store(Request $request)
    {
        $request['reasons'] = Helper::getReasons();
        $request['durations'] = Helper::getDurations();
        $validator = Validator::make(request()->all(), [
            'amount'              => 'required|numeric',
            'reason'              => 'required|in_array:reasons.*',
            'loan_tenor'          => 'required|in_array:durations.*',
            'interest'            => 'nullable|string',
            'note'                => 'nullable|string',
            'proforma'            => 'nullable|file',
            'lpo'                 => 'nullable|file',
        ],
        [
         'reason.in_array'=> 'Valid Reasons: '.implode(" | ",$request['reasons']).'.', // custom message
         'loan_tenor.in_array'=> 'Valid Durations: '.implode(" | ",$request['durations']).'.', // custom message
        ]);

          if ($validator->fails()) {
              return response()->json([
                'success'      =>false,
                'invalid'      =>true,
                'errors'       => $validator->errors()
              ], 401);
          }
          $loan = new Loans;
          $loan->amount= $request->amount;
          $loan->reason= $request->reason;
          $loan->loan_tenor= $request->loan_tenor;
          $loan->interest= $request->interest;
          $loan->note= $request->note;
          $interest=Setting::where('slug','interest')->first();
          $loan->interest= $interest ? $interest->value: "5";
          $loan->status= "pending";

          $loan->email= auth('api')->user()->email;
          $loan->user_id= auth('api')->user()->id;



          if ($request->loan_tenor == "30 days") {
              $loan->payback_date = Carbon::now()->addDays(30);
          }
          elseif($request->loan_tenor == "60 days"){
              $loan->payback_date = Carbon::now()->addDays(60);
          }
          elseif($request->loan_tenor == "90 days"){
              $loan->payback_date = Carbon::now()->addDays(90);
          }
          elseif($request->loan_tenor == "180 days"){
              $loan->payback_date = Carbon::now()->addDays(180);
          }

          if($request->reason == "LPO"){
              if($request->hasFile('proforma')){
                $path = $request->file('proforma')->store('proforma', 's3');
                Storage::disk('s3')->setVisibility($path, 'public');
                $loan->public_id_proforma= basename($path);
                $loan->proformafile = Storage::disk('s3')->url($path);
              }
              if($request->hasFile('lpo')){
                  $path = $request->file('lpo')->store('lpo', 's3');
                  Storage::disk('s3')->setVisibility($path, 'public');
                  $loan->public_id_lpo= basename($path);
                  $loan->lpofile = Storage::disk('s3')->url($path);
              }
          }

          $loan->save();
          $admins=Admin::where('pcft',1)->get();
          if(!is_null($admins)){
              try{
                  Notification::send($admins, new LoanNotificationAdmin($loan));
              }catch(\Exception $e){
                  \Log::warning("Notification mail couldn't be Sent. Exception: ".$e);
              }
          }
          return response()->json([
              'success'=>true,
              'message'=> 'Loan request added successfully!',
          ], 200);
    }
}
