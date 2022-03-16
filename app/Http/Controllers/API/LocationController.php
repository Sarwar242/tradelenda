<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\City;

class LocationController extends Controller
{
    public function getCountries(Request $request)
    {
        $countries = Country::all();
        $response = [
            'success' => true,
            'countries' => $countries,
        ];
        return response($response, 200);
    }

    public function getState(Request $request)
    {
        $state = State::where('country_id', $request->country_id)->firstOrFail();
        $response = [
            'success' => true,
            'state' => $state,
        ];
        return response($response, 200);
    }

    public function getCity(Request $request)
    {
        $city = City::where('state_id', $request->state_id)->firstOrFail();
        $response = [
            'success' => true,
            'city' => $city,
        ];
        return response($response, 200);
    }
}
