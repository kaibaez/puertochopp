@extends('adminlte::page')

@section('title', 'Notas')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Notas</h1>
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
                        <th>Notas</th>
                        <th>Archivo</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notas as $nota)
                        <tr>
                            <td>{{$nota->id}}</td>
                            <td>{{$nota->descripcion}}</td>
                            <td width="3px">
                              
                                <a class="btn-link text-primary" target="_blank"  href="{{asset(Storage::disk('local')->url($nota->path))}}"><i class="far fa-fw fa-file-pdf"></i></a></td>
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