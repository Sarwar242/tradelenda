<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Sure;
use App\Country;
use App\State;
use App\City;
use DB;
use Validator;

class SureController extends Controller
{
    public function guarant(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'address' => 'required',
            'fName' => 'required',
            'lName' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'DOB' => 'required',
            'state' => 'required',
            'gemail' => 'required',
            'bvn' => 'required',
            'wic' => 'required',
            'coy_name' => 'required',
            'phoneno' => 'required',
            ]);


        $country = Country::findOrFail($request->country)->name;
        $state = State::findOrFail($request->state)->name;
        $city = City::findOrFail($request->city)->name;
        $createg = new Sure;
        $createg->title = $request->title;
        $createg->email = auth()->user()->email;
        $createg->user_id = auth()->user()->id;
        $createg->address = $request->address;
        $createg->first_name = $request->fName;
        $createg->last_name = $request->lName;
        $createg->gender = $request->gender;
        $createg->country = $country;
        $createg->dob = $request->DOB;
        $createg->state = $state;
        $createg->lga = $city;
        $createg->gemail = $request->gemail;
        $createg->coy_name = $request->coy_name;
        $createg->occupation = $request->occupation;
        $createg->bvn = $request->bvn;
        $createg->wic = $request->wic;
        $createg->phoneno = $request->phoneno;
        $createg->save();
         //return response()->json(['success'=>'Data is successfully added']);
        return back()->with('success','Guarantor successfully added');
        //   return response()->json(['error'=>$validator->errors()->all()]);

     }

    public function addguaranter(){
        return view('pages.createguarantor');
    }

     public function index(){
        $guara = Sure::where('email', Auth::user()->email)->orderBy('created_at','desc')->get();
        //$guara = Sure::table('sures')->get()->where('email', Auth::user()->email);
        return view('pages.guarantor', compact('guara'));
     }
     public function indexview($id){
        $gdata =Sure::find($id);
       // $unity = Surety::where('first_name',$first_name)->firstOrFail();
         return view('pages.viewguarantor')->with('gdata',$gdata);
     }

       public function Delete($id){
        $deleteg = Sure::findOrFail($id);
        $deleteg->delete();
        $gmember = Sure::all();
        return redirect()->route('guarantor.page');

  }
}
