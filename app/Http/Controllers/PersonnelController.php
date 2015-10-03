<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonnelController extends Controller
{
    public function personel()
    {
      return view('personel');
    }
}
