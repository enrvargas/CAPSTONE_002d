
<div class="form-group mb-3">
    <label class="form-label">   <?php echo e(Form::label('Nombre Usuario')); ?></label>
    <div>
        <?php echo e(Form::text('nombre', $unascita->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

        <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   <?php echo e(Form::label('Motivo Cita')); ?></label>
    <div>
        <?php echo e(Form::text('problema', $unascita->problema, ['class' => 'form-control' .
        ($errors->has('problema') ? ' is-invalid' : ''), 'placeholder' => 'Problema'])); ?>

        <?php echo $errors->first('problema', '<div class="invalid-feedback">:message</div>'); ?>

       
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   <?php echo e(Form::label('direccion')); ?></label>
    <div>
        <?php echo e(Form::text('direccion', $unascita->direccion, ['class' => 'form-control' .
        ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion'])); ?>

        <?php echo $errors->first('direccion', '<div class="invalid-feedback">:message</div>'); ?>

        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   <?php echo e(Form::label('comuna')); ?></label>
    <div>
        <?php echo e(Form::text('comuna', $unascita->comuna, ['class' => 'form-control' .
        ($errors->has('comuna') ? ' is-invalid' : ''), 'placeholder' => 'Comuna'])); ?>

        <?php echo $errors->first('comuna', '<div class="invalid-feedback">:message</div>'); ?>

        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   <?php echo e(Form::label('telefono')); ?></label>
    <div>
        <?php echo e(Form::text('telefono', $unascita->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono'])); ?>

        <?php echo $errors->first('telefono', '<div class="invalid-feedback">:message</div>'); ?>

        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   <?php echo e(Form::label('fecha_cita')); ?></label>
    <div>
        <?php echo e(Form::text('fecha_cita', $unascita->fecha_cita, ['class' => 'form-control' .
        ($errors->has('fecha_cita') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cita'])); ?>

        <?php echo $errors->first('fecha_cita', '<div class="invalid-feedback">:message</div>'); ?>

       
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
<?php /**PATH C:\xampp\htdocs\tablarcurso\tablarcurso\resources\views/unascita/form.blade.php ENDPATH**/ ?>