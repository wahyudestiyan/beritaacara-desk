
  
  
<?php $__env->startSection('contents'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> Cetak Berita Acara </title>
</head>
<table width="1000" align="center">
    <tr>  
    <td><center><img src="<?php echo e(URL('image/pemprov-jateng.png')); ?>" alt="" width="100" height="100"></td></center>
      <td><center> 
                <font size ="5"><b>PEMERINTAH PROVINSI JAWA TENGAH</b></font><br>
                <font size ="6"><b>DINAS KOMUNIKASI DAN INFORMATIKA</b></font><br>
                <font size ="2">Jl. Menteri Supeno I Semarang, Mugassari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50243</font><br>
                <font size ="2">Surat Elektronik : diskominfo@jatengprov.go.id ; Website : http://diskominfo.jatengprov.go.id</font></center>
      </td>
</tr>
<tr>
    <td colspan="2"><hr size="4px" color="black"></td>
</tr>
</table>
<tr>
<table width="1000" align="center">
      <td><center> 
                <font size ="5"><b>BERITA ACARA</b></font><br>
                <font size ="5"><b><?php $bas_new=strtoupper("$bas->jenis_ba"); echo $bas_new?></b></font><br>
                <font size ="5"><b>TAHUN <?php echo date("Y")?></b></font></center>
      </td>
</tr>
</table>
<table width="1000"  align="center">
<tr>
<td height="30" colspan="2"></td>
</tr>

<td colspan="2" algin="justify"><font size="4">Telah dilaksanakan <?php echo "$bas->jenis_ba"?> Tahun <b> <?php echo "$bas->tahun"?> </b> pada <b><?php echo "$bas->instansi"?></b>
hari <b><?php echo (\Carbon\Carbon::parse($bas->tanggal_ba)->translatedFormat('l'))?></b>
tanggal <b><?php echo (\Carbon\Carbon::parse($bas->tanggal_ba)->translatedFormat('d'))?></b>
bulan <b><?php echo (\Carbon\Carbon::parse($bas->tanggal_ba)->translatedFormat('F'))?></b>
Tahun <b><?php echo (\Carbon\Carbon::parse($bas->tanggal_ba)->translatedFormat('Y'))?></b> melalui Portal Satu Data Jawa Tengah. Adapun Judul Data sebagai berikut :<p>
</font>
<p class="justify"><font size="4">
    <table  align="center">
    <thead class="table-secondary">
        <tr>
            <th width="50">No </th>
            <th width="800">Judul Data</th>
            <th width="150">Tahun</th>
        </tr>
</thead>
        <tbody>
        <?php if($juldas->count() > 0): ?>
        <?php $__currentLoopData = $juldas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="align-middle"><?php echo e($key+1); ?></td>
            <td class="align-middle"><?php echo e($row->judul_data); ?></td>
            <td class="align-middle"><?php echo e($row->julket); ?></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php else: ?>
            <tr>
                <td class="text-center"colspan="5">-</td>
</tr>
        <?php endif; ?>
         </font>
</tbody>

<td height="20"></td>
</table>
<p class="justify"><font size="4">Kesepakatan tindaklanjut pemenuhan data statistik sektoral adalah sebagai berikut : <p>
</font>
<p class="justify"><font size="4">
<table  align="center">
<thead class="table-secondary">        
        <tr>
            <th width="50">No</th>
            <th width="800">Judul Data</th>
            <th width="150">Tahun</th>
        </tr>
</thead>
</font>
    <tbody>
        <?php if($juldabelums->count() > 0): ?>
        <?php $__currentLoopData = $juldabelums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="align-middle"><?php echo e($k+1); ?></td>
            <td class="align-middle"><?php echo e($v->juduldata_belum); ?></td>
            <td class="align-middle"><?php echo e($v->julket_belum); ?></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php else: ?>
            <tr>
                <td class="text-center"colspan="5">-</td>
</tr>
        <?php endif; ?>
</tbody>
<td height="20"></td>
</table>
<p class="justify"><font size="4">Jika ada Judul Data yang belum dipenuhi oleh <b><?php echo "$bas->instansi"?></b> sesuai 
    dengan tabel kesepakatan tindaklanjut diatas dimohon untuk dipenuhi maksimal pada tanggal <b><?php $a = strtotime ("+1 weeks");
    echo (\Carbon\Carbon::parse($bas->created_at)->translatedFormat('l, d F Y'));// echo date ("l, d F Y",$a) //  ?> </b>.<p> 
</font>  
<p class="justify"><font size="4">Demikian Berita Acara ini disusun dan disepakati oleh Walidata Daerah bersama <b><?php echo "$bas->instansi"?></b> sebagai Walidata Pendukung/Produsen Data.<p>
</font>
<tr>
<td height="30"></td>
</tr>

<table width="1000" align="center">		
<tr>
        	<td width="400">Produsen Data</td>
			<td width="200"></td>
            <td width="400">Walidata Daerah</td>
  		</tr>
  		<tr>
    		<td><?php echo "$bas->instansi"?></td>
    		<td></td>
            <td>Dinas Komunikasi dan Informatika</td>
		</tr>
  		<tr>
    		<td>Provinsi Jawa Tengah</td>
    		<td></td>
            <td>Provinsi Jawa Tengah</td>
		</tr>
	</table>
    <table width="1000" align="center">
    <tr>
            <td height="70" width="600"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ttdprodusen">
                TandaTangan Produsen
              </button></td>
            <td height="70" width="600"><a href="<?php echo e(route('signpadprod.save')); ?>" type="button" class="btn btn-secondary">TandaTangan Produsen</a></td>
            <td height="70"><a href="<?php echo e(route('signpad.save')); ?>" type="button" class="btn btn-warning">TandaTangan Walidata</a></td>
        </tr>
        <tr>
                
        </tr>
    </table>
    <table width="1000" align="center">

    <tr>
        	<td width="95">Nama</td>
            <td width="5">:</td>
			<td width="300"></td>
            <td width="200"></td>
            <td width="95">Nama</td>
            <td width="5">:</td>
            <td width="300"><?php echo e(auth()->user()->name); ?></td>
  		</tr>
  		<tr>
            <td width="95">NIP</td>
            <td width="5">:</td>
			<td width="300"></td>
            <td width="200"></td>
            <td width="95">NIP</td>
            <td width="5">:</td>
            <td width="300"><?php echo e(auth()->user()->nip); ?></td>
		</tr>
  		<tr>
            <td width="95">No. HP</td>
            <td width="5">:</td>
			<td width="300"></td>
            <td width="200"></td>
            <td width="95">No.HP</td>
            <td width="5">:</td>
            <td width="300"><?php echo e(auth()->user()->telpon); ?></td>
		</tr>
	</table><br>
    <br>  
    <table  align="right">
    <td><a href="<?php echo e(route('ba')); ?>" type="button" class="btn btn-primary">Kembali</a></td> 
    </table>
 <!-- Modal --> 

</html>
<?php echo $__env->make('.ba.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\beritaacara-desk\resources\views//ba/show.blade.php ENDPATH**/ ?>