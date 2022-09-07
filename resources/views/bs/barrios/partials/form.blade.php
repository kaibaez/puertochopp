<div class="form-group">
    {!! Form::label('descripcion', 'Descripci&oacute;n Bario') !!}
    {!! Form::text('descripcion',null, ['class' => 'form-control', 'placeholder' => 'Descripci&oacute;n Barrio']) !!}

    @error('descripcion')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('ciudad_id', 'Ciudad') !!}
    {!! Form::select('ciudad_id',$ciudades, null, ['class' => 'form-control', 'placeholder' => 'Ciudad']) !!}
</div>        
<div class="form-group">
    {!! Form::label('estado', 'Estado') !!}
    <div class="form-check">
        {!! Form::radio('estado', 'A',null,['class' => 'form-check-input']) !!}Activo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {!! Form::radio('estado', 'I',null,['class' => 'form-check-input']) !!}Inactivo   
    </div>  
</div>