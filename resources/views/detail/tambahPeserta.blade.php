@extends('layouts.main')

@section('content')


<div class="row">
    <div class=" col-md-12">
        <div class="card mt-5">
            <form method="POST" action="/add-peserta">
                @csrf
                <div class="card-body">
                    @foreach ($data as $row)
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $row->id }}" name="participant[]">
                            <label class="form-check-label">{{ $row->nama }} - {{ $row->divisi }}</label>
                        </div>
                    </div>
                    @endforeach
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
<div class="container">
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

@endsection