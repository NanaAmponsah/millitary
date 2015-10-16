<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Personnel;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class ClientsLoginController extends Controller
{
    public function index()
    {
        return view('clients.login');
    }
    public function signin(){
        $personnel = new Personnel();
        $personnel->serviceno = Input::get('serviceno');
        $personnel_credentials = Personnel::where('serviceno', $personnel->serviceno )->first();

        return view('clients.index',compact('personnel_credentials'));
    }
    public function logout(){
        return view('clients.login');
    }
}
