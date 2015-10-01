<?php

namespace App\Http\Controllers;

use App\Documents;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class DocumentsController extends Controller
{
    public function files()
    {
        $files = Documents::latest('created_at')->get();
        return view('files',compact('files'));
    }

    public function storeDocument(Requests\DocumentsRequests $requests)
    {
        $documents = new Documents();
        $documents->document_title=Input::get('doc_name');
        $documents->filename= Documents::UploadImage($requests->file('doc_upload'));
        $documents->save();
        return back()->with('message'.'Document Added Succesfully');
    }

    public function delete_file($id)
    {
        $delete = Documents::find($id);
        $delete->delete();
        return back()->with('message','Document deleted succesfully');
    }
}