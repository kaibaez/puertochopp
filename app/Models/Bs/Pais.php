<?php

namespace App\Models\Bs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';

    protected $fillable = [
        'descripcion',
        'abreviatura',
        'estado',
    ];
    use HasFactory;
}
