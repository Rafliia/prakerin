@extends('layouts.admin')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
Edit Data RW
</div>
<div class="card-body">
<form action="{{route('rw.update',$rw->id)}}" method="post">
@method('put')
@csrf
<div class="form-group">
<label for="">Nama RW</label>
<input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" required>
</div>
@csrf
<div class="form group">
<label for="">Pilih Desa</label>
<select name="id_desa" class="form-control">
@foreach($desa as $data)
<option value="{{$data->id}}">{{$data->nama_desa}}</option>
@endforeach
</select>
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