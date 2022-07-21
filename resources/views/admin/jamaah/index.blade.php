@extends('adminlte::page')
@section('title', 'Data Jamaah')
@section('content_header')
    <h1 class="m-0 text-dark">Data Jamaah</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('jamaah.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Daftar</th>
                            <th>Nama Lengkap</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                            <th>Keterangan</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jamaah as $key => $jamaah)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{\Carbon\Carbon::parse($jamaah->tgl_daftar)->isoFormat('dddd, D MMMM Y')}}</td>
                                <td>{{$jamaah->nama_lengkap}}</td>
                                <td>{{$jamaah->tgl_lahir}}</td>
                                <td>{{$jamaah->alamat}}</td>
                                <td>{{$jamaah->no_telp}}</td>
                                <td>{{$jamaah->keterangan}}</td>
                                <td>
                                    <a href="{{route('jamaah.edit', $jamaah->id_jamaah)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('jamaah.destroy', $jamaah->id_jamaah)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
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