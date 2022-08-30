@extends('adminlte::page')

@section('title', 'Sucursales | Crear')
@section('content_header')
    <h2>Creaci&oacute;n de Sucursales</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'bs.sucursales.store']) !!}
                @include('bs.sucursales.partials.form')    
            {!! Form::submit('Crear Sucursal', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop
