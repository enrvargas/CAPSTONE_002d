<?php $__env->startSection('title', 'View Unascita'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Vista
                    </div>
                    <h2 class="page-title">
                        <?php echo e(__('Mi Agenda ')); ?>

                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="<?php echo e(route('unascitas.index')); ?>" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Mi Agenda Lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <?php if(config('tablar','display_alert')): ?>
                        <?php echo $__env->make('tablar::common.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Mi Cita Detalle</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Nombre:</strong>
<?php echo e($unascita->nombre); ?>

</div>
<div class="form-group">
<strong>Problema:</strong>
<?php echo e($unascita->problema); ?>

</div>
<div class="form-group">
<strong>Direccion:</strong>
<?php echo e($unascita->direccion); ?>

</div>
<div class="form-group">
<strong>Comuna:</strong>
<?php echo e($unascita->comuna); ?>

</div>
<div class="form-group">
<strong>Telefono:</strong>
<?php echo e($unascita->telefono); ?>

</div>
<div class="form-group">
<strong>Fecha Cita:</strong>
<?php echo e($unascita->fecha_cita); ?>

</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('tablar::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tablarcurso\tablarcurso\resources\views/unascita/show.blade.php ENDPATH**/ ?>