@extends('adminlte::page')

@section('title', 'Ciudades | Crear')
@section('content_header')
    <h2>Creaci&oacute;n de Ciudades</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'bs.ciudades.store']) !!}
                @include('bs.ciudades.partials.form')    
            {!! Form::submit('Crear Ciudad', ['class' => 'btn btn-primary']) !!}
            <a class="btn btn-secondary" href="{{ route('bs.ciudades.index') }}">Cancelar</a>
            {!! Form::close() !!}
        </div>
    </div>

@stop
