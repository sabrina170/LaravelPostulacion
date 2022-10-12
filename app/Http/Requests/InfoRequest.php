<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'nombre' => 'required',
            'telefono' => 'required',
            'apellido' => 'required',
            'numero_documento' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required',
            'pais' => 'required',
            'departamento' => 'required',
            'email' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            'direccion' => 'required',
            'tipo_documento' => 'required',
            'ku' => 'required',

            // Datos de Estudios
            'grado' => 'required',
            'nombre' => 'required',
            'estudia' => 'required',
            'horario' => 'required',
            'disponibilidad' => 'required',
            // Datos de Experiencia Laboral
            'callcenter' => 'required',
            'empresa' => 'required',
            'puesto' => 'required',
            'tiempo' => 'required',
            'tipo' => 'required',
            'konecta' => 'required'
        ];
    }
}
