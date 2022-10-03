<?php

namespace App\Models\Rh;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{

    protected $fillable = [
        'empleado_id',
        'tip_permiso_id',
        'fec_desde',
        'fec_hasta',
        'observaciones',
        'estado',
    ];


    use HasFactory;

    public function empleado (){
        return $this->hasOne(Empleado::class,'id','empleado_id');
    }
    public function tipo_permiso (){
        return $this->hasOne(TipoPermiso::class,'id','tip_permiso_id');
    }
}
