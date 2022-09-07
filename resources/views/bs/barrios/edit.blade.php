@extends('adminlte::page')

@section('title', 'Barrios | Editar')
@section('content_header')
    <h2>Editar Barrio</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::model($barrio, ['route'=> ['bs.barrios.update',$barrio], 'method' => 'put']) !!}
                @include('bs.barrios.partials.form')   
                {!! Form::submit('Actualizar barrio', ['class' => 'btn btn-primary']) !!}
                @include('bs.barrios.partials.cancel')   
            {!! Form::close() !!}
        </div>
    </div>

@stop

