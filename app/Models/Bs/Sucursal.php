<?php

namespace App\Models\Bs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';

    protected $fillable = [
        'descripcion',
        'estado',
    ];
    use HasFactory;

}
