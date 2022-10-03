@extends('adminlte::page')

@section('title', 'Permisos | Crear')
@section('content_header')
    <h2>Otorgar Permisos a Empleados</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'rh.permisos.store','files'=>true]) !!}
                @include('rh.permisos.partials.form')    
            {!! Form::submit('Otorgar Permiso', ['class' => 'btn btn-primary']) !!}
            @include('rh.permisos.partials.cancel')

            {!! Form::close() !!}   
        </div>
    </div>

@stop

