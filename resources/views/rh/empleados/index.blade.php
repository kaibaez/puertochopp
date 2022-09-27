@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <h1>Empleados</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{route('rh.empleados.create')}}" class="btn btn-success btn-sm "><i class="fa fa-plus"> Nuevo Empleado</i></a>
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
                        <th>Empleados</th>
                        <th>C.I.</th>
                        <th>Cargo</th>
                        <th>Foto</th>
                        <th colspan="4 style="width: 50px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td style="width: 5px;">{{$empleado->id}}</td> 
                            <td style="width: 250px;">{{$empleado->nombres}}  {{$empleado->apellidos}}</td>
                            <td style="width: 100px;">{{$empleado->documento}}</td>
                            <td style="width: 100px;">{{$empleado->cargo->descripcion}}</td>
                            <td style="width: 20px;">
                                
                                    <img class="img-circle" width="60px" src="{{asset('')}}{{$empleado->photo}}" alt="" > 
                                
                            </td>
                            <td width="3px"><a class="btn btn-success btn-xs" href="{{route('rh.empleados.show', $empleado)}}"><i class="fa fa-eye"></i></a></td>
                            <td width="3px"><a class="btn btn-warning btn-xs" href="{{route('rh.empleados.edit', $empleado)}}"><i class="fa fa-edit"></i></a></td>
                            <td width="3px">
                                <form action="{{route('rh.empleados.destroy', $empleado)}}" method="POST">
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
                        <th>Empleados</th>
                        <th>C.I.</th>
                        <th>Cargo</th>
                        <th>Foto</th>
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