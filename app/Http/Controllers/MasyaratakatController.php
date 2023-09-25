<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\BantuanHukum;
use Illuminate\Http\Request;

class MasyaratakatController extends Controller
{
    public function index()
    {
        $bantuan = BantuanHukum::latest()->get();
        return view('pemohon.bantuanHukum.masyarakat.index', compact('bantuan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'skpd'           => 'required',
            'langkahlangkah' => 'required',
            'uraian'         => 'required',
            'harapan'        => 'required',
            'tanggapan'      => 'required',
            'ktp'            => 'required|image|mimes:png,jpg,jpeg',
            'permohonan'     => 'required|image|mimes:png,jpg,jpeg'
        ]);

        //upload image
        $ktp = $request->file('ktp');
        $permohonan = $request->file('permohonan');
        $ktp->storeAs('public/image', $ktp->hashName());
        $permohonan->storeAs('public/image', $permohonan->hashName());

        $berita = BantuanHukum::create([
            'skpd'                  => $request->skpd,
            'langkahlangkah'        => $request->langkahlangkah,
            'uraian'                => $request->uraian,
            'harapan'               => $request->harapan,
            'tanggapan'             => $request->tanggapan,
            'user_id'               => Auth::id(), // Mengambil ID pengguna yang login
            'ktp'                   => $ktp->hashName(),
            'permohonan'            => $permohonan->hashName()
        ]);

        if ($berita) {
            //redirect dengan pesan sukses
            return redirect()->route('pemohon.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('bantuanMasyarakat.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function berhasil()
    {
        return view('pemohon.bantuanHukum.masyarakat.berhasil');
    }
}
