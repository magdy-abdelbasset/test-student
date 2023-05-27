<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamResultRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user() ?true :false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'student_id' => 'required ',
            'max_result'    => 'required | numeric |min:0',
            'result'  => 'required | numeric |min:0',
            'success_result'  => 'required | numeric |min:0',
            'subject'  => 'required | max:255',
        ];
    }
}
