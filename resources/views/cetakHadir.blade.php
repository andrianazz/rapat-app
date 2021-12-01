<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="{{ asset('laporan/vendor/base.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('laporan/vendor/fancy.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('laporan/vendor/main.css') }}" />
    <script src="{{ asset('laporan/vendor/compatibility.min.js') }}"></script>
    <script src="{{ ('laporan/vendor/theViewer.min.js') }}"></script>
    <script>
        try {
            theViewer.defaultViewer = new theViewer.Viewer({});
        } catch (e) {}
    </script>
    <title></title>
</head>

<body>
    <div id="sidebar">
        <div id="outline">
        </div>
    </div>
    <div id="page-container">
        <div id="pf1" class="pf w0 h0" data-page-no="1">
            <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="{{ asset('laporan/vendor/bg1.png') }}" />
                <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH PROVINSI RIAU<span class="_ _0"> </span><span class="ff2 fc1">Hal 1</span></div>
                <div class="c x0 y2 w2 h3">
                    <div class="t m0 x2 h4 y3 ff3 fs1 fc2 sc0 ls0 ws0">PEMERINTAH PROVINSI RIAU</div>
                </div>
                <div class="c x0 y4 w2 h5">
                    <div class="t m0 x3 h6 y5 ff3 fs2 fc2 sc0 ls0 ws0">DAFTAR HADIR</div>
                </div>
                <div class="c x0 y6 w3 h7">
                    <div class="t m0 x4 h8 y7 ff3 fs3 fc2 sc0 ls0 ws0">Hari / Tanggal</div>
                </div>
                <div class="c x5 y6 w4 h7">
                    <div class="t m0 x4 h8 y7 ff3 fs3 fc2 sc0 ls0 ws0">:</div>
                </div>
                <div class="c x6 y6 w5 h7">
                    <div class="t m0 x4 h8 y7 ff3 fs3 fc2 sc0 ls0 ws0">Senin, {{ strftime('%d-%B-%Y', strtotime($data->rapat_mulai)) }}</div>
                </div>
                <div class="c x0 y8 w3 h9">
                    <div class="t m0 x4 h8 y9 ff3 fs3 fc2 sc0 ls0 ws0">Waktu </div>
                </div>
                <div class="c x5 y8 w4 h9">
                    <div class="t m0 x4 h8 y9 ff3 fs3 fc2 sc0 ls0 ws0">:</div>
                </div>
                <div class="c x6 y8 w5 h9">
                    <div class="t m0 x4 h8 y9 ff3 fs3 fc2 sc0 ls0 ws0">{{ strftime('%H:%M', strtotime($data->rapat_mulai)) }} WIB</div>
                </div>
                <div class="c x0 ya w3 h9">
                    <div class="t m0 x4 h8 y9 ff3 fs3 fc2 sc0 ls0 ws0">Tempat</div>
                </div>
                <div class="c x5 ya w4 h9">
                    <div class="t m0 x4 h8 y9 ff3 fs3 fc2 sc0 ls0 ws0">:</div>
                </div>
                <div class="c x6 ya w5 h9">
                    <div class="t m0 x4 h8 y9 ff3 fs3 fc2 sc0 ls0 ws0">{{ $data->room->nama }}</div>
                </div>
                <div class="c x6 yb w5 ha">
                    <div class="t m0 x4 h8 yc ff3 fs3 fc2 sc0 ls0 ws0">{{ $data->room->deskripsi }}</div>
                </div>
                <div class="c x0 yd w3 hb">
                    <div class="t m0 x4 h8 ye ff3 fs3 fc2 sc0 ls0 ws0">Agenda/Acara</div>
                </div>
                <div class="c x5 yd w4 hb">
                    <div class="t m0 x4 h8 ye ff3 fs3 fc2 sc0 ls0 ws0">:</div>
                </div>
                <div class="c x6 yd w5 hb">
                    <div class="t m0 x4 h8 yf ff3 fs3 fc2 sc0 ls0 ws0">{{ $data->tema }}</div>
                    <div class="t m0 x4 h8 y10 ff3 fs3 fc2 sc0 ls0 ws0">Lingkungan Pemerintah Provinsi Riau.</div>
                </div>
                <div class="c x0 y11 w6 hc">
                    <div class="t m0 x7 h8 y12 ff3 fs3 fc2 sc0 ls0 ws0">NO</div>
                </div>
                <div class="c x8 y11 w7 hc">
                    <div class="t m0 x9 h8 y12 ff3 fs3 fc2 sc0 ls0 ws0">NAMA</div>
                </div>
                <div class="c xa y11 w8 hc">
                    <div class="t m0 xb h8 y12 ff3 fs3 fc2 sc0 ls0 ws0">JABATAN</div>
                </div>
                <div class="c xc y11 w9 hc">
                    <div class="t m0 xd h8 y12 ff3 fs3 fc2 sc0 ls0 ws0">NO. HP / WA </div>
                </div>
                <div class="c xe y11 wa hc">
                    <div class="t m0 xf h8 y12 ff3 fs3 fc2 sc0 ls0 ws0">PARAF / TTD</div>
                </div>
                <div class="c x0 y13 w6 hd">
                    <div class="t m0 x10 he y14 ff4 fs4 fc2 sc0 ls0 ws0">1</div>
                </div>
                <div class="c x8 y13 w7 hd">
                    <div class="t m0 x11 he y14 ff4 fs4 fc2 sc0 ls0 ws0">2</div>
                </div>
                <div class="c xa y13 w8 hd">
                    <div class="t m0 x12 he y14 ff4 fs4 fc2 sc0 ls0 ws0">3</div>
                </div>
                <div class="c xc y13 w9 hd">
                    <div class="t m0 x13 he y14 ff4 fs4 fc2 sc0 ls0 ws0">4</div>
                </div>
                <div class="c xe y13 wa hd">
                    <div class="t m0 x14 he y14 ff4 fs4 fc2 sc0 ls0 ws0">5</div>
                </div>
                @php
                $no = 0;
                $y = 15;
                @endphp
                @foreach ($peserta as $row)
                <div class="c x0 y{{ $y }} w6 hf">
                    <div class="t m0 xf h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">{{ $no+=1 }}</div>
                </div>
                <div class="c x8 y{{ $y }} w7 hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">{{ $row->nama }}</div>
                </div>
                <div class="c xa y{{ $y }} w8 hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">{{ $row->jabatan . " " . $row->divisi }}</div>
                </div>
                <div class="c xe y{{ $y }} wa hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc3 sc0 ls0 ws0">{{ $no }}</div>
                </div>
                {{ $y = $y + 2 }}
                @endforeach
                <!-- <div class="c x0 y17 w6 hf">
                    <div class="t m0 xf h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">2</div>
                </div>
                <div class="c x8 y17 w7 hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">H. EDY NATAR NASUTION, S.IP</div>
                </div>
                <div class="c xa y17 w8 hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">WAKIL GUBERNUR RIAU</div>
                </div>
                <div class="c xe y17 wa hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc3 sc0 ls0 ws0">2</div>
                </div>
                <div class="c x0 y18 w6 hf">
                    <div class="t m0 xf h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">3</div>
                </div>
                <div class="c x8 y18 w7 hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">Ir. S. F. HARIYANTO, M.T</div>
                </div>
                <div class="c xa y18 w8 hf">
                    <div class="t m0 x4 h10 y1a ff4 fs5 fc2 sc0 ls0 ws0">SEKRETARIS DAERAH PROVINSI</div>
                    <div class="t m0 x4 h10 y1b ff4 fs5 fc2 sc0 ls0 ws0">RIAU</div>
                </div>
                <div class="c xe y18 wa hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc3 sc0 ls0 ws0">3</div>
                </div>
                <div class="c x0 y1c w6 hf">
                    <div class="t m0 xf h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">4</div>
                </div>
                <div class="c x8 y1c w7 hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">Drs. MASRUL KASMY, M.Si</div>
                </div>
                <div class="c xa y1c w8 hf">
                    <div class="t m0 x4 h10 y1d ff4 fs5 fc2 sc0 ls0 ws0">STAF AHLI BIDANG</div>
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">PEMERINTAHAN, HUKUM, POLITIK</div>
                    <div class="t m0 x4 h10 y1e ff4 fs5 fc2 sc0 ls0 ws0">DAN KEMASYARAKATAN</div>
                </div>
                <div class="c xe y1c wa hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc3 sc0 ls0 ws0">4</div>
                </div>
                <div class="c x0 y1f w6 hf">
                    <div class="t m0 xf h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">5</div>
                </div>
                <div class="c x8 y1f w7 hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">RUDYANTO, SH, M.Si</div>
                </div>
                <div class="c xa y1f w8 hf">
                    <div class="t m0 x4 h10 y1d ff4 fs5 fc2 sc0 ls0 ws0">STAF AHLI BIDANG</div>
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">PEMBANGUNAN DAN</div>
                    <div class="t m0 x4 h10 y1e ff4 fs5 fc2 sc0 ls0 ws0">INFRASTRUKTUR</div>
                </div>
                <div class="c xe y1f wa hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc3 sc0 ls0 ws0">5</div>
                </div>
                <div class="c x0 y20 w6 h11">
                    <div class="t m0 xf h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">6</div>
                </div>
                <div class="c x8 y20 w7 h11">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">Drs. INDRA PUTRAYANA, M.Si</div>
                </div>
                <div class="c xa y20 w8 h11">
                    <div class="t m0 x4 h10 y21 ff4 fs5 fc2 sc0 ls0 ws0">STAF AHLI BIDANG EKONOMI DAN</div>
                    <div class="t m0 x4 h10 y22 ff4 fs5 fc2 sc0 ls0 ws0">KEUANGAN</div>
                </div>
                <div class="c xe y20 wa h11">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc3 sc0 ls0 ws0">6</div>
                </div>
                <div class="c x0 y23 w6 hf">
                    <div class="t m0 xf h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">7</div>
                </div>
                <div class="c x8 y23 w7 hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">JENRI SALMON GINTING, AP, M.Si</div>
                </div>
                <div class="c xa y23 w8 hf">
                    <div class="t m0 x4 h10 y21 ff4 fs5 fc2 sc0 ls0 ws0">ASISTEN PEMERINTAHAN DAN</div>
                    <div class="t m0 x4 h10 y22 ff4 fs5 fc2 sc0 ls0 ws0">KESEJAHTERAAN RAKYAT</div>
                </div>
                <div class="c xe y23 wa hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc3 sc0 ls0 ws0">7</div>
                </div>
                <div class="c x0 y24 w6 hf">
                    <div class="t m0 xf h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">8</div>
                </div>
                <div class="c x8 y24 w7 hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">EVAREFITA, SE, M.Si</div>
                </div>
                <div class="c xa y24 w8 hf">
                    <div class="t m0 x4 h10 y21 ff4 fs5 fc2 sc0 ls0 ws0">ASISTEN PEREKONOMIAN DAN</div>
                    <div class="t m0 x4 h10 y22 ff4 fs5 fc2 sc0 ls0 ws0">PEMBANGUNAN</div>
                </div>
                <div class="c xe y24 wa hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc3 sc0 ls0 ws0">8</div>
                </div>
                <div class="c x0 y25 w6 hf">
                    <div class="t m0 xf h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">9</div>
                </div>
                <div class="c x8 y25 w7 hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">SYAHRIAL ABDI, AP, M.Si</div>
                </div>
                <div class="c xa y25 w8 hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">ASISTEN ADMINISTRASI UMUM</div>
                </div>
                <div class="c xe y25 wa hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc3 sc0 ls0 ws0">9</div>
                </div>
                <div class="c x0 y26 w6 hf">
                    <div class="t m0 x15 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">10</div>
                </div>
                <div class="c x8 y26 w7 hf">
                    <div class="t m0 x4 h10 y21 ff4 fs5 fc2 sc0 ls0 ws0">SIGIT <span class="_ _1"> </span>JULI <span class="_ _1"> </span>HENDRIAWAN, <span class="_ _1"> </span>SE, <span class="_ _1"> </span>Ak,</div>
                    <div class="t m0 x4 h10 y22 ff4 fs5 fc2 sc0 ls0 ws0">MM, CA, CRMP</div>
                </div>
                <div class="c xa y26 w8 hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">INSPEKTUR</div>
                </div>
                <div class="c xe y26 wa hf">
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc3 sc0 ls0 ws0">10</div>
                </div>
                <div class="c x0 y27 w6 hf">
                    <div class="t m0 x15 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">11</div>
                </div>
                <div class="c x8 y27 w7 hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">MUFLIHUN, S.STP, M.AP</div>
                </div>
                <div class="c xa y27 w8 hf">
                    <div class="t m0 x4 h10 y1a ff4 fs5 fc2 sc0 ls0 ws0">SEKRETARIS DPRD PROVINSI</div>
                    <div class="t m0 x4 h10 y1b ff4 fs5 fc2 sc0 ls0 ws0">RIAU</div>
                </div>
                <div class="c xe y27 wa hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc3 sc0 ls0 ws0">11</div>
                </div>
                <div class="c x0 y28 w6 hf">
                    <div class="t m0 x15 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">12</div>
                </div>
                <div class="c x8 y28 w7 hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">Ir. EMRI JULI HARNIS, M.T, Ph.D</div>
                </div>
                <div class="c xa y28 w8 hf">
                    <div class="t m0 x4 h10 y29 ff4 fs5 fc2 sc0 ls0 ws0">KEPALA BADAN PERENCANAAN</div>
                    <div class="t m0 x4 h10 y16 ff4 fs5 fc2 sc0 ls0 ws0">PEMBANGUNAN DAERAH,</div>
                    <div class="t m0 x4 h10 y2a ff4 fs5 fc2 sc0 ls0 ws0">PENELITIAN DAN PEMBANGUNAN</div>
                </div>
                <div class="c xe y28 wa hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc3 sc0 ls0 ws0">12</div>
                </div>
                <div class="c x0 y2b w6 hf">
                    <div class="t m0 x15 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">13</div>
                </div>
                <div class="c x8 y2b w7 hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">INDRA, SE, M.Si</div>
                </div>
                <div class="c xa y2b w8 hf">
                    <div class="t m0 x4 h10 y1a ff4 fs5 fc2 sc0 ls0 ws0">KEPALA BADAN PENGELOLA</div>
                    <div class="t m0 x4 h10 y1b ff4 fs5 fc2 sc0 ls0 ws0">KEUANGAN DAN ASET DAERAH</div>
                </div>
                <div class="c xe y2b wa hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc3 sc0 ls0 ws0">13</div>
                </div>
                <div class="c x0 y2c w6 hf">
                    <div class="t m0 x15 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">14</div>
                </div>
                <div class="c x8 y2c w7 hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">HERMAN, S.E, M.T</div>
                </div>
                <div class="c xa y2c w8 hf">
                    <div class="t m0 x4 h10 y1a ff4 fs5 fc2 sc0 ls0 ws0">KEPALA BADAN PENDAPATAN</div>
                    <div class="t m0 x4 h10 y1b ff4 fs5 fc2 sc0 ls0 ws0">DAERAH</div>
                </div>
                <div class="c xe y2c wa hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc3 sc0 ls0 ws0">14</div>
                </div>
                <div class="c x0 y2d w6 hf">
                    <div class="t m0 x15 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">15</div>
                </div>
                <div class="c x8 y2d w7 hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">IKHWAN RIDWAN, SH, M.Si</div>
                </div>
                <div class="c xa y2d w8 hf">
                    <div class="t m0 x4 h10 y1a ff4 fs5 fc2 sc0 ls0 ws0">KEPALA BADAN KEPEGAWAIAN</div>
                    <div class="t m0 x4 h10 y1b ff4 fs5 fc2 sc0 ls0 ws0">DAERAH</div>
                </div>
                <div class="c xe y2d wa hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc3 sc0 ls0 ws0">15</div>
                </div>
                <div class="c x0 y2e w6 hf">
                    <div class="t m0 x15 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">16</div>
                </div>
                <div class="c x8 y2e w7 hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">JONI IRWAN, SH, MH</div>
                </div>
                <div class="c xa y2e w8 hf">
                    <div class="t m0 x4 h10 y1a ff4 fs5 fc2 sc0 ls0 ws0">KEPALA BADAN PENGEMBANGAN</div>
                    <div class="t m0 x4 h10 y1b ff4 fs5 fc2 sc0 ls0 ws0">SUMBER DAYA MANUSIA</div>
                </div>
                <div class="c xe y2e wa hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc3 sc0 ls0 ws0">16</div>
                </div>
                <div class="c x0 y2f w6 hf">
                    <div class="t m0 x15 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">17</div>
                </div>
                <div class="c x8 y2f w7 hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">M. EDY AFRIZAL</div>
                </div>
                <div class="c xa y2f w8 hf">
                    <div class="t m0 x4 h10 y1d ff4 fs5 fc2 sc0 ls0 ws0">KEPALA BADAN</div>
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc2 sc0 ls0 ws0">PENANGGULANGAN BENCANA</div>
                    <div class="t m0 x4 h10 y1e ff4 fs5 fc2 sc0 ls0 ws0">DAERAH</div>
                </div>
                <div class="c xe y2f wa hf">
                    <div class="t m0 x4 h10 y19 ff4 fs5 fc3 sc0 ls0 ws0">17</div>
                </div> -->
            </div>
            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>
    </div>
    <div class="loading-indicator">

    </div>
</body>

</html>