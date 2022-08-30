<?php

namespace App\Models\Bs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    protected $table = 'barrios';

    protected $fillable = [
        'descripcion',
        'estado',
    ];

    use HasFactory;
}
