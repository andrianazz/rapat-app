@extends('layouts.main')

@section('content')
<a href="/rapat" class="btn btn-outline-danger ml-2"><i class="fas fa-arrow-left"> Kembali </i></a>
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
        <div class="row mt-4">
            <a href="/tambah-peserta/{{ $data->id }}" class="btn btn-secondary mr-2 my-auto"> <i class="fas fa-user-plus"></i> Tambah Peserta</a>
            <form action="/add-foto" method="post" enctype="multipart/form-data">
                @csrf
                <div class="btn btn-secondary">
                    <input type="file" name="foto" id="unggahFoto">
                    <!-- <label for="unggahFoto" class="btn btn-light my-0"> <i class="fas fa-upload"></i> Unggah Foto</label> -->
                    <input type="hidden" name="kode" value="{{ $data->kode_rapat }}">
                    <input type="hidden" name="conference_id" value="{{ $data->id }}">
                    <button type="submit" class="btn btn-light ml-5">Kirim Foto</button>
                </div>
            </form>

        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card border border-info">
                    <div class="card-body">
                        @if ($document->count() >= 1)
                        <div class="row">
                            @foreach ($document as $image)
                            <div class="col-md-2 text-center">
                                <img src="{{ asset('dokumentasi/'.$data->kode_rapat.'/'.$image->foto) }}" alt="" width="200" height="150">
                                <hr>
                                <form action="/delete-foto/{{ $image->id }}" method="post">
                                    @csrf
                                    <input type="hidden" name="kode" value="{{ $data->kode_rapat }}">
                                    <input type="hidden" name="conference_id" value="{{ $image->conference_id }}">
                                    <button type="submit" class="btn btn-outline-danger text-center">Hapus</button>
                                </form>
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
                            <h2 class="h2 font-weight-bold">List Peserta Rapat</h2>
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
                                        <th>Aksi</th>
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
                                        <td class="text-center">
                                            <form action="/delete-peserta/{{ $row->id }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $row->conference_id }}">
                                                <button type="submit" class="btn btn-danger font-weight-bold delete" data-id='{{ $row->id }}' data-name='{{ $row->nama }}'> <i class="fas fa-user-slash"></i> Hapus</button>
                                            </form>
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
    </div>
</div>


@endsection