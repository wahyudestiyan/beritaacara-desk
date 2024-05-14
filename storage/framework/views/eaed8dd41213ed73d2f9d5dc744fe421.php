


<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Tambah Instansi</h1>
        <hr/>
        <form action="<?php echo e(route('instansi.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
        <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Nama Instansi</label>
            <div class="col sm-9">
            <input type="text" name="nama_instansi" class="form-control" placeholder="Instansi Name">
        </div>
</div>
<div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Alamat</label>
            <div class="col sm-9">
            <textarea class="form-control" name="alamat" rows="2"></textarea>
        </div>
</div>
<div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Telepon</label>
            <div class="col sm-9">
            <input type="text" name="telepon" class="form-control" placeholder="telepon">
        </div>
</div>
        <div class="mb-3 row">
            <label for="ba" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('instansi')); ?>" type="button" class="btn btn-secondary">Kembali</a>
        </div>
        </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DESTIYAN\LATIHAN LARAVEL\BERITA ACARA DESK APP\beritaacara-desk\resources\views/instansi/create.blade.php ENDPATH**/ ?>