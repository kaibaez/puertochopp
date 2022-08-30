@extends('adminlte::page')

@section('title', 'Barrios')

@section('content_header')
    <h1>Barrios</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="{{route('bs.barrios.create')}}" class="btn btn-success btn-sm "><i class="fa fa-plus"> Nueva barrio</i></a>
        </div>
        @if (session('store'))
            <div class="alert alert-success">
                <strong>{{session('store')}}</strong>	
            </div>
        @elseif (session('update'))
            <div class="alert alert-warning">
                <strong>{{session('update')}}</strong>	
            </div>
        @elseif (session('destroy'))
            <div class="alert alert-danger">
                <strong>{{session('destroy')}}</strong>	
            </div>
        @endif
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>barrios</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barrios as $barrio)
                        <tr>
                            <td>{{$barrio->barrios.id}}</td>
                            <td>{{$barrio->descripcion}}</td>
                            <td width="3px"><a class="btn btn-warning btn-xs" href="{{route('bs.barrios.edit', $barrio)}}"><i class="fa fa-edit"></i></a></td>
                            <td width="3px">
                                <form action="{{route('bs.barrios.destroy', $barrio)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop