

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Usuarios Registrados</h2>
        </div>
        <div>
            <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary">Registrar Usuario</a>
        </div>
    </div>
    <?php if(Session::get('success')): ?>
        <div class="alert alert-success mt-2">
            <strong><?php echo e(Session::get('success')); ?></strong><br><br>
        </div>
    <?php endif; ?>
    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Creado</th>
                <th>Rol</th>
                <th>Acción</th>
            </tr>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="fw-bold"><?php echo e($user->employees->name_ets); ?> <?php echo e($user->employees->lastname_ets); ?></td>
                <td><?php echo e($user->username_uts); ?></td>
                <td>
                    31/03/23
                </td>
                <td>
                    <span class="badge bg-warning fs-6"><?php echo e($user->roles->name_rts); ?></span>
                </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iDigitalStudios_Test_\iDigitalStudios_Test\resources\views/layouts/users/users.blade.php ENDPATH**/ ?>