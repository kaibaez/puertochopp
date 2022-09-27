<div class="row">
    <div class="col-7">
        <div class="form-group">
            {!! Form::label('nombres', 'Nombres del empleado') !!}
            {!! Form::text('nombres',null, ['class' => 'form-control', 'placeholder' => 'Nombres del empleado', 'disabled']) !!}
        </div>
    </div>
    
    <div class="col-5">
        <div class="form-group">
            <img class="profile-user-img img-fluid img-circle" style="width: 120px;" src="{{asset('')}}{{$empleado->photo}}" alt="User profile picture">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos del empleado') !!}
            {!! Form::text('apellidos',null, ['class' => 'form-control', 'placeholder' => 'Apellidos del empleado', 'disabled']) !!}        
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('documento', 'Documento / CI') !!}
            {!! Form::number('documento',null, ['class' => 'form-control', 'placeholder' => 'Documento del empleado', 'disabled']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            {!! Form::label('direcciones', 'Direcci&oacute;n') !!}
            {!! Form::text('direcciones',null, ['class' => 'form-control', 'placeholder' => 'Direcci&oacute;n', 'disabled']) !!}
        </div>        
    </div>    
</div>
<div class="row">
    <div class="col-4">
        <div class="form-group">
            {!! Form::label('pais_id', 'Nacionalidad / Pais') !!}
            {!! Form::select('pais_id',$paises, null, ['class' => 'form-control', 'placeholder' => 'Pais de Nacionalidad' , 'disabled']) !!}
        </div>        
    </div>
    <div class="col-4">
        <div class="form-group">
            {!! Form::label('ciudad_id', 'Ciudad de Residencia') !!}
            {!! Form::select('ciudad_id',$ciudades, null, ['class' => 'form-control', 'placeholder' => 'Ciudad de Residencia', 'disabled']) !!}        
        </div>    
    </div>
    <div class="col-4">
        <div class="form-group">
            {!! Form::label('barrio_id', 'Barrio de Residencia') !!}
            {!! Form::select('barrio_id',$barrios, null, ['class' => 'form-control', 'placeholder' => 'Barrio de Residencia', 'disabled']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            {!! Form::label('fec_nacimiento', 'Fec.Nacimiento') !!}
            {!! Form::date('fec_nacimiento',null, ['class' => 'form-control', 'placeholder' => 'Fec. Nacimiento', 'disabled']) !!}
        </div>
    </div>
</div>
<div class="card card-info">
    <div class="card-header">
        Sueldos y Anticipos
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {!! Form::label('salario', 'Salario') !!}
                    {!! Form::number('salario',null, ['class' => 'form-control', 'placeholder' => 'Salario', 'disabled']) !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    {!! Form::label('salario_ips', 'Salario IPS') !!}
                    {!! Form::number('salario_ips',null, ['class' => 'form-control', 'placeholder' => 'Salario IPS', 'disabled']) !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    {!! Form::label('anticipo', 'Anticipo') !!}
                    {!! Form::number('anticipo',null, ['class' => 'form-control', 'placeholder' => 'Anticipo', 'disabled']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-warning">
    <div class="card-header">
        Puesto Laboral
    </div>  
    <div class="card-body">
        <div class="row">
            <div class="col-6">
               <div class="form-group">
                    {!! Form::label('fec_ingreso', 'Fec. Ingreso') !!}
                    {!! Form::date('fec_ingreso',null, ['class' => 'form-control', 'placeholder' => 'Fec. Ingreso', 'disabled']) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('estado', 'Estado del cargo') !!}
                    <div class="form-check">
                        {!! Form::radio('estado', 'A',null,['class' => 'form-check-input', 'disabled']) !!}Activo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {!! Form::radio('estado', 'I',null,['class' => 'form-check-input', 'disabled']) !!}Inactivo   
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {!! Form::label('cargo_id', 'Cargo del Empleado') !!}
                    {!! Form::select('cargo_id',$cargos, null, ['class' => 'form-control', 'placeholder' => 'Cargo del Empleado', 'disabled']) !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    {!! Form::label('seccion_id', 'Secci&oacute;n del Empleado') !!}
                    {!! Form::select('seccion_id',$secciones, null, ['class' => 'form-control', 'placeholder' => 'Secci&oacute;n del Empleado', 'disabled']) !!}
                </div>
            </div>
            <div class="col-4"> 
                <div class="form-group"> 
                    {!! Form::label('sucursal_id', 'Sucursal del Empleado') !!}
                    {!! Form::select('sucursal_id',$sucursales, null, ['class' => 'form-control', 'placeholder' => 'Sucursal del Empleado', 'disabled']) !!}
                </div>
            </div>
        </div>
    </div>
</div>







