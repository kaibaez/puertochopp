<div class="row">
    <div class="col-7">
        <div class="form-group">
            {!! Form::label('nombres', 'Nombres del empleado') !!}
            {!! Form::text('nombres',null, ['class' => 'form-control', 'placeholder' => 'Nombres del empleado']) !!}
        
            @error('nombres')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    
    <div class="col-5">
        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos del empleado') !!}
            {!! Form::text('apellidos',null, ['class' => 'form-control', 'placeholder' => 'Apellidos del empleado']) !!}
        
            @error('apellidos')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <div class="form-group">
            {!! Form::label('imagen', 'Foto del Empleado') !!}
            {!! Form::file('photo')  !!}        
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            {!! Form::label('documento', 'Documento / CI') !!}
            {!! Form::number('documento',null, ['class' => 'form-control', 'placeholder' => 'Documento del empleado']) !!}
        
            @error('documento')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
    </div>
    <div class="col-4">
        <div class="form-group">
            {!! Form::label('nro_legajo', 'Nro. Legajo') !!}
            {!! Form::number('nro_legajo',null, ['class' => 'form-control', 'placeholder' => 'Nro. de Legajo']) !!}
        
            @error('documento')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-9">
        <div class="form-group">
            {!! Form::label('direcciones', 'Direcci&oacute;n') !!}
            {!! Form::text('direcciones',null, ['class' => 'form-control', 'placeholder' => 'Direcci&oacute;n']) !!}
        
            @error('direcciones')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>        
    </div> 
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('telefono', 'Tel&eacute;fono') !!}
            {!! Form::text('telefono',null, ['class' => 'form-control', 'placeholder' => 'Tel&eacute;fono']) !!}
        
            @error('direcciones')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>        
    </div>       
</div>
<div class="row">
    <div class="col-4">
        <div class="form-group">
            {!! Form::label('pais_id', 'Nacionalidad / Pais') !!}
            {!! Form::select('pais_id',$paises, null, ['class' => 'form-control', 'placeholder' => 'Pais de Nacionalidad']) !!}
        </div>        
    </div>
    <div class="col-4">
        <div class="form-group">
            {!! Form::label('ciudad_id', 'Ciudad de Residencia') !!}
            {!! Form::select('ciudad_id',$ciudades, null, ['class' => 'form-control', 'placeholder' => 'Ciudad de Residencia']) !!}        
        </div>    
    </div>
    <div class="col-4">
        <div class="form-group">
            {!! Form::label('barrio_id', 'Barrio de Residencia') !!}
            {!! Form::select('barrio_id',$barrios, null, ['class' => 'form-control', 'placeholder' => 'Barrio de Residencia']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            {!! Form::label('fec_nacimiento', 'Fec.Nacimiento') !!}
            {!! Form::date('fec_nacimiento',null, ['class' => 'form-control', 'placeholder' => 'Fec. Nacimiento']) !!}
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
                    {!! Form::number('salario',null, ['class' => 'form-control', 'placeholder' => 'Salario']) !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    {!! Form::label('salario_ips', 'Salario IPS') !!}
                    {!! Form::number('salario_ips',null, ['class' => 'form-control', 'placeholder' => 'Salario IPS']) !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    {!! Form::label('anticipo', 'Anticipo') !!}
                    {!! Form::number('anticipo',null, ['class' => 'form-control', 'placeholder' => 'Anticipo']) !!}
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
                    {!! Form::date('fec_ingreso',null, ['class' => 'form-control', 'placeholder' => 'Fec. Ingreso']) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('estado', 'Estado del cargo') !!}
                    <div class="form-check">
                        {!! Form::radio('estado', 'A',null,['class' => 'form-check-input']) !!}Activo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {!! Form::radio('estado', 'I',null,['class' => 'form-check-input']) !!}Inactivo   
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {!! Form::label('cargo_id', 'Cargo del Empleado') !!}
                    {!! Form::select('cargo_id',$cargos, null, ['class' => 'form-control', 'placeholder' => 'Cargo del Empleado']) !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    {!! Form::label('seccion_id', 'Secci&oacute;n del Empleado') !!}
                    {!! Form::select('seccion_id',$secciones, null, ['class' => 'form-control', 'placeholder' => 'Secci&oacute;n del Empleado']) !!}
                </div>
            </div>
            <div class="col-4"> 
                <div class="form-group"> 
                    {!! Form::label('sucursal_id', 'Sucursal del Empleado') !!}
                    {!! Form::select('sucursal_id',$sucursales, null, ['class' => 'form-control', 'placeholder' => 'Sucursal del Empleado']) !!}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card card-red">
    <div class="card-header">
        Datos Familiares
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6">
               <div class="form-group">
                    {!! Form::label('fec_ingreso', 'Fec. Ingreso') !!}
                    {!! Form::date('fec_ingreso',null, ['class' => 'form-control', 'placeholder' => 'Fec. Ingreso']) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('estado_civil', 'Estado Civil') !!}
                    <div class="form-check">
                        {!! Form::radio('estado_civil', 'S',null,['class' => 'form-check-input']) !!}Soltero/a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {!! Form::radio('estado', 'C',null,['class' => 'form-check-input']) !!}Casado/a
                        {!! Form::radio('estado_civil', 'A',null,['class' => 'form-check-input']) !!}Acompañado/a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {!! Form::radio('estado', 'C',null,['class' => 'form-check-input']) !!}Divorciado/a
                        {!! Form::radio('estado_civil', 'A',null,['class' => 'form-check-input']) !!}Acompañado/a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {!! Form::radio('estado', 'C',null,['class' => 'form-check-input']) !!}Divorciado/a
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {!! Form::label('cargo_id', 'Cargo del Empleado') !!}
                    {!! Form::select('cargo_id',$cargos, null, ['class' => 'form-control', 'placeholder' => 'Cargo del Empleado']) !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    {!! Form::label('seccion_id', 'Secci&oacute;n del Empleado') !!}
                    {!! Form::select('seccion_id',$secciones, null, ['class' => 'form-control', 'placeholder' => 'Secci&oacute;n del Empleado']) !!}
                </div>
            </div>
            <div class="col-4"> 
                <div class="form-group"> 
                    {!! Form::label('sucursal_id', 'Sucursal del Empleado') !!}
                    {!! Form::select('sucursal_id',$sucursales, null, ['class' => 'form-control', 'placeholder' => 'Sucursal del Empleado']) !!}
                </div>
            </div>
        </div>
    </div>
</div>






