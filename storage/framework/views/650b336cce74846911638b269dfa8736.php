


<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Edit Instansi</h1>
        <hr/>
        <form action="<?php echo e(route('instansi.update',$instansis->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
        <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Nama Instansi</label>
            <div class="col sm-9">
            <input type="text" name="nama_instansi" class="form-control" value="<?php echo e($instansis->nama_instansi); ?>">
        </div>
</div>
<div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Telepon</label>
            <div class="col sm-9">
            <input type="text" name="alamat" class="form-control" value="<?php echo e($instansis->alamat); ?>">
        </div>
</div>
<div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Telepon</label>
            <div class="col sm-9">
            <input type="text" name="telepon" class="form-control" value="<?php echo e($instansis->telepon); ?>">
        </div>
</div>
        <div class="mb-3 row">
            <label for="ba" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
             <button type="submit" class="btn btn-primary">Update</button>
             <a href="<?php echo e(route('instansi')); ?>" type="button" class="btn btn-secondary">Kembali</a>
        </div>
        </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\beritaacara-desk\resources\views/instansi/edit.blade.php ENDPATH**/ ?>