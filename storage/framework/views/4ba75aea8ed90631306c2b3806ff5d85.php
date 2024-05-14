
<?php $__env->startSection('contents'); ?>

<div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Perihal Berita Acara</h1>
        <a href="<?php echo e(route('jenisba.create')); ?>" class="btn btn-primary"> + Tambah Perihal BA</a>
</div>
<hr/>
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Perihal Berita Acara</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php if($jenisbas->count() > 0): ?>
        <?php $__currentLoopData = $jenisbas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenisbas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="align-middle"><?php echo e($loop->iteration); ?></td>
            <td class="align-middle"><?php echo e($jenisbas->jenisba); ?></td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo e(route('jenisba.edit', $jenisbas->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                    <form action ="<?php echo e(route('jenisba.destroy', $jenisbas->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button class="btn btn-danger m-0"> Hapus</button>
                </form>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td class="text-center"colspan="5">Perihal BA Belum Ada</td>
</tr>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DESTIYAN\LATIHAN LARAVEL\BERITA ACARA DESK APP\beritaacara-desk\resources\views/jenisba/index.blade.php ENDPATH**/ ?>