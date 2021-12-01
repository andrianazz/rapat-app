@extends('layouts.main')

@section('content')
<a href="/rapat-selesai" class="btn btn-outline-danger ml-2"><i class="fas fa-arrow-left"> Kembali </i></a>
<div class="content mt-5">
    <div class="container-fluid bg-white p-4">
        <div class="row justify-content-between">
            <i class="fas fa-users" style="font-size: 30px;">
                {{ $data->meeting_type->jenis }}
            </i>
            <h5>Tanggal : {{ strftime('%d-%B-%Y', strtotime($data->rapat_mulai)) }}</h5>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <h6> <strong>No. Rapat : {{ $data->kode_rapat }}</strong> </h6>
                <h6>{{ $data->nama }}</h6>
                <h6>Pengisi : {{ $data->pengisi }}</h6>
            </div>
            <div class="col-md-4">
                <h6><strong>Waktu Acara</strong></h6>
                <h6>Mulai : {{ strftime('%H:%M', strtotime($data->rapat_mulai)) }}</h6>
                <h6>Selesai : {{ strftime('%H:%M', strtotime($data->rapat_selesai)) }}</h6>
            </div>
            <div class="col-md-4">
                <h6><strong>Status Acara</strong></h6>
                <h6>{{ $data->status }}</h6>
            </div>
        </div>

        <h4 class="font-weight-bold mt-5">Dokumentasi :</h4>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card border border-info">
                    <div class="card-body">

                        @if ($document->count() >= 1)
                        <div class="row">
                            @foreach ($document as $image)
                            <div class="col-md-2 text-center">
                                <img src="{{ asset('dokumentasi/'.$data->kode_rapat.'/'.$image->foto) }}" alt="" width="200" height="150">
                            </div>
                            @endforeach
                        </div>
                        @else
                        <p class="text-secondary text-center">Tidak ada Dokumentasi</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>

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
                                        <th>Nama Peserta</th>
                                        <th>No. Hp</th>
                                        <th>Divisi</th>
                                        <th>Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $row)
                                    <tr>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->nohp }}
                                        </td>
                                        <td>{{ $row->divisi }}</td>
                                        <td>{{ $row->jabatan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-5 text-right">
                                <a href="/dokumentasi/{{ $data->id }}" class="btn btn-outline-primary"> <i class="fas fa-print"> Cetak Dokumentasi</i> </a>
                                <a href="/hadir/{{ $data->id }}" class="btn btn-outline-primary"> <i class="fas fa-print"> Cetak Peserta</i> </a>
                                <a href="/cetak-notulen/{{ $data->id }}" class="btn btn-outline-primary"> <i class="fas fa-print"> Cetak Notulen</i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection