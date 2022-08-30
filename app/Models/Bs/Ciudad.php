<?php

namespace App\Models\Bs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    protected $fillable = [
        'descripcion',
        'pais_id',
        'estado',
    ];
    use HasFactory;
}
