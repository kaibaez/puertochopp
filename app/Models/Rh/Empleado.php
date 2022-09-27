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
        'nro_legajo' ,
        'direcciones'  ,
        'photo',
        'pais_id',    
        'ciudad_id',    
        'barrio_id',  
        'fec_nacimiento',
        'salario',
        'salario_ips',
        'anticipo',
        'estado',
        'fec_ingreso',
        'cargo_id',
        'seccion_id',
        'sucursal_id',

    ];
    use HasFactory;

    public function cargo (){
        return $this->hasOne(Cargo::class,'id','cargo_id');
    }

    public function seccion (){
        return $this->hasOne(Seccion::class,'id','seccion_id');
    }
}
