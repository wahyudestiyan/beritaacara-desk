


<?php $__env->startSection('contents'); ?>

<div class="container d-flex justifiy-content-center pt-8">
    <div class="col-md-11">
        <h2 class="text-center pb-2 text-secondary">Tambah Berita Acara</h2>       
        <hr/>
        <form action="<?php echo e(route('ba.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <table class="table table-bordered">
    <tr>
        <th>Instansi</th>
</tr>
<tr>
<td>
<select name="instansi" id="nama_instansi" class="form-control" required>
<option value=""><?php echo e($bas->instansi); ?></option>
<?php
            $con =mysqli_connect("localhost","root","","ba");
            $sql_instansis=mysqli_query($con,"SELECT*From instansis order by nama_instansi asc") or die
            (mysqli_eror($con));
            while ($instansis=mysqli_fetch_array($sql_instansis)) {
                echo '<option value="'.$instansis['nama_instansi'].'">',
                            $instansis['nama_instansi'].'</option>';
                    
            }?>
            </select>
        </td>
</tr>
</table>

<table class="table table-bordered">
    <tr>
        <th>Tanggal</th>
</tr>
<td>
<input type="date" name="tanggal_ba" class="form-control" value="<?php echo e($bas->tanggal_ba); ?>">
</td>

<table class="table table-bordered">
    <tr>
        <th>Tahun Data</th>
</tr>
<td>
<input type="text" name="tahun" class="form-control" value="<?php echo e($bas->tahun); ?>">
</td>
<table class="table table-bordered" id="tmbhjudul">
    <tr>
        <th>Judul Data</th>
        <th>Keterangan Judul</th>
        <th>Action</th>
</tr>
<tr>
<td><input type="text" name="judul[]" placeholder="Isikan Judul Data" class="form-control"></td>
<td><input type="text" name="julket[]" placeholder="keterangan judul data" class="form-control"></td>
<td><button id="addjudul" type="button" name="add" class="btn btn-primary">Tambah Judul Data</button></td>
</tr>
</table>
<table class="table table-bordered" id="tmbhjudulbelum">
    <tr>
        <th>Tindak Lanjut Kesepakatan Jika Ada</th>
        <th><button id="addjudulbelum" type="button" name="addbelum" class="btn btn-warning">Tambah Tindak Lanjut</button></th>
</tr>

</table>
<table class="table table-bordered" id="tmbhjudulbelum">
</table>
            <td>
            <input type="submit" class="btn btn-success " value="Submit">
            <a href="<?php echo e(route('ba')); ?>" type="button" class="btn btn-secondary">Kembali</a>
            </td>

</form>

<script> 
   var i= 0;
        $("#addjudul").click(function(){
            ++i;
            $("#tmbhjudul").append(
                `<tr>
                <td>
                <input type="text" name="judul[]" placeholder="Isikan Judul Data" class="form-control"></td>
                <td>
                <input type="text" name="julket[]" placeholder="keterangan judul data" class="form-control"></td>
                <td>
                <button type="button" class="btn btn-danger remove-table-row">Hapus</button></td>
            </tr>`
            );
        
            $(document).on('click','.remove-table-row',function(){
                $(this).parents('tr').remove();
            })
        });
</script> 
<script>
    var i= 0;
        $("#addjudulbelum").click(function(){
            ++i;
            $("#tmbhjudulbelum").append(
            `<tr>
                <td>
                <input type="text" name="juduldata[]" placeholder="Isikan Judul Data" class="form-control"></td>
                <td>
                <input type="text" name="julketbelum[]" placeholder="keterangan judul data" class="form-control"></td>
                <td>
                <button type="button" class="btn btn-danger remove-table-row">Hapus</button></td>
            </tr>`
            );
        
            $(document).on('click','.remove-table-row',function(){
                $(this).parents('tr').remove();
            })
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DESTIYAN\LATIHAN LARAVEL\BERITA ACARA DESK APP\beritaacara-desk\resources\views/ba/edit.blade.php ENDPATH**/ ?>