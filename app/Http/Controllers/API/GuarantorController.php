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
use App\Sure;
use App\Integrate;
use App\Payment;
use App\Country;
use App\State;
use App\City;
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

class GuarantorController extends Controller
{
    public function index(){
        $guarantors= Sure::where('user_id',auth('api')->user()->id)->get();
        return response()->json([
            'success'=>true,
            'guarantors'=> $guarantors,
        ],200);
    }
    public function show(Request $request){
        $guarantor= Sure::find($request->id);
        if(empty($guarantor)){
            return response()->json([
                'success'=>false,
                'message'=> 'Guarantor not found!',
            ], 404);
        }
        return response()->json([
            'success'=>true,
            'guarantor'=> $guarantor,
        ], 200);
    }
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'title' => 'required',
            'address' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'dob' => 'required',
            'state' => 'required',
            'city' => 'nullable',
            'gemail' => 'required',
            'bvn' => 'required',
            'occupation' => 'nullable',
            'role_in_company' => 'required',
            'company_name' => 'required',
            'phone' => 'required',
        ]);
          if ($validator->fails()) {
              return response()->json([
                'success'      =>false,
                'invalid'      =>true,
                'errors'       => $validator->errors()
              ], 401);
          }
        $country = Country::findOrFail($request->country)->name;
        $state   = State::findOrFail($request->state)->name;
        $city    = City::findOrFail($request->city)->name;
        $guarantor = new Sure;
        $guarantor->title        = $request->title;
        $guarantor->email        = auth('api')->user()->email;
        $guarantor->user_id      = auth('api')->user()->id;
        $guarantor->address      = $request->address;
        $guarantor->first_name   = $request->first_name;
        $guarantor->last_name    = $request->last_name;
        $guarantor->gender       = $request->gender;
        $guarantor->country      = $country;
        $guarantor->dob          = $request->dob;
        $guarantor->state        = $state;
        $guarantor->lga          = $city;
        $guarantor->gemail       = $request->gemail;
        $guarantor->coy_name     = $request->company_name;
        // $guarantor->occupation   = $request->occupation;
        $guarantor->bvn          = $request->bvn;
        $guarantor->wic          = $request->role_in_company;
        $guarantor->phoneno      = $request->phone;
        $guarantor->save();
        return response()->json([
            'success'=>true,
            'message'=> 'Guarantor added successfully!',
        ], 200);
    }
}
