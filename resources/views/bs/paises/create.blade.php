@extends('adminlte::page')

@section('title', 'Paises | Crear')
@section('content_header')
    <h2>Creaci&oacute;n de Paises</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'bs.paises.store']) !!}
                @include('bs.paises.partials.form')    
            {!! Form::submit('Crear pais', ['class' => 'btn btn-primary']) !!}
            <a class="btn btn-secondary" href="{{ route('bs.paises.index') }}">Cancelar</a>
            {!! Form::close() !!}
        </div>
    </div>

@stop
