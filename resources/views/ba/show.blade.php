@extends('layouts.app')
  
  
@section('contents')
<!DOCTYPE html>
<html>
<head>
    <title> Cetak Berita Acara </title>
</head>

<table width="1000" align="center">
    <tr>  
    <td><center><img src="{{URL('image/pemprov-jateng.png')}}" alt="" width="100" height="100"></td></center>
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
                <font size ="5"><b>PEMENUHAN DATA STATISTIK SEKTORAL</b></font><br>
                <font size ="5"><b>TAHUN <?php echo date("Y")?></b></font></center>
      </td>
</tr>
</table>
<table width="1000"  align="center">
<tr>
<td height="30" colspan="2"></td>
</tr>

<td colspan="2" algin="justify"><font size="4">Telah dilaksanakan Pemenuhan Data Statistik Sektoral Tahun <b> <?php echo "$bas->tahun"?> </b> pada <b><?php echo "$bas->instansi"?></b>
hari <b><?php echo (\Carbon\Carbon::parse($bas->tanggal_ba)->translatedFormat('l'))?></b>
tanggal <b><?php echo (\Carbon\Carbon::parse($bas->tanggal_ba)->translatedFormat('d'))?></b>
bulan <b><?php echo (\Carbon\Carbon::parse($bas->tanggal_ba)->translatedFormat('F'))?></b>
Tahun <b><?php echo (\Carbon\Carbon::parse($bas->tanggal_ba)->translatedFormat('Y'))?></b> melalui Portal Satu Data Jawa Tengah. Adapun Judul Data sebagai berikut :<p>
</font>
<p class="justify"><font size="4">
    <table  align="center">
        
        <tr>
            <th width="50">No</th>
            <th width="800">Judul Data</th>
            <th width="150">Tahun</th>
        </tr>
        <tbody>
        <tr>
            <td class="align-middle"></td>
            <td class="align-middle">{{$bas->datajulda->judul_data}}</td>
            <td class="align-middle">{{$bas->datajulda->julket}}</td>
         </tr>
</tbody>
<td height="70"></td>
</table>

<p class="justify"><font size="4">Kesepakatan tindaklanjut pemenuhan data statistik sektoral adalah sebagai berikut : <p>
</font>
<p class="justify"><font size="4">
<table  align="center">
        <tr>
            <th width="50">No</th>
            <th width="800">Judul Data</th>
            <th width="150">Tahun</th>
        </tr>
    <tbody>

        <tr>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
        </tr>
</tbody>
<td height="70"></td>
</table>
endforeach
<p class="justify"><font size="4">Jika ada Judul Data yang belum dipenuhi oleh <b><?php echo "$bas->instansi"?></b> sesuai dengan tabel kesepakatan tindaklanjut diatas dimohon untuk dipenuhi maksimal pada tanggal <b><?php $a = strtotime ("+1 weeks"); echo(\Carbon\Carbon::parse($bas->tanggal_ba)->translatedFormat('l, d F Y')) //echo date(" d F Y",$a)?> </b>.<p>
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
        
            <td height="70"></td>
       
	</table>

    <table width="1000" align="center">
		<tr>
        	<td width="95">Nama</td>
            <td width="5">:</td>
			<td width="300"></td>
            <td width="200"></td>
            <td width="95">Nama</td>
            <td width="5">:</td>
            <td width="300"></td>
  		</tr>
  		<tr>
            <td width="95">NIP</td>
            <td width="5">:</td>
			<td width="300"></td>
            <td width="200"></td>
            <td width="95">NIP</td>
            <td width="5">:</td>
            <td width="300"></td>
		</tr>
  		<tr>
            <td width="95">No. HP</td>
            <td width="5">:</td>
			<td width="300"></td>
            <td width="200"></td>
            <td width="95">No.HP</td>
            <td width="5">:</td>
            <td width="300"></td>
		</tr>
	</table><br>
    <br>
    <table  align="center">
    <tr>
    
    <td><a href="{{route('signpadprod.save')}}" type="button" class="btn btn-secondary">TandaTangan Produsen</a> </td>
    <td width="500"></td> 
    <td><a href="{{route('signpad.save')}}" type="button" class="btn btn-warning">TandaTangan Walidata</a></td>
    </tr>
    </table>   
    <table  align="right">
    <td><a href="{{route('ba')}}" type="button" class="btn btn-primary">Kembali</a></td> 
    </table>
           
            <script type="text/javasrcipt">
                window.print();
</script>
            
</html>
@endsection