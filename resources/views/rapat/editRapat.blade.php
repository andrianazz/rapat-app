@extends('layouts.main')

@section('content')
<a href="/rapat" class="btn btn-outline-danger ml-2"><i class="fas fa-arrow-left"> Kembali </i></a>
<div class="container">
    <div class="row justify-content-around">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/update-rapat/{{ $data->id }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Jenis Rapat</label>
                            <select name="meeting_type_id" class="form-control select2" data-placeholder="Pilih Jenis Rapat" style="width: 100%;">
                                <option selected value="{{ $data->meeting_type_id }}"> ~~ {{ $data->meeting_type->jenis }} ~~ </option>
                                @foreach ($tipe as $row)
                                <option value="{{ $row->id }}"> {{ $row->jenis }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenisRapat">Kode Rapat</label>
                            <input name="kode_rapat" type="text" class="form-control" id="jenisRapat" value="{{ $data->kode_rapat }}">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tgl Rapat Mulai :</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input name="rapat_mulai" type="datetime-local" class="form-control " data-target="#reservationdate" value="{{ strftime('%Y-%m-%dT%H:%M:%S', strtotime($data->rapat_mulai)) }}">
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
                                        <input name="rapat_selesai" type="datetime-local" class="form-control " data-target="#reservationdate" value="{{ strftime('%Y-%m-%dT%H:%M:%S', strtotime($data->rapat_selesai)) }}">
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenisRapat">Nama Rapat</label>
                            <input name="nama" type="text" class="form-control" id="jenisRapat" value="{{ $data->nama }}">
                        </div>
                        <div class="form-group">
                            <label>Ruangan</label>
                            <select name="room_id" class="form-control select2" data-placeholder="Pilih Ruangan" style="width: 100%;">
                                <option selected value="{{ $data->room_id }}"> ~~ {{ $data->room->nama }} ~~ </option>
                                @foreach ($room as $row)
                                <option value="{{ $row->id }}"> {{ $row->nama }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenisRapat">Pengisi Rapat</label>
                            <input name="pengisi" type="text" class="form-control" id="jenisRapat" value="{{ $data->pengisi }}">
                        </div>
                        <div class="form-group">
                            <label>Tema Rapat</label>
                            <textarea name="tema" class="form-control" rows="3">{{ $data->tema }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary font-weight-bold">Update Rapat</button>
                        </div>
                    </form>
                    <form action="/delete-rapat/{{ $data->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger font-weight-bold " data-id="{{ $data->id }}" data-name="{{ $data->name }}">Hapus Rapat</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

@endsection