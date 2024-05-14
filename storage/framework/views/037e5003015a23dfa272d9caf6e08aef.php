


<?php $__env->startSection('contents'); ?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
<style>
    .kbw-signature {
        width: 100%;
        height: 200px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-header">
                    <h5><center>TANDA TANGAN WALIDATA DAEARAH</center></h5>
                </div>
                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <span><?php echo e(session('success')); ?></span>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo e(route('signpad.save')); ?>">
                        <?php echo csrf_field(); ?>
                        
                        <div class="col-md-12">
                        <table class="table table-bordered">
                           
                        <tr>
                                    <th>Nama Walidata Daerah</th>
                            </tr>
                            <tr>
                            <td>
                            <select name="name" id="name" class="form-control" required>
                            <option value="">-Pilih Nama-</option>
                            <?php
                                        $con =mysqli_connect("localhost","root","","ba-desk");
                                        $sql_users=mysqli_query($con,"SELECT*From users order by name asc") or die
                                        (mysqli_eror($con));
                                        while ($users=mysqli_fetch_array($sql_users)) {
                                            echo '<option value="'.$users['name'].'">',
                                                        $users['name'].'</option>';
                                                
                                        }?>
                                        </select>
                                    </td>
                            </tr>
                                <tr>
                                <th>NIP</th>
                            </tr>
                                <td>
                                <input type="text" name="nip" class="form-control" value="">
                                </td>
                                <tr>
                                <th>No. HP</th>
                            </tr>
                                <td>
                                <input type="text" name="hp" class="form-control" value="">
                                </td>
                            
                            </table>
                            
                             
                        <div class="col-md-12">
                            <label><b>Signature: </b></label>
                            <br/>
                            <div id="sig"></div>
                            <br/><br/>
                            <button id="clear" class="btn btn-danger btn-sm">Clear</button>
                            <textarea id="signature" name="signed" style="display: none"></textarea>
                        </div>
                        <br/>
                        <button class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<table  align="right">
<td><a href="<?php echo e(route('ba')); ?>" type="button" class="btn btn-secondary">Kembali</a></td> 
</table>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
    $('#clear').click(function (e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DESTIYAN\LATIHAN LARAVEL\BERITA ACARA DESK APP\beritaacara-desk\resources\views/ba/signature.blade.php ENDPATH**/ ?>