<?php

namespace App\Http\Controllers;
use App\MCountry;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MCountryController extends Controller
{
    public function index()
    {
        return view('add_mission');
    }
    public function store( Requests\MCountryRequest $request){

        $mcountry = New MCountry();
        $mcountry->country_name = Input::get('miss_country');
        $mcountry->mission_name = Input::get('miss_name');
        $mcountry->save();

        return redirect('add_mission')->with('message','Mission Country added Successfully');

    }
}
