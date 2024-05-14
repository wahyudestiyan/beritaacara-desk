


<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Detail Instansi</h1>
        <hr/>
        <form action="<?php echo e(route('instansi.update',$instansis->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
        <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Nama Instansi</label>
            <div class="col sm-9">
            <input type="text" name="nama_instansi" class="form-control" value="<?php echo e($instansis->nama_instansi); ?>" readonly>
        </div>
</div>
        <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Alamat</label>
            <div class="col sm-9">
            <input type="text" name="alamat" class="form-control" value="<?php echo e($instansis->alamat); ?>" readonly>
        </div>
</div>
<div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Telepon</label>
            <div class="col sm-9">
            <input type="text" name="telepon" class="form-control" value="<?php echo e($instansis->telepon); ?>" readonly>
        </div>
</div>
 <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Created at</label>
            <div class="col sm-9">
            <input type="text" name="created_at" class="form-control" value="<?php echo e($instansis->created_at); ?>" readonly>
        </div>
</div>
<div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Updated at</label>
            <div class="col sm-9">
            <input type="text" name="updated_at" class="form-control" value="<?php echo e($instansis->updated_at); ?>" readonly>
        </div>
</div>
        <div class="mb-3 row">
            <label for="ba" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
             <a href="<?php echo e(route('instansi')); ?>" type="button" class="btn btn-secondary">Kembali</a>
        </div>
        </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DESTIYAN\LATIHAN LARAVEL\BERITA ACARA DESK APP\beritaacara-desk\resources\views/instansi/show.blade.php ENDPATH**/ ?>