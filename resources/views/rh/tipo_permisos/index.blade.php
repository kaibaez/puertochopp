@extends('adminlte::page')

@section('title', 'Tipos de Permisos')

@section('content_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <h1>Tipos de Permisos</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{route('rh.tipo_permisos.create')}}" class="btn btn-success btn-sm "><i class="fa fa-plus"> Nuevo Permiso</i></a>
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
                        <th>Tipo de Permiso</th>
                        <th colspan="4 style="width: 50px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tipo_permisos as $tipo_permiso)
                        <tr>
                            <td style="width: 5px;">{{$tipo_permiso->id}}</td> 
                            <td style="width: 250px;">{{$tipo_permiso->descripcion}}</td>
                            <td width="3px"><a class="btn btn-success btn-xs" href="{{route('rh.tipo_permisos.show', $tipo_permiso)}}"><i class="fa fa-eye"></i></a></td>
                            <td width="3px"><a class="btn btn-warning btn-xs" href="{{route('rh.tipo_permisos.edit', $tipo_permiso)}}"><i class="fa fa-edit"></i></a></td>
                            <td width="3px">
                                <form action="{{route('rh.tipo_permisos.destroy', $tipo_permiso)}}" method="POST">
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
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Tipo de Permisos</th>
                        <th colspan="4">Acciones</th>
                    </tr>
                </tfoot>
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