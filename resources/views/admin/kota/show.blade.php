@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Kota</div>
                <div class="card-body">
                    <div class="form-group">
                    <label>Kode Kota</label>
                    <input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                    <label>Nama Kota</label>
                    <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                    <label>Nama Provinsi</label>
                    <input type="text" name="id_provinsi" value="{{$kota->provinsi->nama_provinsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
