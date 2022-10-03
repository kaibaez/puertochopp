@extends('adminlte::page')

@section('title', 'Tipo de Permisos | Crear')
@section('content_header')
    <h2>Creaci&oacute;n de Tipo de Permisos</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'rh.tipo_permisos.store','files'=>true]) !!}
                @include('rh.tipo_permisos.partials.form')    
            {!! Form::submit('Crear Tipo de Permiso', ['class' => 'btn btn-primary']) !!}
            @include('rh.tipo_permisos.partials.cancel')

            {!! Form::close() !!}   
        </div>
    </div>

@stop

