
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre Usuario') }}</label>
    <div>
        {{ Form::text('nombre', $unascita->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Motivo Cita') }}</label>
    <div>
        {{ Form::text('problema', $unascita->problema, ['class' => 'form-control' .
        ($errors->has('problema') ? ' is-invalid' : ''), 'placeholder' => 'Problema']) }}
        {!! $errors->first('problema', '<div class="invalid-feedback">:message</div>') !!}
       
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('direccion') }}</label>
    <div>
        {{ Form::text('direccion', $unascita->direccion, ['class' => 'form-control' .
        ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
        {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('comuna') }}</label>
    <div>
        {{ Form::text('comuna', $unascita->comuna, ['class' => 'form-control' .
        ($errors->has('comuna') ? ' is-invalid' : ''), 'placeholder' => 'Comuna']) }}
        {!! $errors->first('comuna', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono') }}</label>
    <div>
        {{ Form::text('telefono', $unascita->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_cita') }}</label>
    <div>
        {{ Form::text('fecha_cita', $unascita->fecha_cita, ['class' => 'form-control' .
        ($errors->has('fecha_cita') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cita']) }}
        {!! $errors->first('fecha_cita', '<div class="invalid-feedback">:message</div>') !!}
       
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="" class="btn btn-primary">Limpiar Datos</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Subir Cita</button>
            </div>
        </div>
    </div>
