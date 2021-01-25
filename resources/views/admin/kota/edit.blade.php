@extends('layouts.admin')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
Tambah Data Kota
</div>
<div class="card-body">
<form action="{{route('kota.update',$provinsi->id)}}" method="post">
@method('put')
@csrf
<div class="form-group">
<label for="">Kode Kota</label>
<input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" required>
</div>
<div class="form-group">
<label for="">Nama Kota</label>
<input type="text" name="nama_kota" value="{{$provinsi->nama_kota}}" class="form-control" required>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-block">Simpan</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection