<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
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
            'email'                         => 'required',
            'tanggal'                       => 'required',
            'tempat'                        => 'required',
            'nomor'                         => 'required',
            'nama_organisasi'               => 'required',
            'nama_pemohon'                  => 'required',
            'tanggal_lahir_pemohon'         => 'required',
            'jenis_kelamin_pemohon'         => 'required',
            'agama_pemohon'                 => 'required',
            'pendidikan_pemohon'            => 'required',
            'golongan_darah_pemohon'        => 'required',
            'alamat_pemohon'                => 'required',
            'pekerjaan_pemohon'             => 'required',
            'keteranganmiskin_pemohon'      => 'required',
            'keterangan_1'                  => 'required',
            'ttd_pemohon'                   => 'required|image|mimes:png,jpg,jpeg',
            // hasil konsultasi hukum
            'status_pemohon'                => 'required',
            'kelurahan'                     => 'required',
            'kecamatan'                     => 'required',
            'kabupaten'                     => 'required',
            'pelaksanaan'                   => 'required',
            'uraian'                        => 'required',
            'nasihat'                       => 'required',
            'hasilkonsultasi'               => 'required',
            'kesanKonsultasi'               => 'required',
            'nama_konsultanhukum'           => 'required',
            'ttd_konsultanhukum'            => 'required|image|mimes:png,jpg,jpeg',
            'tempat_bantuanhukum'           => 'required',
            'tanggal_bantuanhukum'          => 'required',
            'ttd_pemberibantuanhukum'       => 'required|image|mimes:png,jpg,jpeg',
            // laporan pelaksanaan Kegiatan mediasi
            'hari_mediasi'                  => 'required',
            'tanggal_mediasi'               => 'required',
            'bulan_mediasi'                 => 'required',
            'tahun_mediasi'                 => 'required',
            'dilaksanakan_mediasi'          => 'required',
            'alamat_mediasi'                => 'required',
            'pihak1_mediasi'                => 'required',
            'pihak1_alamat'                 => 'required',
            'pihak1_perkara'                => 'required',
            'hasil_mediasi'                 => 'required',
            'ttd_pihak1'                    => 'required|image|mimes:png,jpg,jpeg',
            'ttd_pihak2'                    => 'required|image|mimes:png,jpg,jpeg',
            'ttd_mediator'                  => 'required|image|mimes:png,jpg,jpeg',
            'namattd_pihak1'                => 'required',
            'namattd_pihak2'                => 'required',
            'namattd_mediator'              => 'required',
        ]);

        //upload image
        $ttd_pihak1 = $request->file('ttd_pihak1');
        $ttd_pihak2 = $request->file('ttd_pihak2');
        $ttd_mediator = $request->file('ttd_mediator');
        $ttd_pemohon = $request->file('ttd_pemohon');
        $ttd_pemberibantuanhukum = $request->file('ttd_pemberibantuanhukum');
        $ttd_konsultanhukum = $request->file('ttd_konsultanhukum');
        $ttd_pihak1->storeAs('public/image', $ttd_pihak1->hashName());
        $ttd_pihak2->storeAs('public/image', $ttd_pihak2->hashName());
        $ttd_mediator->storeAs('public/image', $ttd_mediator->hashName());
        $ttd_pemohon->storeAs('public/image', $ttd_pemohon->hashName());
        $ttd_konsultanhukum->storeAs('public/image', $ttd_konsultanhukum->hashName());
        $ttd_pemberibantuanhukum->storeAs('public/image', $ttd_pemberibantuanhukum->hashName());

        $suratPermohonan = SuratPermohonan::create([
            'email'                                 => $request->email,
            'tanggal'                               => $request->tanggal,
            'tempat'                                => $request->tempat,
            'nomor'                                 => $request->nomor,
            'nama_organisasi'                       => $request->nama_organisasi,
            'nama_pemohon'                          => $request->nama_pemohon,
            'tanggal_lahir_pemohon'                 => $request->tanggal_lahir_pemohon,
            'jenis_kelamin_pemohon'                 => $request->jenis_kelamin_pemohon,
            'agama_pemohon'                         => $request->agama_pemohon,
            'pendidikan_pemohon'                    => $request->pendidikan_pemohon,
            'golongan_darah_pemohon'                => $request->golongan_darah_pemohon,
            'alamat_pemohon'                        => $request->alamat_pemohon,
            'pekerjaan_pemohon'                     => $request->pekerjaan_pemohon,
            'keteranganmiskin_pemohon'              => $request->keteranganmiskin_pemohon,
            'keterangan_1'                          => $request->keterangan_1,
            'ttd_pemohon'                           => $ttd_pemohon->hashName(),
            // hasil konsultasi hukum
            'status_pemohon'                        => $request->status_pemohon,
            'kelurahan'                             => $request->kelurahan,
            'kecamatan'                             => $request->kecamatan,
            'kabupaten'                             => $request->kabupaten,
            'pelaksanaan'                           => $request->pelaksanaan,
            'uraian'                                => $request->uraian,
            'nasihat'                               => $request->nasihat,
            'hasilkonsultasi'                       => $request->hasilkonsultasi,
            'kesanKonsultasi'                       => $request->kesanKonsultasi,
            'nama_konsultanhukum'                   => $request->nama_konsultanhukum,
            'ttd_konsultanhukum'                    => $ttd_konsultanhukum->hashName(),
            'tempat_bantuanhukum'                   => $request->tempat_bantuanhukum,
            'tanggal_bantuanhukum'                  => $request->tanggal_bantuanhukum,
            'ttd_pemberibantuanhukum'               => $ttd_pemberibantuanhukum->hashName(),
            // laporan pelaksanaan Kegiatan mediasi
            'hari_mediasi'                          => $request->hari_mediasi,
            'tanggal_mediasi'                       => $request->tanggal_mediasi,
            'bulan_mediasi'                         => $request->bulan_mediasi,
            'tahun_mediasi'                         => $request->tahun_mediasi,
            'dilaksanakan_mediasi'                  => $request->dilaksanakan_mediasi,
            'alamat_mediasi'                        => $request->alamat_mediasi,
            'pihak1_mediasi'                        => $request->pihak1_mediasi,
            'pihak1_alamat'                         => $request->pihak1_alamat,
            'pihak1_perkara'                        => $request->pihak1_perkara,
            'hasil_mediasi'                         => $request->hasil_mediasi,
            'ttd_pihak1'                            => $ttd_pihak1->hashName(),
            'ttd_pihak2'                            => $ttd_pihak2->hashName(),
            'namattd_pihak1'                        => $request->namattd_pihak1,
            'namattd_pihak2'                        => $request->namattd_pihak2,
            'ttd_mediator'                          => $ttd_mediator->hashName(),
            'namattd_mediator'                      => $request->namattd_mediator,
        ]);

        if ($suratPermohonan) {
            //redirect dengan pesan sukses
            return redirect()->route('pemohon.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('pemohon.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function cetak(Request $request, $email)
    {
        $bantuan = SuratPermohonan::where('email', $email)->get();
        $pdf = PDF::loadview('pemohon.surat.cetak', ['data' => $bantuan]);
        //dd($data);
        return $pdf->stream('surat_permohonan.pdf');
    }
}


// $surat = SuratPermohonan::latest()->get();
// return view('pemohon.surat.index', compact('surat'));
