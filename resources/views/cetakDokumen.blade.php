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
    <title>Cetak Dokumentasi</title>
</head>

<body>
    <div class="container">
        <table width="100%" class="mt-5">
            <tr class="text-center align-top" height="40px">
                <td class="h4 font-weight-bold">{{ strtoupper($data->nama) }}</td>
            </tr>
            <tr class="text-center align-top" height="40px">
                <td class="h4 font-weight-bold">PROVINSI RIAU TAHUN 2021</td>
            </tr>
            <tr class="text-center align-top" height="49px">
                @php
                setlocale(LC_TIME, 'id_ID');
                @endphp
                <td class="h4 font-weight-bold">{{ strtoupper(strftime('%A', strtotime($data->rapat_mulai))) }}, {{ strtoupper(strftime('%d %B %Y', strtotime($data->rapat_mulai))) }}</td>
            </tr>
            <tr height="80px">
                <td></td>
            </tr>
            @foreach ($document as $image)
            <tr class="text-center">
                <td>
                    <img style="border: solid 10px grey; border-radius: 20px;" src="{{ asset('dokumentasi/'.$data->kode_rapat.'/'.$image->foto) }}" alt="" width="500" height="300">
                </td>
            </tr>
            <tr height="40px">
                <td></td>
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>