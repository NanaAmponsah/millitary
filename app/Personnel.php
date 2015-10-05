<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $fillable = ['serviceno', 'rankno', 'depart','firstname','middlename',
                         'lastname','dob','doe','nok','promdate','maritalstatus','gender','religion'];
}
