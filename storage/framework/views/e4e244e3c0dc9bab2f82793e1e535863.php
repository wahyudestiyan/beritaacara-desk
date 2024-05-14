


<?php $__env->startSection('contents'); ?>

<div class="container d-flex justifiy-content-center pt-8">
    <div class="col-md-11">
        <h2 class="text-center pb-2 text-secondary">Tambah Berita Acara</h2>       
        <hr/>
        <form action="<?php echo e(route('ba.update', $bas->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
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
                        $result=mysqli_query($con,"SELECT * FROM jenisbas ORDER BY jenisba ASC") or die
                        (mysqli_error($con));
                        while ($sql_jenisbas=mysqli_fetch_array($result)) {
                            $selected = ($sql_jenisbas['jenisba'] == $bas->jenis_ba) ? 'selected' : '';
                            echo '<option value="'.$sql_jenisbas['jenisba'].'" '.$selected.'>',
                                    $sql_jenisbas['jenisba'].'</option>';
                        }
                        ?>
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
                        $con = mysqli_connect("localhost", "root", "", "badesk");
                        $sql_instansis = mysqli_query($con, "SELECT * FROM instansis ORDER BY nama_instansi ASC") or die
                        (mysqli_error($con));
                        while ($instansis = mysqli_fetch_array($sql_instansis)) {
                            $selected = ($instansis['nama_instansi'] == $bas->instansi) ? 'selected' : '';
                            echo '<option value="'.$instansis['nama_instansi'].'" '.$selected.'>',
                                    $instansis['nama_instansi'].'</option>';
                        }
                        ?>
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
<table class="table table-bordered" id="tmbhjuduldata">
        <tr>
            <th width="590">Judul Data yang sudah dipenuhi</th>
            <th width="110"></th>
            <th width="70"><button id="addjuduldata" type="button" name="add" class="btn btn-primary">+</button></th>
        </tr>
        <?php $__currentLoopData = $bas->julda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td width="600">
                <input type="text" name="judul[]" value="<?php echo e($data->judul_data); ?>" placeholder="Isikan Judul Data" class="form-control">
            </td>
            <td width="110">
                <input type="text" name="julket[]" value="<?php echo e($data->julket); ?>" placeholder="Tahun" class="form-control">
            </td>
            <td width="10">
                <button type="button" class="btn btn-danger remove-table-row">-</button>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <table class="table table-bordered" id="tmbhjudulbelum">
        <tr>
            <th width="590">Tindak Lanjut Kesepakatan Pemenuhan Data Jika Ada</th>
            <th width="110"></th>
            <th width="70"><button id="addjudulbelum" type="button" name="addbelum" class="btn btn-warning">+</button></th>
        </tr>
        <?php $__currentLoopData = $bas->juldabelum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td width="600">
                <input type="text" name="juduldata[]" value="<?php echo e($data->juduldata_belum); ?>" placeholder="Isikan Judul Data" class="form-control">
            </td>
            <td width="110">
                <input type="text" name="julketbelum[]" value="<?php echo e($data->julket_belum); ?>" placeholder="Tahun" class="form-control">
            </td>
            <td width="10">
                <button type="button" class="btn btn-danger remove-table-row">-</button>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <div>
        <input type="submit" class="btn btn-success" value="Submit">
        <a href="<?php echo e(route('ba')); ?>" type="button" class="btn btn-secondary">Kembali</a>
    </div>
</form>

<script>
    var i = 0;

    // tambah row judul data 
    $("#addjuduldata").click(function() {
        ++i;
        $("#tmbhjuduldata").append(
            `<tr>
                <td width="600">
                    <input type="text" name="judul[]" placeholder="Isikan Judul Data" class="form-control">
                </td>
                <td width="110">
                    <input type="text" name="julket[]" placeholder="Tahun" class="form-control">
                </td>
                <td width="10">
                    <button type="button" class="btn btn-danger remove-table-row">-</button>
                </td>
            </tr>`
        );
    });

    // tambah row judul data belum
    $("#addjudulbelum").click(function() {
        ++i;
        $("#tmbhjudulbelum").append(
            `<tr>
                <td width="600">
                    <input type="text" name="juduldata[]" placeholder="Isikan Judul Data" class="form-control">
                </td>
                <td width="110">
                    <input type="text" name="julketbelum[]" placeholder="Tahun" class="form-control">
                </td>
                <td width="10">
                    <button type="button" class="btn btn-danger remove-table-row">-</button>
                </td>
            </tr>`
        );
    });

    // hapus row data
    $(document).on('click', '.remove-table-row', function() {
        $(this).closest('tr').remove();
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\beritaacara-desk\resources\views/ba/edit.blade.php ENDPATH**/ ?>