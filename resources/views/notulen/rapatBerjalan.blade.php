@extends('layouts.main')

@section('content')

<!-- Table -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="h2 font-weight-bold">List Rapat Berlangsung</h2>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Jenis Rapat</th>
                                <th>Tgl Rapat</th>
                                <th>Nama Rapat</th>
                                <th>Pengisi Rapat</th>
                                <th>Mulai</th>
                                <th>Ruangan</th>
                                <th>Notulen</th>
                                <th>View</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 0;
                            @endphp
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $no+=1 }}</td>
                                <td>{{ $row->meeting_type->jenis }}</td>
                                <td>{{ strftime('%d-%B-%Y', strtotime($row->rapat_mulai)) }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->pengisi }}</td>
                                <td>{{ strftime('%H:%M', strtotime($row->rapat_mulai)) }} WIB</td>
                                <td>{{ $row->room->nama }}</td>
                                <td class="text-center">
                                    <a href="/notulen/{{ $row->id }}" class="btn btn-info font-weight-bold"> <i class="fas fa-edit"> Notulen</i> </a>
                                </td>
                                <td class="text-center">
                                    <a href="/detail-rapat/{{ $row->id }}" class="btn btn-secondary "> <i class="fa fa-eye"> Deskripsi</i></button>
                                </td>
                                <form action="/done-rapat/{{ $row->id }}" method="post">
                                    @csrf
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-success "> <i class="fa fa-check"> Done</i></button>
                                    </td>
                                </form>
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