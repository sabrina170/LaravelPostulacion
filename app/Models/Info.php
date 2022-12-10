<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellido_ma',
        'apellido_pa',
        'tipo_documento',
        'numero_documento',
        'correo',
        'telefono',
        'fecha_nacimiento',
        'pais',
        'departamento',
        'provincia',
        'sexo',
        'distrito',
        'direccion',
        'user_id',
        'apellido',
        'grado',
        'nombre_ie',
        'estudia',
        'horario',
        'disponibilidad',
        'callcenter',
        'empresa',
        'puesto',
        'tiempo',
        'tipo_expe',
        'konecta',
        'datos_pc',

    ];

    // public const ESTADOS = ['activo', 'inactivo', 'terminado'];

    // public function estado()
    // {
    //     return self::ESTADOS[$this->estado];
    // }

    // ---------------------
    // public function estado2()
    // {
    //     return $this->estado == 1 ? 'Si' : 'No';
    // }
}
