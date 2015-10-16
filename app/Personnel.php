<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $fillable = ['serviceno', 'rankno', 'depart','firstname','middlename',
                            'lastname','dob','doe','nok','promdate','maritalstatus','gender','religion','nominated_for'];

    protected $appends = ['isdue'];

    public static $ranks = array('pte','L/Cpl','Clp','Sgt','S/Sgt','WOII','WOI');

    public function getIsDueAttribute(){
        $date = explode('/',$this->promdate);

        return $this->dueLength(intval($this->rankno), intval($date[2]));
    }

    protected function dueLength($rankno, $year){
        $currentYear = date('Y');

        #pte
        if($rankno == 1 && ($currentYear - $year) >= 4){
            return true;
        }
        if($rankno == 2 && ($currentYear - $year) >= 4){
            return true;
        }
        if($rankno == 3 && ($currentYear - $year) >= 4){
            return true;
        }
        if($rankno == 4 && ($currentYear - $year) >= 3){
            return true;
        }
        if($rankno == 5 && ($currentYear - $year) >= 3){
            return true;
        }
        if($rankno == 6 && ($currentYear - $year) >= 3){
            return true;
        }
        if($rankno == 7 && ($currentYear - $year) >= 2){
            return true;
        }
        return false;
    }
}
