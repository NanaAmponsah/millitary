<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $guarded=[];

    public static function UploadImage($file)
    {
        if(!empty($file)){
            $ext = $file->getClientOriginalExtension();
            $dir =public_path().'/uploads';
            $path= '/uploads/';

            $filename = uniqid();
            $uploadedfile=$filename.".{$ext}";

            if($file->move($dir,$uploadedfile)){
                return $path.$uploadedfile;
            }
        }

        return '';

    }
}
