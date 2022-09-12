@extends('adminlte::page')

@section('title', 'Secciones')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1>Secciones</h1>
                </div>
                <div class="col-sm-2">
                    <a href="{{route('rh.secciones.create')}}" class="btn btn-success btn-sm "><i class="fa fa-plus"> Nueva Secci&oacute;n</i></a>
                </div>
            </div>
        </div>
    </section>    
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Secciones</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($secciones as $seccion)
                        <tr>
                            <td>{{$seccion->id}}</td>
                            <td>{{$seccion->descripcion}}</td>
                            <td width="3px"><a class="btn btn-warning btn-xs" href="{{route('rh.secciones.edit', $seccion)}}"><i class="fa fa-edit"></i></a></td>
                            <td width="3px">
                                <form action="{{route('rh.secciones.destroy', $seccion)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
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
@section('js')
    <script>
        @if (session('store'))
            toastr.success("{{session('store')}}")    
        @elseif (session('update'))
            toastr.warning("{{session('update')}}")    
        @elseif (session('destroy'))
            toastr.error("{{session('destroy')}}")    
        @endif
    </script>
@stop