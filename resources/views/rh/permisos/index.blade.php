@extends('adminlte::page')

@section('title', 'Permisos')

@section('content_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <h1>Permisos Otorgados</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{route('rh.permisos.create')}}" class="btn btn-success btn-sm "><i class="fa fa-plus"> Nuevo permiso</i></a>
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
                        <th>Tip. Permiso</th>
                        <th>Empleado</th>
                        <th>Desde</th>
                        <th>Hasta</th>
                        <th>Estado</th>
                        <th colspan="4" style="width: 50px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permisos as $permiso)
                        <tr>
                            <td style="width: 5px;">{{$permiso->id}}</td> 
                            <td style="width: 200px;">{{$permiso->tipo_permiso->descripcion}}</td>
                            <td style="width: 200px;">{{$permiso->empleado->nombres}} {{$permiso->empleado->apellidos}} </td>
                            <td style="width: 10px;">{{$permiso->fec_desde}}</td>
                            <td style="width: 10px;">{{$permiso->fec_hasta}}</td>
                            <td style="width: 5px;">{{$permiso->estado}}</td>
                            <td width="3px"><a class="btn btn-success btn-xs" href="{{route('rh.permisos.show', $permiso)}}"><i class="fa fa-eye"></i></a></td>
                            <td width="3px"><a class="btn btn-warning btn-xs" href="{{route('rh.permisos.edit', $permiso)}}"><i class="fa fa-edit" title="Editar"></i></a></td>
                            <td width="3px">
                                <form action="{{route('rh.permisos.destroy', $permiso)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"  title="Borrar"></i></button>
                                </form>
                            </td>
                            <td width="3px"><a class="btn btn-info btn-xs" href="{{route('rh.permisos.edit', $permiso)}}" ><i class="fa fa-print" title="Imprimir Permiso"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Tip. Permiso</th>
                        <th>Empleado</th>
                        <th>Desde</th>
                        <th>Hasta</th>
                        <th>Estado</th>
                        <th colspan="4" style="width: 50px;">Acciones</th>
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