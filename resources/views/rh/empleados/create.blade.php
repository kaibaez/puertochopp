@extends('adminlte::page')

@section('title', 'Empleados | Crear')
@section('content_header')
    <h2>Creaci&oacute;n de Empleados</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'rh.empleados.store']) !!}
                @include('rh.empleados.partials.form')    
            {!! Form::submit('Crear Empleado', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

