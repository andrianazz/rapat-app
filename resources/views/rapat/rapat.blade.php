@extends('layouts.main')

@section('content')

<!-- Table -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="h2 font-weight-bold">List Rapat</h2>
                    <a href="/tambah-rapat" class="btn btn-primary px-5"><i class="fas fa-plus-square"> Tambah Rapat</i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Rapat</th>
                                <th>Tgl Rapat</th>
                                <th>Nama Rapat</th>
                                <th>Pengisi Rapat</th>
                                <th>Mulai</th>
                                <th>Ruangan</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Peserta</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            $no = 0;

                            @endphp
                            @foreach ($data as $row)

                            <tr>
                                <td>{{ $no += 1 }}</td>
                                <td>{{ $row->meeting_type->jenis }}</td>
                                <td>{{ strftime('%d-%B-%Y', strtotime($row->rapat_mulai)) }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->pengisi }}</td>
                                <td>{{ strftime('%H:%M', strtotime($row->rapat_mulai)) }} WIB</td>
                                <td>{{ $row->room->nama }}</td>
                                <td class="text-center">
                                    <button disabled class="btn {{ $row->status === 'Proses' ? 'btn-outline-warning' : ($row->status === 'Pending' ? 'btn-outline-info' : 'btn-outline-success') }}  font-weight-bold"> {{ $row->status }}</button>
                                </td>
                                <td class=" text-center">
                                    <a href="/edit-rapat/{{ $row->id }}" class="btn btn-info font-weight-bold">Edit</a>
                                </td>
                                <td class="text-center">
                                    <a href="/detail-peserta/{{ $row->id }}" class="btn btn-secondary "> <i class="fa fa-user-edit"> Peserta</i></a>
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

<!-- Modal Edit Rapat-->
<div class="modal fade" id="modal-edit-rapat">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Rapat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Jenis Rapat</label>
                            <select class="form-control select2" data-placeholder="Pilih Jenis Rapat" style="width: 100%;">
                                <option selected>Rapat HRD</option>
                                <option>Rapat Tinggi Manajemen</option>
                                <option>Rapat Keuangan</option>
                                <option>Rapat Pemasaran</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenisRapat">Kode Rapat</label>
                            <input type="text" class="form-control" id="jenisRapat" value="RAP/004/004" disabled>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tgl Rapat Mulai :</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="datetime-local" class="form-control " data-target="#reservationdate">
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tgl Rapat Selesai :</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="datetime-local" class="form-control " data-target="#reservationdate">
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenisRapat">Nama Rapat</label>
                            <input type="text" class="form-control" id="jenisRapat" value="Rapat Perekrutan Karyawan Baru">
                        </div>
                        <div class="form-group">
                            <label for="jenisRapat">Pengisi Rapat</label>
                            <input type="text" class="form-control" id="jenisRapat" value="Wirasatria Putra">
                        </div>
                        <div class="form-group">
                            <label>Tema Rapat</label>
                            <textarea class="form-control text-left" rows="3">Bagaimana Merekrut karyawan dan melihat skill calon karyawan baru
                            </textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary swalAddRapatSuccess" data-dismiss="modal">Simpan Perubahan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Ubah Status Rapat-->
<div class="modal fade" id="modal-status-rapat">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Status Rapat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="jenisRapat">Kode Rapat</label>
                            <input type="text" class="form-control" id="jenisRapat" value="RAP/002/004" disabled>
                        </div>
                        <div class="form-group">
                            <label for="jenisRapat">Nama Rapat</label>
                            <input type="text" class="form-control" id="jenisRapat" value="Rapat Perekrutan Karyawan Baru" disabled>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" id="radio2" type="radio" name="radio1" value="Pending">
                                <label class="form-check-label h6" for="radio2">Pending</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="radio1" type="radio" name="radio1" checked width="200px" value="Proses">
                                <label class="form-check-label h6" for="radio1">Proses</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="radio2" type="radio" name="radio1" value="Selesai">
                                <label class="form-check-label h6" for="radio2">Selesai</label>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary swalEditStatusSuccess" data-dismiss="modal">Simpan Perubahan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection