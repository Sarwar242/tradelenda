<?php

namespace App\Http\Controllers;
use JD\Cloudder\Facades\Cloudder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Loans;
use Auth;
use DB;
use App\Users;
use Validator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $mem = Loans::where('email', Auth::user()->email)->paginate(10);
        $data = array();
        $data['disbursed'] = Loans::where('email', Auth::user()->email)
                              ->where('status', 'approved')->sum('amount');
        $data['unpaid'] = Loans::where('user_id', Auth::id())
                              ->where('status', 'declined')->sum('amount');
        $data['processing'] = Loans::where('user_id', Auth::id())
                              ->where('status', 'pending')->sum('amount');
        // dd($data);

        $greetings = "";
    
        /* This sets the $time variable to the current hour in the 24 hour clock format */
        $time = date("H");
    
        /* Set the $timezone variable to become the current timezone */
        $timezone = date("e");
    
        /* If the time is less than 1200 hours, show good morning */
        if ($time < "12") {
            $greetings = "Good Morning";
        } else
    
        /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
        if ($time >= "12" && $time < "17") {
            $greetings = "Good Afternoon";
        } else
    
        /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
        if ($time >= "17" && $time < "20") {
            $greetings = "Good Evening";
        } else
    
        /* Finally, show good night if the time is greater than or equal to 1900 hours */
        if ($time >= "21") {
            $greetings = "Good Night";
        }

        return view('home', compact(['mem','data','greetings']));
    }
    public function about(){

        return view('pages.aboutus');
    }

    
    

    

        
        
}
