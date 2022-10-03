@extends('adminlte::page')

@section('title', 'Tipo de Permiso | Crear')
@section('content_header')
    <h2>Creaci&oacute;n de Tipo de Permiso </h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::model($tipo_permiso, ['route'=> ['rh.tipo_permisos.update',$tipo_permiso], 'method' => 'put']) !!}
                @include('rh.tipo_permisos.partials.form')   
                {!! Form::submit('Actualizar Tipo de Permiso ', ['class' => 'btn btn-primary']) !!}
                @include('rh.tipo_permisos.partials.cancel')   
            {!! Form::close() !!}
        </div>
    </div>

@stop

