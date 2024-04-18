@extends('layouts.app')
  
  
@section('contents')
<div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Berita Acara</h1>
        <a href="{{route('ba.create')}}" class="btn btn-primary">+ Tambah Berita Acara</a>
</div>
<hr/>
<table align="left">
<tr>
    <td height="10"></td>
    
</tr>
</table>

@if(Session::has('success'))
<div class="alert alert-success" roles="alert">
{{Session::get('success')}}
</div>
@endif 
<div class="my-3">
    <form action="" method="get">
        <div class="input-group mb-3 col-12 col-md-8    ">
            <input name="keyword" type="text" class="form-control" placeholder="Masukan kata kunci">
            <button class="input-group-text btn btn-primary">Cari</button>
            <a href="{{route('ba')}}" type="button" class="input-group-text btn btn-danger">Reset</a>
</div>
</form>
</div>
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th width="1000">Instansi</th>
            <th>Tanggal BA</th>
            <th>Tahun</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($bas->count() > 0)
        @foreach($bas as $bas)
        <tr>
            <input type="hidden" class="delete_id" value="{{$bas->id}}">
            <td class="align-middle">{{$loop->iteration}}</td>
            <td class="align-middle">{{$bas->instansi}}</td>
            <td class="align-middle">{{\Carbon\Carbon::parse($bas->tanggal_ba)->translatedFormat('l, d F Y')}}</td>
            <td class="align-middle">{{$bas->tahun}}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('ba.edit', $bas->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <a href="{{route('ba.show', $bas->id)}}" type="button" class="btn btn-success">View</a>
                    <form action ="{{route('ba.destroy', $bas->id)}}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger m-0"> Hapus</button>
                </form>
                    <a href="{{route('ba.show', $bas->id)}}" target="_blank" type="button" class="btn btn-primary">Cetak</a>
               </div>
            </td>
        </tr>
        @endforeach
        @else
            <tr>
                <td class="text-center"colspan="5">Berita Acara Belum Ada</td>
</tr>
        @endif
        
    </tbody>
</table>
@endsection