@php
setlocale(LC_ALL, 'IND');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <title>Cetak Kehadiran</title>

    <style>
        .top-table {
            background-color: #D9D9D9;
        }

        .paraf {
            opacity: 0.3;
        }

        .deskripsi {
            vertical-align: top;
        }
    </style>
</head>

<body>
    <div class="container">
        <table width='100%'>
            <tr>
                <th width='4.42%'></th>
                <th width='16.12%'></th>
                <th width='0.82%'></th>
                <th width='15.38%'></th>
                <th width='30.45%'></th>
                <th width='17.70%'></th>
                <th width='15.07%'></th>
            </tr>
            <tr>
                <td rowspan="3" colspan="2"><img src="{{ asset('dist/img/riau.png') }}" alt="" srcset="" width="80"></td>
                <td class="h1 font-weight-bold text-center" colspan="5">PEMERINTAH PROVINSI RIAU</td>
            </tr>
            <tr height='39px'>
                <td colspan="7"></td>
            </tr>
            <tr>
                <td class="h2 font-weight-bold text-center" colspan="5">DAFTAR HADIR</td>
            </tr>
            <tr height='41px'>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" class="h4 font-weight-bold ">Hari / Tanggal</td>
                <td class="h4 font-weight-bold ">:</td>

                <td colspan="4" class="h4 font-weight-bold pl-2">{{ strftime('%A', strtotime($data->rapat_mulai)) }}, {{ strftime('%d %B %Y', strtotime($data->rapat_mulai)) }}</td>
            </tr>
            <tr>
                <td colspan="2" class="h4 font-weight-bold ">Waktu</td>
                <td class="h4 font-weight-bold ">:</td>
                <td colspan="4" class="h4 font-weight-bold pl-2">{{ strftime('%H:%M', strtotime($data->rapat_mulai)) }} WIB</td>
            </tr>
            <tr>
                <td colspan="2" class="h4 font-weight-bold deskripsi">Tempat</td>
                <td class="h4 font-weight-bold deskripsi">:</td>
                <td colspan="4" class="h4 font-weight-bold pl-2">{{ $data->room->deskripsi }}</td>
            </tr>
            <tr height='29px'>
                <td colspan="7"></td>
            </tr>
            <tr heigth='83px' class="deskripsi">
                <td colspan="2" class="h4 font-weight-bold deskripsi">Agenda/Acara</td>
                <td class="h4 font-weight-bold deskripsi">:</td>
                <td colspan="4" class="h4 font-weight-bold pl-2 deskripsi">{{ $data->tema }}</td>
            </tr>
            <table border="1" class="mt-3">
                <tr>
                    <th width='4.42%'></th>
                    <th width='16.12%'></th>
                    <th width='0.82%'></th>
                    <th width='15.38%'></th>
                    <th width='30.45%'></th>
                    <th width='17.70%'></th>
                    <th width='15.07%'></th>
                </tr>
                <tr class="text-center top-table border-secondary">
                    <td class="h4 font-weight-bold ">NO</td>
                    <td colspan="3" class="h4 font-weight-bold ">NAMA</td>
                    <td class="h4 font-weight-bold ">JABATAN</td>
                    <td class="h4 font-weight-bold ">NO.HP / WA</td>
                    <td class="h4 font-weight-bold ">PARAF / TTD</td>
                </tr>
                <tr class="text-center top-table border-secondary">
                    <td>1</td>
                    <td colspan="3">2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                </tr>
                @php
                $no=0;
                @endphp
                @foreach ($peserta as $row)
                <tr height='96px'>
                    <td class="h5 font-weight-normal text-center">{{ $no +=1 }}. </td>
                    <td colspan="3" class="h5 font-weight-normal px-2">{{ strtoupper($row->nama) }}</td>
                    <td class="h5 font-weight-normal px-2">{{ strtoupper($row->jabatan) . " ". strtoupper($row->divisi) }}</td>
                    <td class="h5 font-weight-normal px-2">{{ ($row->nohp) }}</td>
                    <td class="h5 font-weight-normal text-grey paraf px-2">{{$no }}. </td>
                </tr>
                @endforeach

                <!-- //Mentahan
                <tr height='96px'>
                    <td class="h4 text-center">1</td>
                    <td colspan="3" class="h4">H. SYAMSUAR, M.Si</td>
                    <td class="h4">GUBERNUR RIAU</td>
                    <td class="h4">0812xxxxxx</td>
                    <td class="h4 text-grey paraf">1.</td>
                </tr> -->
            </table>

        </table>
    </div>

</body>

</html>