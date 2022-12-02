<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docpos extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'alumno_id',
        'nombre',
        'user_id',
        'tipo'
        // 'image',
    ];
    public function docposImages()
    {
        return $this->hasMany(DocposImage::class, 'docpos_id', 'id');
    }
}
