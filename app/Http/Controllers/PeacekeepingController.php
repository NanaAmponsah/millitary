<?php

namespace App\Http\Controllers;

use App\MCountry;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PeacekeepingController extends Controller
{
    public function index()
    {
        return view('peacekeeping');
    }


}
