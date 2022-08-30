@extends('adminlte::page')
@section('title', 'Ciudad | Editar')
@section('content_header')
    <h2>Editar Ciudad</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::model($ciudad, ['route'=> ['bs.ciudades.update',$ciudad], 'method' => 'put']) !!}
                @include('bs.ciudades.partials.form')   
                {!! Form::submit('Actualizar Ciudad', ['class' => 'btn btn-primary']) !!}
                <a class="btn btn-secondary" href="{{ route('bs.ciudades.index') }}">Cancelar</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop