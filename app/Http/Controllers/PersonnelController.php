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
    public function peacekeeping(){
        $personnel_peace=Personnel::orderBy('rankno','desc')->get();
        return view('peacekeeping',compact('personnel_peace'));
    }
    public function manage_promotions()
    {
        $manage_proms = Personnel::orderBy('rankno','desc')->get();
        return view('manage_promotions',compact('manage_proms'));
    }
    public function view_peacekeeping(){
        $view_peacekeeping = Personnel::where('nominated_for_peace','1')->get();
        return view('view_peacekeeping',compact('view_peacekeeping'));
    }

    public function view_courses()
    {
        $view_courses = Personnel::where('nominated_for_course','1')->get();
        return view('view_courses',compact('view_courses'));
    }

    public function courses(){
        $personnel_courses=Personnel::orderBy('rankno','desc')->get();
        return view('courses',compact('personnel_courses'));
    }
    public function promotion(){
       $personnel_prom = Personnel::orderBy('rankno','desc')->get();

        return view('promotion',compact('personnel_prom'));
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

    public function update_nominated_for()
    {
        $action = Input::get('action');
        if(Input::has('nominate')){
            switch ($action) {
                case 'Peace Keeping':
                    foreach (Input::get('nominate') as $p) {
                        $personnel = Personnel::find($p);
                        $personnel->nominated_for_peace = 1;
                        $personnel->save();
                    }
                    break;
                case 'Promotion':
                    foreach (Input::get('nominate') as $p) {
                        $personnel = Personnel::find($p);
                        $personnel->nominated_for_prom = 1;
                        $personnel->save();
                    }
                    break;
                case 'Courses':
                    foreach (Input::get('nominate') as $p) {
                        $personnel = Personnel::find($p);
                        $personnel->nominated_for_course = 1;
                        $personnel->save();
                    }
                    break;
                case 'Remove peace':
                    foreach (Input::get('nominate') as $p) {
                        $personnel = Personnel::find($p);
                        $personnel->nominated_for_peace = 0;
                        $personnel->save();
                    }
                    break;
                case 'Remove course':
                    foreach (Input::get('nominate') as $p) {
                        $personnel = Personnel::find($p);
                        $personnel->nominated_for_course = 0;
                        $personnel->save();
                    }
                    break;
//                case 'Army':
//                $view_army = Personnel::where('depart','Army')->get();
//                return view('promote_army',compact('view_army'));
//                break;
//                case 'Airforce':
//                    $view_army = Personnel::where('depart','Airforce')->get();
//                    return view('promote_airforce',compact('view_airforce'));
//                    break;
//                case 'Navy':
//                    $view_army = Personnel::where('depart','Navy')->get();
//                    return view('promote_navy',compact('view_navy'));
//                    break;
                case 'Undo_promote':
                    foreach (Input::get('nominate') as $p) {
                        $personnel = Personnel::find($p);
                        $personnel->nominated_for_prom = 0;
                        $personnel->save();
                    }
                    break;

                default:
                    # code...
                    break;
            }
        }
        return Redirect()->back();
    }

}

