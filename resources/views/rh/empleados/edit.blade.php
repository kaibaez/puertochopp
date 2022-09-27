@extends('adminlte::page')

@section('title', 'Empleados | Crear')
@section('content_header')
    <h2>Creaci&oacute;n de Empleados</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::model($empleado, ['route'=> ['rh.empleados.update',$empleado], 'method' => 'put','files'=>true]) !!}
                @include('rh.empleados.partials.form')   
                {!! Form::submit('Actualizar Empleado', ['class' => 'btn btn-primary']) !!}
                @include('rh.empleados.partials.cancel')   
            {!! Form::close() !!}
        </div>
    </div>

@stop

