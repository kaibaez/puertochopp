<?php

namespace App\Models\Rh;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';

    protected $fillable = [
        'descripcion',
        'acargo',
        'descripcion_cargp',
        'funciones_cargo',
        'estado',
    ];
    use HasFactory;
}
