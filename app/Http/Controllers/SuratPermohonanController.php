<?php

namespace App\Http\Controllers;

use App\Models\SuratPermohonan;
use Illuminate\Http\Request;
use PDF;

class SuratPermohonanController extends Controller
{
    public function index()
    {
        return view('pemohon.surat.index');
    }

    public function viewMediasi()
    {
        return view('pemohon.surat.laporanMediasi');
    }

    public function print()
    {
        return view('pemohon.surat.print');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'             => 'required',
            'tempat'            => 'required',
            'nomor'             => 'required',
            'nama_organisasi'   => 'required',
            'nama_pemohon'      => 'required',
            'tanggal_lahir_pemohon' => 'required',
            'jenis_kelamin_pemohon' => 'required',
            'agama_pemohon' => 'required',
            'pendidikan_pemohon' => 'required',
            'golongan_darah_pemohon' => 'required',
            'alamat_pemohon' => 'required',
            'pekerjaan_pemohon' => 'required',
            'keterangan_1' => 'required',
            'ttd_pemohon' => 'required',
            // hasil konsultasi hukum
            'status_pemohon' => 'required',
            'kelurahan'=> 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'pelaksanaan' => 'required',
            'uraian' => 'required',
            'nasihat' => 'required',
            'hasilkonsultasi' => 'required',
            'kesanKonsultasi' => 'required',
            'nama_konsultanhukum' => 'required',
            'ttd_konsultanhukum' => 'required',
            'tempat_bantuanhukum' => 'required',
            'tanggal_bantuanhukum' => 'required',
            'ttd_pemberibantuanhukum' => 'required',
            // laporan pelaksanaan Kegiatan mediasi
            'hari_mediasi' => 'required',
            'tanggal_mediasi' => 'required',
            'bulan_mediasi' => 'required',
            'tahun_mediasi' => 'required',
            'dilaksanakan_mediasi' => 'required',
            'alamat_mediasi' => 'required',
            'pihak1_mediasi' => 'required',
            'pihak1_alamat' => 'required',
            'pihak1_perkara' => 'required',
            'hasil_mediasi' => 'required',
            'ttd_pihak1' => 'required',
            'ttd_pihak2' => 'required',
            'ttd_mediator'=> 'required',
        ]);

        $bantuan = SuratPermohonan::create([
            'email'             => $request-> email,
            'tempat'            => $request-> tempat,
            'nomor'             => $request-> nomor,
            'nama_organisasi'   => $request-> nama_organisasi,
            'nama_pemohon'      => $request-> nama_pemohon,
            'tanggal_lahir_pemohon' => $request-> tanggal_lahir_pemohon,
            'jenis_kelamin_pemohon' => $request-> jenis_kelamin_pemohon,
            'agama_pemohon' => $request-> agama_pemohon,
            'pendidikan_pemohon' => $request-> pendidikan_pemohon,
            'golongan_darah_pemohon' => $request-> golongan_darah_pemohon,
            'alamat_pemohon' => $request-> alamat_pemohon,
            'pekerjaan_pemohon' => $request-> pekerjaan_pemohon,
            'keterangan_1' => $request-> keterangan_1,
            'ttd_pemohon' => $request-> ttd_pemohon,
            // hasil konsultasi hukum
            'status_pemohon' => $request-> status_pemohon,
            'kelurahan'=> $request-> kelurahan,
            'kecamatan' => $request-> kecamatan,
            'kabupaten' => $request-> kabupaten,
            'pelaksanaan' => $request-> pelaksanaan,
            'uraian' => $request-> uraian,
            'nasihat' => $request-> nasihat,
            'hasilkonsultasi' => $request-> hasilkonsultasi,
            'kesanKonsultasi' => $request-> kesanKonsultasi,
            'nama_konsultanhukum' => $request-> nama_konsultanhukum,
            'ttd_konsultanhukum' => $request-> ttd_konsultanhukum,
            'tempat_bantuanhukum' => $request-> tempat_bantuanhukum,
            'tanggal_bantuanhukum' => $request-> tanggal_bantuanhukum,
            'ttd_pemberibantuanhukum' => $request-> ttd_pemberibantuanhukum,
            // laporan pelaksanaan Kegiatan mediasi
            'hari_mediasi' => $request-> hari_mediasi,
            'tanggal_mediasi' => $request-> tanggal_mediasi,
            'bulan_mediasi' => $request-> bulan_mediasi,
            'tahun_mediasi' => $request-> tahun_mediasi,
            'dilaksanakan_mediasi' => $request-> dilaksanakan_mediasi,
            'alamat_mediasi' => $request-> alamat_mediasi,
            'pihak1_mediasi' => $request-> pihak1_mediasi,
            'pihak1_alamat' => $request-> pihak1_alamat,
            'pihak1_perkara' => $request-> pihak1_perkara,
            'hasil_mediasi' => $request-> hasil_mediasi,
            'ttd_pihak1' => $request-> ttd_pihak1,
            'ttd_pihak2' => $request-> ttd_pihak2,
            'ttd_mediator'=> $request-> ttd_mediator,
        ]);

        if ($bantuan) {
            //redirect dengan pesan sukses
            return redirect()->route('SIBAHUKAMIL')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('SIBAHUKAMIL')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function cetak(Request $request, $email){
        $bantuan = SuratPermohonan::where('email', $email)->get();
        $pdf = PDF::loadview('pemohon.surat.cetak', ['data' => $bantuan]);
        //dd($data);
        return $pdf->stream('surat_permohonan.pdf');
    }
}


// $surat = SuratPermohonan::latest()->get();
// return view('pemohon.surat.index', compact('surat'));
