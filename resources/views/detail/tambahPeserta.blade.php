@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <form method="POST" action="/add-peserta">
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
                        <input type="hidden" name="conference_id" value="{{ $conference_id }}">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambahkan Peserta</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection