<?php

namespace App\Http\Requests;

use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class InfoRequest extends FormRequest
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
            'nombres' => '',
            'apellido_ma' => 'required',
            'apellido_pa' => '',
            'telefono' => '',
            'numero_documento' => '',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required',
            'pais' => 'required',
            'departamento' => 'required',
            'correo' => '',
            'provincia' => 'required',
            'distrito' => 'required',
            'direccion' => 'required',
            'tipo_documento' => '',
            'user_id' => '',

            // Datos de Estudios
            'grado' => 'required',
            'nombre_ie' => 'required',
            'estudia' => 'required',
            'horario' => 'required',
            'disponibilidad' => 'required',
            // Datos de Experiencia Laboral
            'callcenter' => 'required',
            'empresa' => 'required',
            'puesto' => 'required',
            'tiempo' => 'required',
            'tipo_expe' => 'required',
            'konecta' => 'required',

            'datos_pc' => ''
        ];
    }
}
