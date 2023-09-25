<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman untuk Cetak</title>
    <style>
        @media print {
            body {
                width: 210mm; /* Lebar kertas A4 dalam milimeter */
                height: 297mm; /* Tinggi kertas A4 dalam milimeter */
                margin: 1cm; /* Hilangkan margin */
                font-family: "Bookman Old Style", serif;
                font-size: 12px;
            }
        }
        .page-break {
            page-break-before: always; /* or page-break-after: always; */
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Konten Anda di sini -->
    @foreach ($data as $b)
        <b>A. FORMAT PERMOHONAN BANTUAN HUKUM</b> <br>
            <p style="text-align: left;float: right;">{{$b->tempat}},
                <?php
                // Get the current day, month, and year using PHP
                $currentDay = date('d');
                $currentMonth = date('m');
                $currentYear = date('Y');

                // Output the date in the desired format
                echo $currentDay . ' - ' . $currentMonth . ' - ' . $currentYear;
                ?>
            </p><br>
        <p style="margin-left: 20px">
            Nomor   : {{$b->nomor}} <br>
            Perihal : Permohonan Bantuan Hukum <br><br>
            Kepada Yth. <br><br>
            Nama Organisasi Bantuan Hukum ({{$b->nama_organisasi}}) <br>
            Di <br>
            tempat <br><br>
            Dengan hormat, <br><br>
            Saya Yang bertanda tangan dibawah ini:----------------------------------- <br>
            <table style="width: 210mm; margin-left: 20px">
                <tr>
                    <td width="200px">Nama</td><br>
                    <td>:</td>
                    <td>{{$b->nama_pemohon}}</td>
                </tr>
                <tr>
                    <td>Tempat/Tanggal lahir</td><br>
                    <td>:</td>
                    <td>{{$b->tanggal_lahir_pemohon}}</td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td><br>
                    <td>:</td>
                    <td>{{$b->jenis_kelamin_pemohon}}</td>
                </tr>
                <tr>
                    <td>Agama</td><br>
                    <td>:</td>
                    <td>{{$b->agama_pemohon}}</td>
                </tr>
                <tr>
                    <td>Pendidikan</td><br>
                    <td>:</td>
                    <td>{{$b->pendidikan_pemohon}}</td>
                </tr>
                <tr>
                    <td>Golongan darah</td><br>
                    <td>:</td>
                    <td>{{$b->golongan_darah_pemohon}}</td>
                </tr>
                <tr>
                    <td>Alamat/Telepon/HP</td><br>
                    <td>:</td>
                    <td>{{$b->pekerjaan_pemohon}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td><br>
                    <td>:</td>
                    <td>{{$b->jenis_kelamin_pemohon}}</td>
                </tr>
                <tr>
                    <td>Keterangan Miskin</td><br>
                    <td>:</td>
                    <td>{{$b->keteranganmiskin_pemohon}}</td>
                </tr>
            </table><br>
            <p style="margin-left: 20px">
            Bersama ini mengajukan permohonan bantuan hukum dengan uraian singkat pokok permasalahan sebagai berikut : <br>
            {{$b->keterangan_1}} <br><br>
            Demikian permohonan ini kami ajukan untuk disetujui</p><br><br>
        </p>
        <p style="float: right;">
            Pemohon <br>
            {{$b->tempat}},
            <?php
            // Get the current day, month, and year using PHP
            $currentDay = date('d');
            $currentMonth = date('m');
            $currentYear = date('Y');

            // Output the date in the desired format
            echo $currentDay . ' - ' . $currentMonth . ' - ' . $currentYear;
            ?><br>
            {{$b->ttd_pemohon}} <br><br><br>
            {{$b->nama_pemohon}}
        </p><br>
        <div class="page-break"></div>
        <div>
            <!-- Content for the second page -->
            <b>B. FORMULIR HASIL KONSULTASI HUKUM</b> <br><br>
            <div style="margin-left: 20px">I  DATA PEMOHON/KLIEN
                <table style="width: 210mm; margin-left: 40px">
                <tr>
                    <td width="200px">Nama</td><br>
                    <td>:</td>
                    <td>{{$b->nama_pemohon}}</td>
                </tr>
                <tr>
                    <td>Tempat/Tanggal lahir</td><br>
                    <td>:</td>
                    <td>{{$b->tanggal_lahir_pemohon}}</td>
                </tr>
                <tr>
                    <td>Kawin/belum kawin/ <br>Duda/janda</td><br>
                    <td>:</td>
                    <td>{{$b->status_pemohon}}</td>
                </tr>
                <tr>
                    <td>Tempat tinggal (alamat)</td><br>
                    <td>:</td>
                    <td>{{$b->alamat_pemohon}}</td>
                </tr>
                <tr>
                    <td>Kelurahan / Desa</td><br>
                    <td>:</td>
                    <td>{{$b->kelurahan}}</td>
                </tr>
                <tr>
                    <td>Kecamatan</td><br>
                    <td>:</td>
                    <td>{{$b->kecamatan}}</td>
                </tr>
                <tr>
                    <td>Kabupaten / Kota</td><br>
                    <td>:</td>
                    <td>{{$b->kabupaten}}</td>
                </tr>
                <tr>
                    <td>Pendidikan</td><br>
                    <td>:</td>
                    <td>{{$b->pendidikan_pemohon}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td><br>
                    <td>:</td>
                    <td>{{$b->pekerjaan_pemohon}}</td>
                </tr>
                </table>
            </div><br>
            <div style="margin-left: 20px">II  Pelaksanaan Konsultasi hukum (tanggal/bulan/tahun)</div>
                <div style="margin-left: 40px">{{$b->pelaksanaan}}</div><br>
            <div style="margin-left: 20px">III  Uraian singkat pokok masalah dan latar belakangnya</div>
                <div style="margin-left: 40px">{{$b->uraian}}</div><br>
            <div style="margin-left: 20px">IV  Nasihat yang diberikan konsultan termasuk aspek yuridisnya</div>
                <div style="margin-left: 40px">{{$b->nasihat}}</div><br>
            <div style="margin-left: 20px">V  Hasil Akhir Konsultasi</div>
                <div style="margin-left: 40px">{{$b->hasilkonsultasi}}</div><br>
            <div style="margin-left: 20px">VI  Kesan konsultan atas tingkat pengetahuan/kesadaran hukum pemohon</div>
                <div style="margin-left: 40px">{{$b->kesanKonsultasi}}</div><br>
            <div style="margin-left: 20px">VII  Pemohon/Klien
                <table style="width: 210mm; margin-left: 40px">
                    <tr>
                        <td width="200px">Nama</td>
                        <td>:</td>
                        <td>{{$b->nama_pemohon}}</td>
                    </tr>
                    <tr>
                        <td>Tanda Tangan</td>
                        <td>:</td>
                        <td width="50px">{{$b->ttd_pemohon}}</td>
                    </tr>
                </table>
            </div><br>
            <div style="margin-left: 20px">VIII  Konsultan Hukum
                <table style="width: 210mm; margin-left: 40px">
                    <tr>
                        <td width="200px">Nama</td>
                        <td>:</td>
                        <td>{{$b->nama_konsultanhukum}}</td>
                    </tr>
                    <tr>
                        <td>Tanda Tangan</td>
                        <td>:</td>
                        <td width="50px">{{$b->ttd_konsultanhukum}}</td>
                    </tr>
                </table>
            </div><br><br>
            <p style="float: right;">
                {{$b->tempat_bantuanhukum}},
                {{$b->tanggal_bantuanhukum}}<br>
                Mengetahui, <br><br><br>
                {{$b->ttd_pemberibantuanhukum}}
            </p><br>

        </div>
        <div class="page-break"></div>
        <div>
            <b>C. FORMAT LAPORAN PELAKSANAAN KEGIATAN MEDIASI</b> <br><br>
            <center>BERITA ACARA MEDIASI</center><br><br>
            <p style="margin-left: 20px">Pada hari ini {{$b->hari_mediasi}} tanggal {{$b->tanggal_mediasi}} bulan {{$b->bulan_mediasi}} tahun {{$b->tahun_mediasi}},
                telah dilaksanakan mediasi {{$b->dilaksanakan_mediasi}} beralamat di {{$b->alamat_mediasi}}
                yang selanjutnya disebut dengan PIHAK I, dengan {{$b->pihak1_mediasi}}
                yang beralamat di {{$b->pihak1_alamat}} yang selanjutnya disebut PIHAK I,
                dalam perkara {{$b->pihak1_perkara}}. <br>
                Adapun butir-butir kesepakatan mediasi yang dihasilkan adalah sebagai berikut: <br>
                {{$b->hasil_mediasi}}
            </p>
            <p>
                <div style="float: left; margin-left: 20px; text-align: center">
                    PIHAK PERTAMA <br>
                    {{$b->ttd_pihak1}}<br><br>
                    {{$b->nama_pemohon}}
                </div>
                <div style="float: right; margin-right: 20px; text-align: center">
                    PIHAK KEDUA <br>
                    {{$b->ttd_pihak2}}<br><br>
                    {{$b->pihak1_mediasi}}
                </div>
            </p><br>
            <p style="margin-top: 70px">
            <center style="text-align: center">
                MEDIATOR <br>
                {{$b->ttd_mediator}}<br><br>
                {{$b->nama_konsultanhukum}}
            </center>
            </p>

        </div>
    @endforeach
    </div>
</body>
</html>
