@extends('adminlte::page')

@section('title', 'Secciones | Crear')
@section('content_header')
    <h2>Creaci&oacute;n de Secciones</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::model($seccion, ['route'=> ['rh.secciones.update',$seccion], 'method' => 'put']) !!}
                @include('rh.secciones.partials.form')   
                {!! Form::submit('Actualizar Secci&oacute;n', ['class' => 'btn btn-primary']) !!}
                @include('rh.secciones.partials.cancel')
            {!! Form::close() !!}
        </div>
    </div>

@stop

