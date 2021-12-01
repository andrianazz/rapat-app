@extends('layouts.main')

@section('content')

<!-- Table -->
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-header">
                    <form action="{{ url('add-jenis-rapat') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="jenisRapat">Jenis Rapat</label>
                                    <input type="text" class="form-control" id="jenisRapat" name="jenis">
                                    @error('jenis')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2 mt-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> Tambah Jenis Rapat </button>
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
                                <th>Jenis Rapat</th>
                                <th>Dibuat</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $row->jenis }}</td>
                                <td>{{ $row->created_at->diffForhumans() }}
                                </td>
                                <td>{{ $row->status }}</td>
                                <td class="text-center">
                                    <a type="button" class="btn btn-danger px-5 delete" data-id="{{ $row->id }}" data-name="{{ $row->jenis }}"> <i class="fa fa-edit"> Hapus</i></a>
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

<!-- Modal hapus Jenis Rapat-->
<div class="modal fade" id="modal-hapus-jenis">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Jenis Rapat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h5>Apakah kamu yakin ingin menghapus</h5>
                <h5><strong>Rapat HRD ?</strong></h5>
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary swalHapusJenisSuccess" data-dismiss="modal">Simpan Perubahan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection