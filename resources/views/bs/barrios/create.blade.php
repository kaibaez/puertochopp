@extends('adminlte::page')

@section('title', 'Barrios | Crear')
@section('content_header')
    <h2>Creaci&oacute;n de arrios</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'bs.barrios.store']) !!}
                @include('bs.barrios.partials.form')    
            {!! Form::submit('Crear barrio', ['class' => 'btn btn-primary']) !!}
            @include('bs.barrios.partials.cancel')   
            {!! Form::close() !!}
        </div>
    </div>

@stop
