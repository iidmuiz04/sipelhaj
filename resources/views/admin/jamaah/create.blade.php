@extends('adminlte::page')
@section('title', 'Tambah User')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah User</h1>
@stop
@section('content')
    <form action="{{route('jamaah.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Tanggal Daftar</label>
                        <input type="date" class="form-control" id="" placeholder="Tanggal Daftar" tgl_daftar="tgl_daftar" name="tgl_daftar" value="{{old('tgl_daftar')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="exampleInputnama_lengkap" placeholder="Masukkan Nama lengkap" name="nama_lengkap" value="{{old('nama_lengkap')}}">
                        @error('nama_lengkap') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTgll">Tanggal Lahir</label>
                        <input type="text" class="form-control @error('tgl_lahir') is-invalid @enderror" id="exampleInputtgl_lahir" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir" value="{{old('tgl_lahir')}}">
                        @error('tgl_lahir') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAlamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputalamat" placeholder="Masukkan Alamat Anda" name="alamat" value="{{old('alamat')}}">
                        @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNo">No Telp</label>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="exampleInputno_telp" placeholder="Masukkan No Telp" name="no_telp" value="{{old('no_telp')}}">
                        @error('no_telp') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputKet">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="exampleInputketerangan" placeholder="Masukan Keterangan" name="keterangan" value="{{old('keterangan')}}">
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