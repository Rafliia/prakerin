@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            Data Kecamatan
            <a href="{{route('kecamatan.create')}}" class="btn btn-primary float-right">
            Tambah Data</a>
            
            </a>
        </div>
        <div class="card-body">
         <div class="table">
          <table class="table-responsive">
            <table class="table">       
<tr>
<th>No</th>
<th>Nama Kecamatan</th>
<th>Nama Kota</th>
<th>Aksi</th>
</tr>
@php $no=1; @endphp
@foreach($kecamatan as $data)
<form action="{{route('kecamatan.destroy',$data->id)}}" method="post">
@method('delete')
@csrf
</tr>
<td>{{$no++}}</td>
<td>{{$data->nama_kecamatan}}</td>
<td>{{$data->kota->nama_kota}}</td>
<td>
<a href="{{route('kecamatan.edit',$data->id)}}" class="btn btn-success">Edit</a>
<a href="{{route('kecamatan.show',$data->id)}}" class="btn btn-success">Show</a>
<button type="submit" onclick="return confirm('Apakah Anda Yakin?');" class="btn btn-danger">Delete</button>
</form>
</tr>
@endforeach
</table>
</div>  
</div>
</div>
</div>
</div>
</div>
@endsection