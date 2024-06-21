

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div>
            <h2>Crear Tarea</h2>
        </div>
        <div>
            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger mt-2">
            <strong>Error</strong><br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('users.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombre de Usuario:</strong>
                    <input type="text" name="username_uts" class="form-control" placeholder="Nombre de Usuario" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Contraseña:</strong>
                    <input type="text" name="password_uts" class="form-control" placeholder="Contraseña" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Confirmar contraseña:</strong>
                    <input type="text" name="confirm_password_uts" class="form-control" placeholder="Confirmar contraseña" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Fecha límite:</strong>
                    <input type="date" name="due_date" class="form-control" id="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                <strong>Empleado:</strong>
                    <select name="id_ets" class="form-select" id="">
                        <option value="">-- Elige un empleado --</option>
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option name = "<?php echo e($employee->id); ?>"value="<?php echo e($employee->id); ?>"><?php echo e($employee->name_ets); ?> <?php echo e($employee->lastname_ets); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                <strong>Rol:</strong>
                    <select name="id_rts" class="form-select" id="">
                        <option value="">-- Elige el status --</option>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option name="<?php echo e($rol->id); ?>" value="<?php echo e($rol->id); ?>"><?php echo e($rol->name_rts); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iDigitalStudios_Test_\iDigitalStudios_Test\resources\views/layouts/users/createUser.blade.php ENDPATH**/ ?>