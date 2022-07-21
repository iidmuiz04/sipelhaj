@extends('adminlte::page')
@section('title', 'Data Jadwal')
@section('content_header')
    <h1 class="m-0 text-dark">Jadwal Kegiatan</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('jadwal.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Miladiyah</th>
                            <th>Tanggal Huriyah</th>
                            <th>Kegiatan</th>
                            <th>Waktu</th>
                            <th>Tempat</th>
                            <th>Keterangan</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jadwal as $key => $jadwal)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$jadwal->tgl_miladiyah}}</td>
                                <td>{{$jadwal->tgl_huriyah}}</td>
                                <td>{{$jadwal->kegiatan}}</td>                                
                                <td>Jam {{\Carbon\Carbon::parse($jadwal->waktu)->isoFormat('H:ss')}}</td>
                                <td>{{$jadwal->tempat}}</td>
                                <td>{{$jadwal->keterangan}}</td>
                                <td>
                                    <a href="{{route('jadwal.edit', $jadwal)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('jadwal.destroy', $jadwal)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
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