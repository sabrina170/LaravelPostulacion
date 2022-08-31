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
        'dni',
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

}
