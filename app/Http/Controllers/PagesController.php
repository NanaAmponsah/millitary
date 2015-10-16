<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Personnel;

class PagesController extends Controller
{
    public function index()
    {
        $army = Personnel::where('depart', 'Army')->count();
        $navy = Personnel::where('depart', 'Navy')->count();
        $airforce = Personnel::where('depart', 'Airforce')->count();

        return view('index', compact('army','navy','airforce'));
    }
    public function login(){
        return view('login');
    }
    public function add_user(){
        return view('add_new');
    }

    public function register(Requests\UsersRequest $request)
    {
       $user = new User;
       $user->name =Input::get('username');
       $user->email=Input::get('email');
       $user->password = Hash::make(Input::get('password'));
        $user->save();
       return redirect('add_new')->with('message','User Added Successfully');
    }


}
