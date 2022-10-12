<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    use HasFactory;
    protected $fillable = [
        'grado',
        'nombreie',
        'ku',
        'estudia',
        'horario',
        'disponibilidad'
    ];
}
