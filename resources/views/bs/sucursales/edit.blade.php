@extends('adminlte::page')

@section('title', 'Sucursales | Editar')
@section('content_header')
    <h2>Editar Sucursales</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::model($sucursal, ['route'=> ['bs.sucursales.update',$sucursal], 'method' => 'put']) !!}
                @include('bs.sucursales.partials.form')   
                {!! Form::submit('Actualizar Sucursal', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

