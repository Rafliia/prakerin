@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            Data Desa
            <a href="{{route('rw.create')}}" class="btn btn-primary float-right">
            Tambah RW</a>
            
            </a>
        </div>
        <div class="card-body">
         <div class="table">
          <table class="table-responsive">
            <table class="table">       
<tr>
<th>No</th>
<th>Nama Desa</th>
<th>RW</th>
<th>Aksi</th>
</tr>
@php $no=1; @endphp
@foreach($rw as $data)
<form action="{{route('rw.destroy',$data->id)}}" method="post">
@method('delete')
@csrf
</tr>
<td>{{$no++}}</td>
<td>{{$data->nama_rw}}</td>
<td>{{$data->desa->nama_desa}}</td>
<td>
<a href="{{route('rw.edit',$data->id)}}" class="btn btn-success">Edit</a>
<a href="{{route('rw.show',$data->id)}}" class="btn btn-success">Show</a>
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