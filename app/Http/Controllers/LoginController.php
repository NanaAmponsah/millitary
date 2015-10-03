<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function signin(){
        $credentials = array(
            'name'=>Input::get('username'),
            'password'=>Input::get('password'),
        );
        if(Auth::attempt($credentials)){
            return redirect('/')->with('user')->with('username',Input::get('username'));
        }
        return redirect('login')->withInput()->with('error_message','Incorrect credentials, Please try again');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
