<div class="row">
    <div class="col-12">
        <div class="form-group">
            {!! Form::label('descripcion', 'Tipo de Permiso') !!}
            {!! Form::text('descripcion',null, ['class' => 'form-control', 'placeholder' => 'Descripci&oacute;n del Tipo de Permiso']) !!}
        
            @error('descripcion')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>






