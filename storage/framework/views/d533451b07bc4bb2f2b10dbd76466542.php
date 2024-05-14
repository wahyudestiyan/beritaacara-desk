
  
  
<?php $__env->startSection('contents'); ?>
<div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Berita Acara</h1>
        <a href="<?php echo e(route('ba.create')); ?>" class="btn btn-primary">+ Tambah Berita Acara</a>
</div>
<hr/>
<table align="left">
<tr>
    <td height="10"></td>
    
</tr>
</table>

<?php if(Session::has('success')): ?>
<div class="alert alert-success" roles="alert">
<?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?> 
<div class="my-3">
    <form action="" method="get">
        <div class="input-group mb-3 col-12 col-md-8    ">
            <input name="keyword" type="text" class="form-control" placeholder="Masukan kata kunci">
            <button class="input-group-text btn btn-primary">Cari</button>
            <a href="<?php echo e(route('ba')); ?>" type="button" class="input-group-text btn btn-danger">Reset</a>
</div>
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
        <?php $__currentLoopData = $bas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <input type="hidden" class="delete_id" value="<?php echo e($bas->id); ?>">
            <td class="align-middle"><?php echo e($loop->iteration); ?></td>
            <td class="align-middle"><?php echo e($bas->jenis_ba); ?></td>
            <td class="align-middle"><?php echo e($bas->instansi); ?></td>
            <td class="align-middle"><?php echo e(\Carbon\Carbon::parse($bas->tanggal_ba)->translatedFormat('l, d F Y')); ?></td>
            <td class="align-middle"><?php echo e($bas->tahun); ?></td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo e(route('ba.edit', $bas->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                    <a href="<?php echo e(route('ba.show', $bas->id)); ?>" type="button" class="btn btn-success">View</a>
                    <form action ="<?php echo e(route('ba.destroy', $bas->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button class="btn btn-danger m-0"> Hapus</button>
                </form>
                    <a href="<?php echo e(route('ba.show', $bas->id)); ?>" target="_blank" type="button" class="btn btn-primary">Cetak</a>
               </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php else: ?>
            <tr>
                <td class="text-center"colspan="5">Berita Acara Belum Ada</td>
</tr>
        <?php endif; ?>
        
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DESTIYAN\LATIHAN LARAVEL\BERITA ACARA DESK APP\beritaacara-desk\resources\views/ba/index.blade.php ENDPATH**/ ?>