<?php

namespace App\Models\Rh;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPermiso extends Model
{
    protected $fillable = [
        'descripcion',
    ];
    
    use HasFactory;
    
}
