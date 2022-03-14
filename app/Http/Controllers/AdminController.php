<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Sure;
use App\User;
use App\Loans;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Auth;
use App\Notifications\AdminInviteNotification;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {   $data = array();
        $data['disbursed']= Loans::where('status','disbursed')->count();
        $data['active']= Loans::where('status','pending')->count();
        $data['due']= Loans::where('status','overdue')->count();
        $data['disbursed_amount']= Loans::where('status','disbursed')->sum('amount');
        $data['active_amount']= Loans::where('status','pending')->sum('amount');
        $data['due_amount']= Loans::where('status','overdue')->sum('amount');
        $loanlist = Loans::orderBy('created_at','desc')->paginate(10);
        return view('admin.dashboard', compact(['loanlist','data']));
    }

    public function profile($name)
    {
        $admin= Admin::where('username', '=', $username)->first();
        return view('admin.profile')->with('admin', $admin);
    }
    public function show()
    {
        $admin_id=Auth::guard('admin')->user()->id;
        $admin= Admin::find($admin_id);
        return view('admin.own_profile')->with('admin', $admin);
    }
    public function admins()
    {
        return view('admin.admins');
    }

    public function createAdmin(){
        return view('admin.addadmin');
    }

    public function storeAdmin(Request $request){
        $this->validate($request,[
            'email'=>'email|required|unique:admins',
            'name' => 'required|string',
        ]);
        $pass=self::randomNDigitNumber(8);
        $encryptedPass= Hash::make($pass);

        try{
            $admin = new Admin;
            $admin->email =$request->email;
            $admin->password =$encryptedPass;
            $admin->name=$request->name;
            $admin->pcft=0;
            // $admin->type=$request->type;
            $admin->save();
            try{
                $admin->notify(new AdminInviteNotification($pass));
            }catch(\Exception $e){
                \Log::warning("Notification mail wasn't Sent. Exception: ".$e);
            }
            session()->flash('success', 'An Admin has been added!!');
            return view('admin.addadmin');
        }catch(\Exception $e){
            session()->flash('failed', 'Error occured! --'.$e);
            return redirect()->route('admin.admin.create');
        }
    }

    public function passwordForm(){
        return view('admin.auth.password_form');
    }

    public function passwordUpdate(Request $request){
        $this->validate($request,[
            'old_password' => 'required',
            'password'=>'required|min:8|confirmed',
        ]);
        $admin = Auth::guard('admin')->user();
        $newpass = Hash::make($request->password);

        if (!Hash::check($request->old_password, $admin->password)) {
            session()->flash('failed', 'Current Password is not matched! Please input correct one or try to reset password.');
            return redirect()->route('admin.password.change');
        } elseif (Hash::check($request->password, $admin->password)) {
            session()->flash('failed', 'Password can not be same! You are entering the same password as before!');
            return redirect()->route('admin.password.change');
        } else {
            $admin->password = $newpass;
            $admin->pcft = 1;
            $admin->save();
            session()->flash('success', 'Your password have been changed successfully!.');
            return redirect()->route('admin.dashboard');

        }
    }
    public function editProfile(){
        $admin = Auth::guard('admin')->user();
        return view('admin.edit_admin')->with('admin',$admin);
    }


    public function updateProfile(Request $request){
        $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|email',
            'image' => 'nullable|file|image|max:1000',
        ]);
        try{
            $admin = Auth::guard('admin')->user();
            $admin->name =$request->name;
            $admin->email =$request->email;

            if(request()->hasFile('image')){
                if(!is_null($admin->image) && $admin->image !="default.png" &&  $admin->image !="default.jpg"){
                    $exists = Storage::disk('public')->exists('admin/'.$admin->image);
                    if($exists)
                        Storage::disk('public')->delete('admin/'.$admin->image);
                }
                $imageName = time().'.'.$request->image->extension();
                $request->image->storeAs('/admin',$imageName,'public');
                $admin->image=$imageName;
            }

            $admin->save();

            session()->flash('success', 'Your profile has been Updated!!');
            return redirect()->route('admin.dashboard');
        }catch(Exception $e){
            session()->flash('failed', 'Error occured! --'.$e);
            return redirect()->route('admin.profile.update');
        }
    }

    public function destroy($id)
    {
        try{
            $admin = Admin::find($id);
            if(is_null($admin)){
                session()->flash('failed', 'No admin found !!!');
                return redirect()->route('admin.admins');
            }
            if (!is_null($admin->image) && $admin->image !="default.png" &&  $admin->image !="default.jpg") {
                $exists = Storage::disk('public')->exists('admin/'.$admin->image);
                if($exists)
                   Storage::disk('public')->delete('admin/'.$admin->image);
            }
            $admin->delete();

            session()->flash('success', 'An Admin has been Deleted!!');
            return redirect()->route('admin.admins');
        }catch(Exception $e){
            session()->flash('failed', 'Error occured! --'.$e);
            return redirect()->route('admin.admins');
        }
    }

    private function randomNDigitNumber($digits)
    {
        $returnString = mt_rand(1, 9);
        while (strlen($returnString) < $digits) {
            $returnString .= mt_rand(0, 9);
        }
        return $returnString;
    }
    public function usersdisplay()
    {
        $ulist = User::orderBy('created_at','desc')->get();
        //$guara = Sure::table('sures')->get()->where('email', Auth::user()->email);
        return view('admin.userlist', compact('ulist'));
    }
    public function usersdetail($id)
    {
        $today = \Carbon\Carbon::today()->format('Y/m/d');
        $treemonth = \Carbon\Carbon::today()->subMonths(3)->format('Y/m/d');
        $udatau= User::findOrFail($id);
        $transactions="";

        if($udatau->customer_id!=""){
            $curl = curl_init();
            try {
                curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.okra.ng/v2/transactions/getByCustomerDate",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => '{
                    "customer_id":"'.$udatau->customer_id.'",
                    "from":"'.$treemonth.'",
                    "to":"'.$today.'",
                    "limit":50,
                    "page":1
                    }',
                CURLOPT_HTTPHEADER => [
                    "Accept: application/json; charset=utf-8",
                    "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWViZjBlN2MwZDcxZDAwMWRkOGZjZWEiLCJpYXQiOjE2NDI4NTI1ODR9.eJ7ZwHlHt4Tnhh18Z42f3yLYFiipRHYFwTXs0eB6_IU",
                    "Content-Type: application/json"
                ],
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);
                $data = json_decode($response, true);

                if ($err) {
//pass
                }
                else{
                    // info("TransactionsX");
                    $transactions=$data['data'];
                }

            } catch (\Exception $e) {
                //pass
            }
        }

        return view('admin.userview', compact(['udatau','transactions']));
    }
    public function viewguarantor($id){
        $gdata =Sure::find($id);
        return view('admin.viewguarantor')->with('gdata',$gdata);
    }

    public function Deleteuser($id){
        $deleteu = User::findOrFail($id);
        $deleteu->delete();
        $user = User::all();
        return redirect()->route('admin.userlist');
  }
}
