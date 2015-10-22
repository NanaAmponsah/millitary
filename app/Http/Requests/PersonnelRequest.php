<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonnelRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'serviceno'=>'required','rankno'=>'required',
            'depart'=>'required','firstname'=>'required','lastname'=>'required',
            'dob'=>'required','doe'=>'required','nok'=>'required',
            'promdate'=>'required','maritalstatus'=>'required','gender'=>'required','religion'=>'required'
        ];
    }
}
