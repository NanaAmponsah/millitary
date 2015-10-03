<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class CoupleSigninController extends Controller
{
    public function index()
    {
        return view('couple-signin');
    }
    public function signin()
    {

      /*  return view('couple-registration')->with('username',$username);*/

        $credentials = array(
            'username'=>Input::get('couple_username'),
            'password'=>Input::get('couple_password'),
        );
        if(Auth::attempt($credentials))
        {

            return redirect('index')->with('user')->with('username',Input::get('couple_username'));
        }
        return redirect('login')->withInput()->with('error_message','Incorrect credentials, Please try again');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('couple-signin');
    }

}
