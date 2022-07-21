@extends('adminlte::page')
@section('title', 'Pemberkasan')
@section('content_header')
    <h1 class="m-0 text-dark">Pemberkasan</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('pemberkasan.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Kartu Keluarga</th>
                            <th>Akta Kelahiran</th>
                            <th>KTP</th>
                            <th>Foto2x3</th>
                            <th>Foto3x4</th>
                            <th>Foto4x6</th>
                            <th>BTL Norek</th>
                            <th>BTL Norek</th>
                            <th>Domisili</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pemberkasan as $key => $berkas)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$berkas->nama_lengkap}}</td>
                                <td>
                                    <a href="{{ asset('img/'. $berkas->kk ) }}" target="_blank" rel="noopener noreferrer">Lihat</a>
                                </td>
                                <td>
                                    <a href="{{ asset('img/'. $berkas->akta_kelahiran ) }}" target="_blank" rel="noopener noreferrer">Lihat</a>
                                </td>
                                <td>
                                    <a href="{{ asset('img/'. $berkas->ktp ) }}" target="_blank" rel="noopener noreferrer">Lihat</a>
                                </td>
                                <td>
                                    <a href="{{ asset('img/'. $berkas->foto_a ) }}" target="_blank" rel="noopener noreferrer">Lihat</a>
                                </td>
                                <td>
                                    <a href="{{ asset('img/'. $berkas->foto_b ) }}" target="_blank" rel="noopener noreferrer">Lihat</a>
                                </td>
                                <td>
                                    <a href="{{ asset('img/'. $berkas->foto_c ) }}" target="_blank" rel="noopener noreferrer">Lihat</a>
                                </td>
                                <td>
                                    <a href="{{ asset('img/'. $berkas->btl_norek ) }}" target="_blank" rel="noopener noreferrer">Lihat</a>
                                </td>
                                <td>
                                    <a href="{{ asset('img/'. $berkas->btl_nominal ) }}" target="_blank" rel="noopener noreferrer">Lihat</a>
                                </td>
                                <td>
                                    <a href="{{ asset('img/'. $berkas->domisili ) }}" target="_blank" rel="noopener noreferrer">Lihat</a>
                                </td>
                                <td>
                                    <a href="{{route('pemberkasan.destroy', $berkas)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush