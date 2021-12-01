@extends('layouts.main')

@section('content')

<!-- Table -->
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-header">
                    <form action="{{ url('add-ruangan') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="jenisRapat">Ruangan</label>
                                    <input type="text" class="form-control" id="jenisRapat" name="nama">
                                    @error('nama')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="jenisRapat">Lokasi</label>
                                    <input type="text" class="form-control" id="jenisRapat" name="deskripsi">
                                    @error('deskripsi')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2 mt-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> Tambah Ruangan </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Ruangan</th>
                                <th>Deskripsi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->deskripsi }}
                                <td class="text-center">
                                    <a type="button" class="btn btn-danger px-5 delete-ruangan" data-id="{{ $row->id }}" data-name="{{ $row->jenis }}"> <i class="fa fa-edit"> Hapus</i></a>
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