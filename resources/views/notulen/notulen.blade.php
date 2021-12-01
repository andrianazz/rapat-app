@extends('layouts.main')

@section('content')
<a href="/rapat-berjalan" class="btn btn-outline-danger ml-2"><i class="fas fa-arrow-left"> Kembali </i></a>
<div class="container">
    <div class="card">
        <form method="POST" action="/update-notulen" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="jenisRapat">Nama Rapat</label>
                    <input disabled type="text" class="form-control" id="jenisRapat" value="{{ $rapat->conference->nama }}">
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="jenisRapat">Penulis Notulen</label>
                            <input type="text" class="form-control" id="jenisRapat" name="penulis" value="{{ $rapat->penulis }}">
                            @error('penulis')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="jenisRapat">Pimpinan Rapat</label>
                            <input type="text" class="form-control" id="jenisRapat" name="pimpinan" value="{{ $rapat->pimpinan }}">
                            @error('pimpinan')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="jenisRapat">Peserta Rapat</label>
                            <input type="text" class="form-control" id="jenisRapat" name="peserta" value="{{ $rapat->peserta }}">
                            @error('peserta')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenisRapat">Hasil Rapat</label>
                    <textarea id="mytextarea" name="hasil" class="form-control" rows="6">{{ $rapat->hasil }}</textarea>
                    @error('hasil')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <input type="hidden" name="conference_id" value="{{ $rapat->id }}">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Simpan Notulen</button>
                </div>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
</div>
@endsection