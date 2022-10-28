<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorGit extends FormRequest
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
        return [
            'Nombre'=>'required|min:10|max:150',
            'Edad'=>'required|min:1|max:150',
            'Expectativas'=>'required|min:10|max:150'
        ];
    }
}
