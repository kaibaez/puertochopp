@extends('adminlte::page')

@section('title', 'paises | Editar')
@section('content_header')
    <h2>Editar paises</h2>
@stop

@section('content')    
    <div class="card">
        <div class="card-body">
            {!! Form::model($pai, ['route'=> ['bs.paises.update',$pai], 'method' => 'put']) !!}
                @include('bs.paises.partials.form')   
                {!! Form::submit('Actualizar pais', ['class' => 'btn btn-primary']) !!}
                <a class="btn btn-secondary" href="{{ route('bs.paises.index') }}">Cancelar</a>
            {!! Form::close() !!}
        </div>
    </div>

@stop

