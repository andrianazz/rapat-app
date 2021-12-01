@php
setlocale(LC_ALL, 'IND');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <style>
        .hasil {
            background-color: #DFE885;
        }
    </style>
    <title>Notulen Rapat</title>
</head>

<body>
    <div class="container">
        <table width='100%' class="mt-5">
            <tr>
                <th width='10.6%'></th>
                <th width='18.9%'></th>
                <th width='2.31%'></th>
                <th width='3.54%'></th>
                <th width='7.40%'></th>
                <th width='7.25%'></th>
                <th width='7.25%'></th>
                <th width='7.25%'></th>
                <th width='10.95%'></th>
                <th width='7.25%'></th>
                <th width='7.25%'></th>
                <th width='9.8%'></th>
            </tr>
            <tr class="text-center">
                <td colspan="12" class="h1 font-weight-bolder"> NOTULEN RAPAT</td>
            </tr>
            <tr class="text-center">
                <td colspan="12" class="h2 font-weight-bolder">======================================
                </td>
            </tr>
            <tr class="text-center">
                <td colspan="12" class="h3 font-weight-bold">SEKRETARIAT DAERAH PROVINSI RIAU</td>
            </tr>
            <tr class="text-center">
                <td colspan="12" class="h3 font-weight-bold">BIRO ADMINISTRASI PEMBANGUNAN</td>
            </tr>
            <tr height='24px'>
                <td colspan="12"></td>
            </tr>
            <tr>
                <td class="h5 text-right">1. </td>
                <td class="h5">Pimpinan Rapat</td>
                <td class="h5 text-center">:</td>
                <td colspan="9" class="h5">{{ $notulen->pimpinan }}</td>
            </tr>
            <tr>
                <td class="h5 text-right">2. </td>
                <td class="h5">Hari/Tanggal</td>
                <td class="h5 text-center">:</td>
                <td colspan="9" class="h5">{{ strftime('%A', strtotime($data->rapat_mulai)) }}, {{ strftime('%d %B %Y', strtotime($data->rapat_mulai)) }}</td>
            </tr>
            <tr>
                <td class="h5 text-right">3. </td>
                <td class="h5">Pukul</td>
                <td class="h5 text-center">:</td>
                <td colspan="9" class="h5">{{ strftime('%H:%M', strtotime($data->rapat_mulai)) }} WIB s/d Selesai</td>
            </tr>
            <tr>
                <td class="h5 text-right">4. </td>
                <td class="h5">Tempat</td>
                <td class="h5 text-center">:</td>
                <td colspan="9" class="h5">{{ $data->room->deskripsi }}</td>
            </tr>
            <tr>
                <td class="h5 text-right">5. </td>
                <td class="h5">Peserta Rapat </td>
                <td class="h5 text-center">:</td>
                <td colspan="9" class="h5">{{ $notulen->peserta }}</td>
            </tr>
            <tr>
                <td class="h5 text-right">6. </td>
                <td class="h5">Agenda Rapat </td>
                <td class="h5 text-center">:</td>
                <td colspan="9" class="h5">{{ $data->tema }}</td>
            </tr>
            <tr height="21px">
                <td colspan="12"></td>
            </tr>
            <tr>
                <td colspan="12" class="h4 font-weight-bold px-3 hasil">Hasil</td>
            </tr>
            <tr height="21">
                <td colspan="12"></td>
            </tr>

            <tr>
                <td class="h5 text-right align-top"></td>
                <td colspan="11" class="h5">{!! $notulen->hasil !!}</td>
            </tr>
            <tr height="21">
                <td colspan="12"></td>
            </tr>


            <tr height="51">
                <td colspan="12"></td>
            </tr>
            <tr>
                <td colspan="6"></td>
                <td colspan="5" class="h5 text-center">Notulen</td>
                <td></td>
            </tr>
            <tr height="65">
                <td colspan="12"></td>
            </tr>
            <tr>
                <td colspan="6"></td>
                <td colspan="5" class="h5 text-center font-weight-bold">{{ $notulen->penulis }}</td>
            </tr>
            <tr height="51">
                <td colspan="12"></td>
            </tr>
        </table>
    </div>

</body>

</html>