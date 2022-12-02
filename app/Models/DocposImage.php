<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocposImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'docpos_id',
        'image'
    ];
}
