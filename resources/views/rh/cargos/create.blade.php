@extends('adminlte::page')

@section('title', 'Cargos | Crear')
@section('content_header')
    <h2>Creaci&oacute;n de Cargos</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'rh.cargos.store']) !!}
                @include('rh.cargos.partials.form')    
            {!! Form::submit('Crear Cargo', ['class' => 'btn btn-primary']) !!}
                @include('rh.cargos.partials.cancel')  
            {!! Form::close() !!}
        </div>
    </div>

@stop

