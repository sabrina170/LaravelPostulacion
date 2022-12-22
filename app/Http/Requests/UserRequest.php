<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class UserRequest extends FormRequest
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
            // Datos Info Personal
            'name' => 'required',
            'dni' => 'required',
            'apellido_pa' => 'required',
            // 'apellido_ma' => 'required',
            'email' => ['required','unique:users'],
            'celular' => 'required',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'email.unique'=>'Ya existe un usuario con este correo.'
        ];
    }
}
