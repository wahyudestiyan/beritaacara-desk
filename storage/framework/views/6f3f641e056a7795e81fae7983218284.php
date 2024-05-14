


<?php $__env->startSection('contents'); ?>
<div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Instansi</h1>
        <a href="<?php echo e(route('instansi.create')); ?>" class="btn btn-primary"> + Tambah Instansi</a>
</div>
<hr/>
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Nama Instansi</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if($instansis->count() > 0): ?>
        <?php $__currentLoopData = $instansis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instansis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="align-middle"><?php echo e($loop->iteration); ?></td>
            <td class="align-middle"><?php echo e($instansis->nama_instansi); ?></td>
            <td class="align-middle"><?php echo e($instansis->alamat); ?></td>
            <td class="align-middle"><?php echo e($instansis->telepon); ?></td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href=<?php echo e(route('instansi.edit', $instansis->id)); ?> class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="<?php echo e(route('instansi.show', $instansis->id)); ?>" class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <form action ="<?php echo e(route('instansi.destroy', $instansis->id)); ?>}" method="POST" onsubmit="return confirm('Delete?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td class="text-center"colspan="5">Instansi Belum Ada</td>
</tr>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\beritaacara-desk\resources\views/instansi/index.blade.php ENDPATH**/ ?>