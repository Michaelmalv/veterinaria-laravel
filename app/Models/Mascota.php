<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $fillable = [
        'nombre_mascota',
        'especie',
        'raza',
        'edad',
        'nombre_dueno',
        'telefono',
        'observaciones',
        'activo'
    ];
}
