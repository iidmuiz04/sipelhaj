@extends('adminlte::page')
@section('title', 'Edit jadwal')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Jadwal</h1>
@stop
@section('content')
    <form action="{{route('jadwal.update', $jadwal)}}" method="post">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputTgl">Tanggal Miladiyah</label>
                        <input type="text" class="form-control @error('tgl_miladiyah') is-invalid @enderror" id="exampleTglDaftar" placeholder="Tanggal Miladiyah" name="tgl_miladiyah" value="{{$jadwal->tgl_miladiyah ?? old('tgl_miladiyah')}}">
                        @error('tgl_miladiyah') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNatgl">Tanggal Huriyah</label>
                        <input type="text" class="form-control @error('tgl_huriyah') is-invalid @enderror" id="exampleInputNama" placeholder="Tanggal Huriyah" name="tgl_huriyah" value="{{$jadwal->tgl_huriyah ?? old('tgl_huriyah')}}">
                        @error('tgl_huriyah') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputkeg">Kegiatan</label>
                        <input type="text" class="form-control @error('kegiatan') is-invalid @enderror" id="exampleInputTgl" placeholder="Masukkan Kegiatan" name="kegiatan" value="{{$jadwal->kegiatan ?? old('kegiatan')}}">
                        @error('kegiatan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAlamat">Waktu</label>
                        <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="exampleInputwaktu" placeholder="Masukkan waktu" name="waktu" value="{{$jadwal->waktu ?? old('waktu')}}">
                        @error('waktu') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNo">Tempat</label>
                        <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="exampleInputNo" placeholder="Masukkan tempat" name="tempat" value="{{$jadwal->tempat ?? old('tempat')}}">
                        @error('tempat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputKet">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="exampleInputNama" placeholder="Masukkan Nama" name="keterangan" value="{{$jadwal->keterangan ?? old('keterangan')}}">
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