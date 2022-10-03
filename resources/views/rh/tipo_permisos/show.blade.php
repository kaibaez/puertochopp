@extends('adminlte::page')

@section('title', 'Empleados | Visualizar')
@section('content_header')
    <h2>Visualizaci&oacute;n de Empleados</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::model($empleado, ['route'=> ['rh.empleados.update',$empleado], 'method' => 'put']) !!}
                @include('rh.empleados.partials.show')   
                @include('rh.empleados.partials.cancel')   
            {!! Form::close() !!}
        </div>
    </div>

@stop

