<div class="form-group">
    {!! Form::label('descripcion', 'Descripci&oacute;n del Cargo') !!}
    {!! Form::text('descripcion',null, ['class' => 'form-control', 'placeholder' => 'Descripci&oacute;n del Cargo']) !!}


    @error('descripcion')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('acargo', 'A cargo de') !!}
    {!! Form::select('acargo',$cargos, null, ['class' => 'form-control', 'placeholder' => 'Sin superior Asignado']) !!}
</div>
<div class="form-group">
    {!! Form::label('descripcion_cargo', 'Descripciones') !!}
    {!! Form::textarea('descripcion_cargo',null, ['class' => 'form-control', 'placeholder' => 'Descripci&oacute;n del Cargo']) !!}
</div>
<div class="form-group">
    {!! Form::label('funciones_cargo', 'Funciones del Cargo') !!}
    {!! Form::textarea('funciones_cargo',null, ['class' => 'form-control', 'placeholder' => 'Funciones del Cargo']) !!}
</div>

<div class="form-group">
    {!! Form::label('estado', 'Estado del cargo') !!}
    <div class="form-check">
        {!! Form::radio('estado', 'A',null,['class' => 'form-check-input']) !!}Activo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {!! Form::radio('estado', 'I',null,['class' => 'form-check-input']) !!}Inactivo   
    </div>  
</div>

