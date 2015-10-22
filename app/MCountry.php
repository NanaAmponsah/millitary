<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MCountry extends Model
{
    protected $table = 'mcountry';
   protected  $fillable= ['country_name','mission_name'];
}
