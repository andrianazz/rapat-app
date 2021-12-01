@extends('layouts.main')

@section('content')

<!-- Table -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="h2 font-weight-bold">List Rapat Selesai</h2>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Jenis Rapat</th>
                                <th>Tgl Rapat</th>
                                <th>Nama Rapat</th>
                                <th>Pengisi Rapat</th>
                                <th>Mulai</th>
                                <th>Ruangan</th>
                                <th>Notulen</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $row->meeting_type->jenis }}</td>
                                <td>{{ strftime('%d-%B-%Y', strtotime($row->rapat_mulai)) }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->pengisi }}</td>
                                <td>{{ strftime('%H:%M', strtotime($row->rapat_mulai)) }} WIB</td>
                                <td>{{ $row->room->nama }}</td>
                                <td class="text-center">
                                    <a href="/notulenSelesai/{{ $row->id }}/edit" class="btn btn-info font-weight-bold"> <i class="fas fa-edit"> Notulen</i> </a>
                                </td>
                                <td class="text-center">
                                    <a href="/detail-selesai/{{ $row->id }}" class="btn btn-secondary "> <i class="fa fa-eye"> Deskripsi</i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection