<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function __invoke(Request $request)
    {
        $cities = City::all();
        return view('admin.locations.cities')->with('cities', $cities);
    }

    
     
}
