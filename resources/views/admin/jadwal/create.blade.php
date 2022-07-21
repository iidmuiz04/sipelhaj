@extends('adminlte::page')
@section('title', 'Tambah Kegiatan')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Kegiatan</h1>
@stop
@section('content')
    <form action="{{route('jadwal.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Tanggal Miladiyah</label>
                        <input type="text" class="form-control" id="" placeholder="Tanggal Miladiyah" name="tgl_miladiyah" value="{{old('tgl_miladiyah')}}">
                    </div>
                    <div class="form-group">
                        <label for="huriyah">Tanggal Huriyah</label>
                        <input type="text" class="form-control @error('tgl_huriyah') is-invalid @enderror" id="exampleInputtgl_huriyah" placeholder="Masukkan Nama lengkap" name="tgl_huriyah" value="{{old('tgl_huriyah')}}">
                        @error('tgl_huriyah') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="keg">Kegiatan</label>
                        <input type="text" class="form-control @error('kegiatan') is-invalid @enderror" id="exampleInputkegiatan" placeholder="Masukkan Kegiatan" name="kegiatan" value="{{old('kegiatan')}}">
                        @error('kegiatan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tempat">waktu</label>
                        <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="exampleInputwaktu" placeholder="Masukkan waktu Anda" name="waktu" value="{{old('waktu')}}">
                        @error('waktu') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNo">Tempat</label>
                        <input type="text" class="form-control @error('waktu') is-invalid @enderror" id="exampleInputwaktu" placeholder="Masukkan No Telp" name="waktu" value="{{old('waktu')}}">
                        @error('waktu') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputKet">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="exampleInputketerangan" placeholder="Masukan Keterangan" name="keterangan" value="{{old('keterangan')}}">
                        @error('keterangan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('jadwal.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop