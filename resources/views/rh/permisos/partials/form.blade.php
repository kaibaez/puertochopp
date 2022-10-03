<div class="row">
    <div class="col-12">
        <div class="form-group">
            {!! Form::label('empleado_id', 'Empleado') !!}
            {!! Form::select('empleado_id',$empleados, null, ['class' => 'form-control', 'placeholder' => 'Nombre del Empleado']) !!}
        
            @error('empleado_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            {!! Form::label('tip_permiso_id', 'Permiso por:') !!}
            {!! Form::select('tip_permiso_id',$tipo_permisos, null, ['class' => 'form-control', 'placeholder' => 'Concepto del Permiso']) !!}
        
            @error('tip_permiso_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('fec_desde', 'Fec. desde') !!}
            {!! Form::date('fec_desde',null, ['class' => 'form-control', 'placeholder' => 'Permiso desde']) !!}
            @error('fec_desde')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('fec_hasta', 'Fec. hasta') !!}
            {!! Form::date('fec_hasta',null, ['class' => 'form-control', 'placeholder' => 'Permiso hasta']) !!}
            @error('fec_hasta')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            {!! Form::label('observaciones', 'Observaciones') !!}
            {!! Form::textarea('observaciones',null, ['class' => 'form-control', 'placeholder' => 'Observaciones del Permiso / Detalles / Otros']) !!}            
            @error('observaciones')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            {!! Form::label('estado', 'Estado') !!}
            <div class="form-check">
                {!! Form::radio('estado', 'P',null,['class' => 'form-check-input']) !!}Pendiente &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {!! Form::radio('estado', 'C',null,['class' => 'form-check-input']) !!}Cerrardo
            </div>  
        </div>
    </div>
</div>

