@extends('adminlte::page')
@section('title', 'Edit Jamaah')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Jamaah</h1>
@stop
@section('content')
    <form action="{{route('jamaah.update', $jamaah)}}" method="post">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputTgl">Tanggal Daftar</label>
                        <input type="date" class="form-control @error('tgl_daftar') is-invalid @enderror" id="exampleTglDaftar" placeholder="Tanggal daftar" name="tgl_daftar" value="{{$jamaah->tgl_daftar ?? old('tgl_daftar')}}">
                        @error('tgl_daftar') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="exampleInputNama" placeholder="Masukkan Nama" name="nama_lengkap" value="{{$jamaah->nama_lengkap ?? old('nama_lengkap')}}">
                        @error('nama_lengkap') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTgllahir">Tanggal Lahir</label>
                        <input type="text" class="form-control @error('tgl_lahir') is-invalid @enderror" id="exampleInputTgl" placeholder="Masukkan Tanggal" name="tgl_lahir" value="{{$jamaah->tgl_lahir ?? old('tgl_lahir')}}">
                        @error('tgl_lahir') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAlamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputAlamat" placeholder="Masukkan Alamat" name="alamat" value="{{$jamaah->alamat ?? old('alamat')}}">
                        @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNo">No telp</label>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="exampleInputNo" placeholder="Masukkan No" name="no_telp" value="{{$jamaah->no_telp ?? old('no_telp')}}">
                        @error('no_telp') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputKet">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="exampleInputNama" placeholder="Masukkan Nama" name="keterangan" value="{{$jamaah->keterangan ?? old('keterangan')}}">
                        @error('keterangan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('jamaah.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop