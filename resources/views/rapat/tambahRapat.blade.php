@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-around">
        <div class="col-md-10">
            <div class="card">
                <form method="POST" action="/add-rapat" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Jenis Rapat</label>
                            <select name="meeting_type_id" class="form-control select2" data-placeholder="Pilih Jenis Rapat" style="width: 100%;">
                                @foreach ($tipe as $row)
                                <option value="{{ $row->id }}"> {{ $row->jenis }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenisRapat">Kode Rapat</label>
                            <input name="kode_rapat" type="text" class="form-control" id="jenisRapat" placeholder="Masukan Kode Rapat">
                            @error('kode_rapat')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tgl Rapat Mulai :</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input name="rapat_mulai" type="datetime-local" class="form-control " data-target="#reservationdate">
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    @error('rapat_mulai')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tgl Rapat Selesai :</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input name="rapat_selesai" type="datetime-local" class="form-control " data-target="#reservationdate">
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    @error('rapat_selesai')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenisRapat">Nama Rapat</label>
                            <input name="nama" type="text" class="form-control" id="jenisRapat">
                            @error('nama')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ruangan</label>
                            <select name="room_id" class="form-control select2" data-placeholder="Pilih Jenis Rapat" style="width: 100%;">
                                @foreach ($room as $row)
                                <option value="{{ $row->id }}"> {{ $row->nama }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenisRapat">Pengisi Rapat</label>
                            <input name="pengisi" type="text" class="form-control" id="jenisRapat">
                            @error('pengisi')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tema Rapat</label>
                            <textarea name="tema" class="form-control" rows="3"></textarea>
                            @error('tema')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary font-weight-bold">Tambah Rapat</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection