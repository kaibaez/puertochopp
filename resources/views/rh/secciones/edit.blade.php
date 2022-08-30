@extends('adminlte::page')

@section('title', 'Cargos | Crear')
@section('content_header')
    <h2>Creaci&oacute;n de Cargos</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::model($cargo, ['route'=> ['rh.cargos.update',$cargo], 'method' => 'put']) !!}
                @include('rh.cargos.partials.form')   
                {!! Form::submit('Actualizar Cargo', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

