


<?php $__env->startSection('contents'); ?>
<div class="container d-flex justifiy-content-center pt-8">
    <div class="col-md-11">
        <h2 class="text-center pb-2 text-secondary">Tambah Berita Acara</h2>       
        <hr/>
        <form action="<?php echo e(route('ba.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

<table class="table table-bordered">
<tr>
        <th>Perihal Berita Acara</th>
</tr>
<tr>
<td>
<select name="jenis_ba" id="jenisba" class="form-control" required>
<option value="">-Pilih Perihal BA-</option>
<?php
            $con =mysqli_connect("localhost","root","","badesk");
            $result=mysqli_query($con,"SELECT*From jenisbas order by jenisba asc") or die
            (mysqli_eror($con));
            while ($sql_jenisbas=mysqli_fetch_array($result)) {
                echo '<option value="'.$sql_jenisbas['jenisba'].'">',
                            $sql_jenisbas['jenisba'].'</option>';
                    
            }?>
            </select>
        </td>
</tr>
</table>

<table class="table table-bordered">
<tr>
        <th>Instansi</th>
</tr>
<tr>
<td>
<select name="instansi" id="nama_instansi" class="form-control" required>
<option value="">-Pilih Instansi-</option>
<?php
            $con =mysqli_connect("localhost","root","","badesk");
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
<input type="date" name="tanggal_ba" class="form-control" placeholder="Tanggal BA">
</td>

<table class="table table-bordered">
    <tr>
        <th>Tahun Data</th>
</tr>
<td>
<input type="text" name="tahun" class="form-control" placeholder="Tahun Data">
</td>
<table class="table table-bordered" id="tmbhjuduldata">
    <tr>
        <th width="590">Judul Data yang sudah dipenuhi</th>
        <th width="110"></th>
        <th width="70"><button id="addjuduldata" type="button" name="add" class="btn btn-primary">+</button></th>
</tr>
</table>
<table class="table table-bordered" id="tmbhjudulbelum">
    <tr>
        <th width="590">Tindak Lanjut Kesepakatan Pemenuhan Data Jika Ada</th>
        <th width="110"></th>
        <th width="70"><button id="addjudulbelum" type="button" name="addbelum" class="btn btn-warning">+</button></th>
</tr>
</table>
            <td>
            <input type="submit" class="btn btn-success " value="Submit">
            <a href="<?php echo e(route('ba')); ?>" type="button" class="btn btn-secondary">Kembali</a>
            </td>

</form>
<script>
    var i= 0;
        $("#addjuduldata").click(function(){
            ++i;
            $("#tmbhjuduldata").append(
            `<tr>
                <td width="600">
                <input type="text" name="judul[]" placeholder="Isikan Judul Data" class="form-control"></td>
                <td width="110">
                <input type="text" name="julket[]" placeholder="Tahun" class="form-control"></td>
                <td width="10">
                <button type="button" class="btn btn-danger remove-table-row">-</button></td>
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
                <td width="600">
                <input type="text" name="juduldata[]" placeholder="Isikan Judul Data" class="form-control"></td>
                <td width="110">
                <input type="text" name="julketbelum[]" placeholder="Tahun" class="form-control"></td>
                <td width="10">
                <button type="button" class="btn btn-danger remove-table-row">-</button></td>
            </tr>`
            );
        
            $(document).on('click','.remove-table-row',function(){
                $(this).parents('tr').remove();
            })
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\beritaacara-desk\resources\views/ba/create.blade.php ENDPATH**/ ?>