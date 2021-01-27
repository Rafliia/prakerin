@extends('layouts.admin')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
Edit Data Kasus
</div>
<div class="card-body">
<form action="{{route('kasus.update',$kasus->id)}}" method="post">
@method('put')
@csrf
<div class="form-group">
<label for="">Positif</label>
<input type="text" name="positif" value="{{$kasus->positif}}" class="form-control" required>
</div>
<div class="form-group">
<label for="">Sembuh</label>
<input type="text" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" required>
</div>
<div class="form-group">
<label for="">Meninggal</label>
<input type="text" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" required>
</div>
<div class="form-group">
<label for="">Tanggal</label>
<input type="date" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" required>
</div>
@csrf
<div class="form group">
<label for="">Pilih RW</label>
<select name="id_rw" class="form-control">
@foreach($rw as $data)
<option value="{{$data->id}}">{{$data->nama_rw}}</option>
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