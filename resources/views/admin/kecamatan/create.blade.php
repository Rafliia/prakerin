@extends('layouts.admin')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
Tambah Data Kecamatan
</div>
<div class="card-body">
<form action="{{route('kecamatan.store')}}" method="post">
@csrf
<div class="form group">
<label for="">Pilih Kota</label>
<select name="id_kota" class="form-control">
@foreach($kota as $data)
<option value="{{$data->id}}">{{$data->nama_kota}}</option>
@endforeach
</select>
</div>
<div class="form-group">
<label for="">Nama Kecamatan</label>
<input type="text" name="nama_kecamatan" class="form-control" required>
@if($errors->has('nama_kecamatan'))
<span class="text-danger">{{$errors->first('nama_kecamatan')}}</span>
@endif
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