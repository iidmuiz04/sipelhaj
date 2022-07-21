@extends('adminlte::page')
@section('title', 'Tambah Berkas')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Berkas</h1>
@stop
@section('content')
    <form action="{{route('pemberkasan.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="Masukkan Nama lengkap" name="nama_lengkap" value="{{old('nama_lengkap')}}">
                        @error('nama_lengkap') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="kk">Kartu Keluarga</label>
                        <input type="file" class="form-control @error('kk') is-invalid @enderror" name="kk" value="{{old('kk')}}">
                        @error('kk') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="akta_kelahiran">Akta Kelahiran</label>
                        <input type="file" class="form-control @error('kakta_kelahirank') is-invalid @enderror" name="akta_kelahiran" value="{{old('akta_kelahiran')}}">
                        @error('akta_kelahiran') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="ktp">KTP</label>
                        <input type="file" class="form-control @error('ktp') is-invalid @enderror" name="ktp" value="{{old('ktp')}}">
                        @error('ktp') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto_a">Foto 2x3</label>
                        <input type="file" class="form-control @error('foto_a') is-invalid @enderror" name="foto_a" value="{{old('foto_a')}}">
                        @error('foto_a') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto_b">Foto 3x4</label>
                        <input type="file" class="form-control @error('foto_b') is-invalid @enderror" name="foto_b" value="{{old('foto_b')}}">
                        @error('foto_b') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto_c">Foto 4x6</label>
                        <input type="file" class="form-control @error('foto_c') is-invalid @enderror" name="foto_c" value="{{old('foto_c')}}">
                        @error('foto_c') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="btl_norek">Buku Tabungan Lembar No Rekening</label>
                        <input type="file" class="form-control @error('btl_norek') is-invalid @enderror" name="btl_norek" value="{{old('btl_norek')}}">
                        @error('btl_norek') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="btl_nominal">Buku Tabungan Lembar Nominal</label>
                        <input type="file" class="form-control @error('btl_nominal') is-invalid @enderror" name="btl_nominal" value="{{old('btl_nominal')}}">
                        @error('btl_nominal') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="domisili">Domisili</label>
                        <input type="file" class="form-control @error('domisili') is-invalid @enderror" name="domisili" value="{{old('domisili')}}">
                        @error('domisili') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('pemberkasan.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop