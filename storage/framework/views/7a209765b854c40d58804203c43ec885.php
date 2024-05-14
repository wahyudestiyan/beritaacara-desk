

<?php $__env->startSection('contents'); ?>
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Daftar Berita Acara</h1>
    <a href="<?php echo e(route('ba.create')); ?>" class="btn btn-primary">+ Tambah Berita Acara</a>
</div>
<hr/>

<?php if(Session::has('success')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?> 

<div class="my-3">
    <form action="<?php echo e(route('ba')); ?>" method="GET">
        <input type="text" name="keyword" value="<?php echo e($keyword ?? ''); ?>" placeholder="Masukkan kata kunci">
        <button type="submit" class="btn btn-primary">Cari</button>
        <a href="<?php echo e(route('ba')); ?>" type="button" class="btn btn-danger">Reset</a>
    </form>
</div>

<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Perihal BA</th>
            <th width="800">Instansi</th>
            <th>Tanggal BA</th>
            <th>Tahun</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if($bas->count() > 0): ?>
        <?php $__currentLoopData = $bas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ba): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <input type="hidden" class="delete_id" value="<?php echo e($ba->id); ?>">
            <td class="align-middle"><?php echo e($loop->iteration); ?></td>
            <td class="align-middle"><?php echo e($ba->jenis_ba); ?></td>
            <td class="align-middle"><?php echo e($ba->instansi); ?></td>
            <td class="align-middle"><?php echo e(\Carbon\Carbon::parse($ba->tanggal_ba)->translatedFormat('l, d F Y')); ?></td>
            <td class="align-middle"><?php echo e($ba->tahun); ?></td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo e(route('ba.edit', $ba->id)); ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="<?php echo e(route('ba.show', $ba->id)); ?>" class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <form action ="<?php echo e(route('ba.destroy', $ba->id)); ?>" method="POST" onsubmit="return confirm('Delete?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </form>
                    <a href="<?php echo e(route('ba.cetak', $ba->id)); ?>" target="_blank" class="btn btn-success btn-sm">
                        <i class="fas fa-print"></i> Cetak
                    </a>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <tr>
            <td class="text-center" colspan="5">Berita Acara Belum Ada</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<div class="my-3 d-flex justify-content-end">
    <?php echo e($bas->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\beritaacara-desk\resources\views/ba/index.blade.php ENDPATH**/ ?>