<?php

namespace App\Http\Requests;

use App\Models\Student;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StudentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        // $id = $this->get('student')??null;
        $id = $this->get('id') ?? null;
        $rules =[

            'name'      => 'required | string | max:255',
            'uid'       => 'required |string  | max:255 | unique:students,uid,'.$id,
            'mobile'       => '   max:255 | unique:students,mobile,'.$id,
            
        ];
        if(!empty($id)){
            $rules["password"] =  'confirmed | string | min:8  | nullable ' ;
        }
        return $rules;

    }
}
