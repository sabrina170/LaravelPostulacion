<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'telefono',
        // 'dni',
        'ku',
        'apellido',
        'tipo_documento',
        'numero_documento',
        'fecha_nacimiento',
        'sexo',
        'pais',
        'departamento',
        'email',
        'provincia',
        'distrito',
        'direccion'
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
