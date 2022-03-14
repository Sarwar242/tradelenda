<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    public function __invoke(Request $request)
    {
        $settings = Setting::all();
        // dd($settings[0]);
        return view('admin.settings.settings')->with('settings', $settings);
    }

    public function updateInterest(Request $request, $slug)
    {
        $settings = Setting::where('slug',$slug)->first();
        $settings->value = $request->value;
        $settings->admin_id =auth()->guard('admin')->user()->id;
        $settings->save();
        return back()->with('success', 'Settings has been updated.');
    }
}
