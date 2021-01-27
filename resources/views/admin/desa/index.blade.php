@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            Data Desa
            <a href="{{route('desa.create')}}" class="btn btn-primary float-right">
            Tambah Data</a>
            
            </a>
        </div>
        <div class="card-body">
         <div class="table">
          <table class="table-responsive">
            <table class="table">       
<tr>
<th>No</th>
<th>Nama Desa</th>
<th>Nama Kecamatan</th>
<th>Aksi</th>
</tr>
@php $no=1; @endphp
@foreach($desa as $data)
<form action="{{route('desa.destroy',$data->id)}}" method="post">
@method('delete')
@csrf
</tr>
<td>{{$no++}}</td>
<td>{{$data->nama_desa}}</td>
<td>{{$data->kecamatan->nama_kecamatan}}</td>
<td>
<a href="{{route('desa.edit',$data->id)}}" class="btn btn-success">Edit</a>
<a href="{{route('desa.show',$data->id)}}" class="btn btn-success">Show</a>
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