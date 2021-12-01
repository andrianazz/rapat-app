@extends('layouts.main')
@section('content')


<!-- Main content -->
<div class="content">
    <div class="container-fluid bg-light p-2 mb-3">
        <div class="row">
            <div class="col-sm-7 pt-1 pl-1 h4">
                Selamat Datang, <strong>ADMIN</strong>
            </div>
            <!-- <div class="col-sm-5 text-right">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-edit-profile">
                    Edit Profil
                </button>
            </div> -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $data->count() }}</h3>

                    <p>Semua Rapat</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3> {{ $data->where('status', '=','Proses')->count() }} </h3>

                    <p>Rapat Proses</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-clock"></i>
                </div>
                <a href="/rapat-berjalan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $data->where('status', '=','Selesai')->count() }}</h3>

                    <p>Rapat Selesai</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <a href="/rapat-selesai" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

    <!-- Table -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="h2 font-weight-bold">List Rapat Minggu ini</h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Rapat</th>
                                    <th>Tgl Rapat</th>
                                    <th>Nama Rapat</th>
                                    <th>Tempat</th>
                                    <th>Mulai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 0;
                                @endphp

                                @foreach ($data as $row)
                                <tr>
                                    <td>{{ $no +=1 }}</td>
                                    <td>{{ $row->meeting_type->jenis }}</td>
                                    <td>{{ strftime('%d-%B-%Y', strtotime($row->rapat_mulai)) }} WIB
                                    </td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->room->nama }}</td>
                                    <td>{{ strftime('%H:%M', strtotime($row->rapat_mulai)) }} WIB</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->



<!-- Modal edit profil-->
<div class="modal fade" id="modal-edit-profile">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Profile</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputNama" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password1" class="col-sm-2 col-form-label">Password Lama</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password1" placeholder="Password Lama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password2" class="col-sm-2 col-form-label">Password Lama</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password2" placeholder="Password Baru">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password3" class="col-sm-2 col-form-label">Konfirmasi Password Baru</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password3" placeholder="Konfirmasi Password Baru">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-2">
                                <img src="dist/img/user2-160x160.jpg" alt="" width="100px">
                            </div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary swalProfileSuccess" data-dismiss="modal">Simpan Perubahan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection