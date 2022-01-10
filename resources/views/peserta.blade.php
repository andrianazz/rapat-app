@extends('layouts.main')

@section('content')

<!-- Table -->
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-header">
                    <form method="POST" action="/add-people">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="jenisRapat">Nama Peserta</label>
                                <input type="text" class="form-control" id="jenisRapat" name="nama">
                                <p>* Wajib diisi</p>
                                @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenisRapat">No. Hp</label>
                                <input type="text" class="form-control" id="jenisRapat" name="nohp">
                            </div>
                            <div class="form-group">
                                <label for="jenisRapat">Divisi / Departemen</label>
                                <input type="text" class="form-control" id="jenisRapat" name="divisi">
                            </div>
                            <div class="form-group">
                                <label for="jenisRapat">Jabatan</label>
                                <input type="text" class="form-control" id="jenisRapat" name="jabatan">
                                <p>* Wajib diisi</p>
                                @error('jabatan')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambahkan Peserta</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>No. Hp</th>
                                <th>Jabatan</th>
                                <th>Divisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->nohp }}
                                <td>{{ $row->jabatan }}
                                <td>{{ $row->divisi }}
                                <td class="text-center">
                                    <form action="/delete-people/{{$row->id}}" method="post">
                                        @csrf
                                        <!-- <a type="button" class="btn btn-danger px-5" data-id="{{ $row->id }}" data-name="{{ $row->nama }}"> <i class="fa fa-edit"> Hapus</i></a> -->
                                        <button type="submit" class="btn btn-danger px-5"><i class="fa fa-edit"> Hapus</i></button>
                                    </form>
                                </td>
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


@endsection