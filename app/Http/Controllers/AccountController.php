<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Loans;
use Auth;
use DB;
use App\User;
use Validator;



class AccountController extends Controller
{
    public function acct(){

         return view('pages.editprofile');
     }

     public function acctview(){
        $accdata =auth()->user();
        if(is_null(auth()->user()->user_image)){
            return redirect()->route('editprofile.page');
        }else{
            return view('pages.account')->with('accdata',$accdata);
        }

     }

     public function card(){

        return view('pages.test');
    }


    public function profili(){

        return view('pages.profile');
    }

    public function personalinfo0(){

        return view('pages.personalinfo');
    }


    public function businessinfo0(){

        return view('pages.businessinfo');
    }

    public function financialinfo0(){

        return view('pages.financialinfo');
    }



    public function personalupdate(Request $request){
        $this->validate($request,[
            'email'               => 'required|email',
            'name'                => 'nullable|string',
            'title'               => 'nullable|string',
            'first_name'          => 'nullable|string',
            'last_name'           => 'nullable|string',
            'position'            => 'nullable|string',
            'share'               => 'nullable|string',
            'dob'                 => 'nullable|string',
            'gender'              => 'nullable|string',
            'bvn'                 => 'nullable|string',
            'id_type'             => 'nullable|string',
            'id_num'              => 'nullable|string',
            'address'             => 'nullable|string',
            'country'             => 'nullable|numeric',
            'state'               => 'nullable|numeric',
            'city'                => 'nullable|numeric',
            'residential_status'  => 'nullable|string',
            'marital_status'      => 'nullable|string',
            'wdymtta'             => 'nullable|string',
            'dependents'          => 'nullable|string',
            'edu_level'           => 'nullable|string',

        ]);
        $user = User::findOrFail(Auth::id());
        if(request()->has('email'))
            $user->email =$request->email;
        if(request()->has('name'))
            $user->email =$request->email;


        $user->title =$request->title;
        $user->first_name =$request->first_name;
        $user->last_name =$request->last_name;
        $user->position =$request->position;
        $user->share =$request->share;
        $user->dob =$request->dob;
        $user->gender =$request->gender;
        if($request->is_valid_bvn != 0)
            $user->bvn = $request->bvn;
        else
            $user->bvn = "";
        $user->id_type =$request->id_type;
        $user->id_num =$request->id_num;
        $user->address =$request->address;
        $user->country_id =$request->country;
        $user->state_id =$request->state;
        $user->city_id =$request->city;
        $user->residential_status =$request->residential_status;
        $user->marital_status =$request->marital_status;
        $user->wdymtta =$request->wdymtta;
        $user->dependents =$request->dependents;
        $user->edu_level =$request->edu_level;


        /* $user->business_type =$request->business_type;
        $user->business_name =$request->business_name;
        $user->director =$request->director;
        $user->secretary =$request->secretary;
        $user->registered =$request->registered;
        $user->rc_num =$request->rc_num;
        $user->establishment_date =$request->establishment_date;
        $user->business_address =$request->business_address;
        $user->b_country_id =$request->b_country;
        $user->b_state_id =$request->b_state;
        $user->b_city_id =$request->b_city;
        $user->b_wdymtta =$request->b_wdymtta;
        $user->owned_or_rented =$request->owned_or_rented;
        $user->outlets =$request->outlets;
        $user->total_employees = $request->total_employees;
        $user->sales_method =$request->sales_method;
        $user->industry =$request->industry;
        $user->monthly_sales =$request->monthly_sales;
        $user->monthly_expenses =$request->monthly_expenses;
        $user->business_duration =$request->business_duration;
        $user->tin =$request->tin;
        $user->b_id_type =$request->b_id_type;
        $user->b_id_num =$request->b_id_num;
        $user->bank_name =$request->bank_name;
        $user->bank_account_name =$request->bank_account_name;
        $user->bank_account_number =$request->bank_account_number;
        $user->has_online_banking =$request->has_online_banking;
        $user->last_loan_period =$request->last_loan_period;
        $user->loan_amount =$request->loan_amount; */
        $user->save();
        // dd($user);

        return redirect()->route('profile.page')->with('success','Account has been successfully Updated!');

        //   return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function update(Request $request){
        $this->validate($request,[
            'business_type'       => 'nullable|string',
            'business_name'       => 'nullable|string',
            'director'            => 'nullable|string',
            'secretary'           => 'nullable|string',
            'registered'          => 'nullable|boolean',
            'rc_num'              => 'nullable|string',
            'establishment_date'  => 'nullable|string',
            'business_address'    => 'nullable|string',
            'b_country'           => 'nullable|numeric',
            'b_state'             => 'nullable|numeric',
            'b_city'              => 'nullable|numeric',
            'b_wdymtta'           => 'nullable|string',
            'owned_or_rented'     => 'nullable|string',
            'outlets'             => 'nullable|string',
            'total_employees'     => 'nullable|numeric',
            'sales_method'        => 'nullable|string',
            'industry'            => 'nullable|string',
            'monthly_sales'       => 'nullable|string',
            'monthly_expenses'    => 'nullable|string',
            'business_duration'   => 'nullable|string',
            'tin'                 => 'nullable|string',
            'b_id_type'           => 'nullable|string',
            'b_id_num'            => 'nullable|string',
        ]);

        $user = User::findOrFail(Auth::id());
        if(request()->has('email'))
            $user->email =$request->email;
        if(request()->has('name'))
            $user->email =$request->email;


        $user->business_type =$request->business_type;
        $user->business_name =$request->business_name;
        $user->director =$request->director;
        $user->secretary =$request->secretary;
        $user->registered =$request->registered;
        if($request->rc_num==0)
            $user->rc_num = "";
        else
            $user->rc_num =$request->rc_num;
            
        $user->establishment_date =$request->establishment_date;
        $user->business_address =$request->business_address;
        $user->b_country_id =$request->b_country;
        $user->b_state_id =$request->b_state;
        $user->b_city_id =$request->b_city;
        $user->b_wdymtta =$request->b_wdymtta;
        $user->owned_or_rented =$request->owned_or_rented;
        $user->outlets =$request->outlets;
        $user->total_employees = $request->total_employees;
        $user->sales_method =$request->sales_method;
        $user->industry =$request->industry;
        $user->monthly_sales =$request->monthly_sales;
        $user->monthly_expenses =$request->monthly_expenses;
        $user->business_duration =$request->business_duration;
        if($request->tin==0)
            $user->tin ="";
        else
            $user->tin = $request->tin;
        $user->b_id_type =$request->b_id_type;
        $user->b_id_num =$request->b_id_num;



        /* $user->bank_name =$request->bank_name;
        $user->bank_account_name =$request->bank_account_name;
        $user->bank_account_number =$request->bank_account_number;
        $user->has_online_banking =$request->has_online_banking;
        $user->last_loan_period =$request->last_loan_period;
        $user->loan_amount =$request->loan_amount;  */
        $user->save();
        // dd($user);

        return redirect()->route('profile.page')->with('success','Account has been successfully Updated!');

        //   return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function financialupdate(Request $request){
        $this->validate($request,[
            'bank_name'           => 'nullable|string',
            'bank_account_name'   => 'nullable|string',
            'bank_account_number' => 'nullable|string',
            'has_online_banking'  => 'nullable|boolean',
            'last_loan_period'    => 'nullable|string',
            'loan_amount'         => 'nullable|numeric',
        ]);

        $user = User::findOrFail(Auth::id());
        if(request()->has('email'))
            $user->email =$request->email;
        if(request()->has('name'))
            $user->email =$request->email;


        $user->bank_name =$request->bank_name;
        $user->bank_account_name =$request->bank_account_name;
        $user->bank_account_number =$request->bank_account_number;
        $user->has_online_banking =$request->has_online_banking;
        $user->last_loan_period =$request->last_loan_period;
        $user->loan_amount =$request->loan_amount;
        $user->save();
        // dd($user);

        return redirect()->route('profile.page')->with('success','Account has been successfully Updated!');

        //   return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function propic(Request $request){

        $this->validate($request,[
            'file' => 'required|file|mimes:pdf,jpg,png,jpeg|max:5000',
        ]);


        $user = auth()->user();
        if ($request->hasFile('file')) {
        $path = $request->file('file')->store('profile_image', 's3');

        Storage::disk('s3')->setVisibility($path, 'public');
            $user->public_id=basename($path);
            $user->user_image =Storage::disk('s3')->url($path);
            $user->save();
        }

        return response()->json([
            'success'=>true,
            'message'=> 'Upload Successfull!',
        ]);
    }

    public function bankStatement(Request $request){
        $this->validate($request,[
            'file' => 'required|file|mimes:pdf,jpg,png,jpeg,pdf|max:5000',
        ]);

        $user = auth()->user();
        if ($request->hasFile('file')) {
        $path = $request->file('file')->store('bank_statement', 's3');

        Storage::disk('s3')->setVisibility($path, 'public');
           $user->public_id_bank =basename($path);
            $user->bank_statement=Storage::disk('s3')->url($path);
            $user->save();
    }
        return response()->json([
            'success'=>true,
            'message'=> 'Bank Statement Upload Successfull!',
        ]);
}


    public function sealFileUpload(Request $request){
        $this->validate($request,[
            'file' => 'required|file|mimes:pdf,jpg,png,jpeg|max:5000',
        ]);

        $user = auth()->user();
        if ($request->hasFile('file')) {
        $path = $request->file('file')->store('seals', 's3');

        Storage::disk('s3')->setVisibility($path, 'public');
            $user->public_seal=basename($path);
            $user->seal = Storage::disk('s3')->url($path);
            $user->save();
        }

        return response()->json([
            'success'=>true,
            'message'=> 'Company Seal Uploaded Successfully!',
        ]);
    }


    public function cacCertificate(Request $request){
        $this->validate($request,[
            'file' => 'required|file|mimes:pdf,jpg,png,jpeg|max:5000',
        ]);

        $user = auth()->user();
        if ($request->hasFile('file')) {
        $path = $request->file('file')->store('cac_certificates', 's3');

        Storage::disk('s3')->setVisibility($path, 'public');
            $user->public_id_cac_certificate=basename($path);
            $user->cac_certificate = Storage::disk('s3')->url($path);
            $user->save();
        }

        return response()->json([
            'success'=>true,
            'message'=> 'CAC Certificate Uploaded Successfully!',
        ]);
    }

    public function cac2FileUpload(Request $request){
        $this->validate($request,[
            'file' => 'required|file|mimes:pdf,jpg,png,jpeg|max:5000',
        ]);

        $user = auth()->user();
        if ($request->hasFile('file')) {
        $path = $request->file('file')->store('cac2', 's3');

        Storage::disk('s3')->setVisibility($path, 'public');
            $user->public_id_cac2=basename($path);
            $user->cac2 = Storage::disk('s3')->url($path);
            $user->save();
        }

        return response()->json([
            'success'=>true,
            'message'=> 'Upload Successfull!',
        ]);
    }



    public function cac7FileUpload(Request $request){
        $this->validate($request,[
            'file' => 'required|file|mimes:pdf,jpg,png,jpeg|max:5000',
        ]);

        $user = auth()->user();
        if ($request->hasFile('file')) {
        $path = $request->file('file')->store('cac7', 's3');

        Storage::disk('s3')->setVisibility($path, 'public');
            $user->public_id_cac7=basename($path);
            $user->cac7 = Storage::disk('s3')->url($path);
            $user->save();
        }

        return response()->json([
            'success'=>true,
            'message'=> 'Upload Successfull!',
        ]);
    }

}
