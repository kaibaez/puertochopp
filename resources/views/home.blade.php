@extends('adminlte::page')

@section('title', 'Panel Inicial')

@section('content_header')
    <h1>Panel Inicial</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
    
    <div class="small-box bg-info">
    <div class="inner">
    <h3>0</h3>
    <p>Llegadas Registradas</p>
    </div>
    <div class="icon">
    <i class="ion ion-bag"></i>
    </div>
    <a href="#" class="small-box-footer">M&aacute;s info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    <div class="col-lg-3 col-6">
    
    <div class="small-box bg-success">
    <div class="inner">
    <h3>0<sup style="font-size: 20px">%</sup></h3>
    <p>Asistencia</p>
    </div>
    <div class="icon">
    <i class="ion ion-stats-bars"></i>
    </div>
    <a href="#" class="small-box-footer">M&aacute;s info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    <div class="col-lg-3 col-6">
    
    <div class="small-box bg-warning">
    <div class="inner">
    <h3>{{$cantEmpleado}}</h3>
    <p>Empleados Activos</p>
    </div>
    <div class="icon">
    <i class="ion ion-person-add"></i>
    </div>
    <a href="#" class="small-box-footer">M&aacute;s info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    <div class="col-lg-3 col-6">
    
    <div class="small-box bg-danger">
    <div class="inner">
    <h3>0</h3>
    <p>Llegadas Tard&iacute;as</p>
    </div>
    <div class="icon">
    <i class="ion ion-pie-graph"></i>
    </div>
    <a href="#" class="small-box-footer">M&aacute;s info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    </div>

    
@stop

@section('footer')
    <p>Sistema proveído por Consultora Proyecto San José S.A. </p>
@stop
