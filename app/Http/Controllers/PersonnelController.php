<?php

namespace App\Http\Controllers;
use App\Personnel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonnelController extends Controller
{
    public function personel()
    {
        $personnel = Personnel::latest('created_at')->get();
        return view('personel',compact('personnel'));
    }
    public function add_personnel()
    {
        return view('add_personnel');
    }
    public function store_personnel(Requests\PersonnelRequest $request){

        $personnel = new Personnel();
        $personnel->serviceno = Input::get('serviceno');
        $personnel->rankno = Input::get('rankno');
        $personnel->depart = Input::get('depart');
        $personnel->firstname = Input::get('firstname');
        $personnel->middlename = Input::get('middlename');
        $personnel->lastname = Input::get('lastname');
        $personnel->dob = Input::get('dob');
        $personnel->doe = Input::get('doe');
        $personnel->nok = Input::get('nok');
        $personnel->promdate = Input::get('promdate');
        $personnel->maritalstatus = Input::get('maritalstatus');
        $personnel->gender = Input::get('gender');
        $personnel->religion = Input::get('religion');
        $personnel->save();
        return redirect('add_personnel')->with('success_message','Personnel Added Successfully');
    }
    public function delete_personnel($id)
    {
        $delete = Personnel::find($id);
        $delete->delete();
        return back()->with('message','Personnel deleted succesfully');
    }
    public function edit_personnel($id){
       $personnel = Personnel::find($id);
        return view('edit_personnel',compact('personnel'));
    }

    public function update_personnel($id,Requests\PersonnelRequest $request)
    {
      $personnel =Personnel::find($id);
        $inputs = $request->all();
        $personnel->update($inputs);
        return back()->with('message','Personnel Info. Updated Successfully');
    }
}

