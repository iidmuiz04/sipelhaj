<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                    <form action="{{route('hau.store')}}" method="post">
                    @csrf

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
                    <a href="{{route('hau.create')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
</body>
</html>