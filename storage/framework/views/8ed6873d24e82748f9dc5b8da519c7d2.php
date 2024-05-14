


<?php $__env->startSection('contents'); ?>
<h1 class="mb-0">Tambah Perihal Berita Acara</h1>
        <hr/>
        <form action="<?php echo e(route('jenisba.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
        <div class="mb-3 row">
        <label class="col-sm-3 col-form-label"> Jenis Berita Acara</label>
            <div class="col sm-9">
            <input type="text" name="jenisba" class="form-control" placeholder="Perihal Berita Acara">
        </div>
</div>
        <div class="mb-3 row">
            <label for="ba" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('jenisba')); ?>" type="button" class="btn btn-secondary">Kembali</a>
        </div>
        </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DESTIYAN\LATIHAN LARAVEL\BERITA ACARA DESK APP\beritaacara-desk\resources\views/jenisba/create.blade.php ENDPATH**/ ?>