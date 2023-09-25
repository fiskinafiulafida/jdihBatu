<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPermohonan extends Model
{
    protected $table = 'bantuan';
    use HasFactory;

    protected $fillable = [
        'email',
        'tempat',
        'nomor',
        'nama_organisasi',
        'nama_pemohon',
        'tanggal_lahir_pemohon',
        'jenis_kelamin_pemohon',
        'agama_pemohon',
        'pendidikan_pemohon',
        'golongan_darah_pemohon',
        'alamat_pemohon',
        'pekerjaan_pemohon',
        'keterangan_1',
        'ttd_pemohon',
        // hasil konsultasi hukum
        'status_pemohon',
        'kelurahan',
            'kecamatan',
            'kabupaten',
            'pelaksanaan',
            'uraian',
            'nasihat',
            'hasilkonsultasi',
            'kesanKonsultasi',
            'nama_konsultanhukum',
            'ttd_konsultanhukum',
            'tempat_bantuanhukum',
            'tanggal_bantuanhukum',
            'ttd_pemberibantuanhukum',
            // laporan pelaksanaan Kegiatan mediasi
            'hari_mediasi',
            'tanggal_mediasi',
            'bulan_mediasi',
            'tahun_mediasi',
            'dilaksanakan_mediasi',
            'alamat_mediasi',
            'pihak1_mediasi',
            'pihak1_alamat' ,
            'pihak1_perkara',
            'hasil_mediasi' ,
            'ttd_pihak1' ,
            'ttd_pihak2' ,
            'ttd_mediator',
    ];

    protected $hidden;
}
