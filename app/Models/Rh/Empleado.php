<?php

namespace App\Models\Rh;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $fillable = [
        'nombres'  ,
            'apellidos'  ,
            'documento',
            'direcciones'  ,
            'pais_id',    
            'ciudad_id',    
            'barrio_id',  
            'fec_nacimiento',
            'salario',
            'salario_ips',
            'anticipo',
            'estado',
    ];
    use HasFactory;
}
