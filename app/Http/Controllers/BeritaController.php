<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Berita;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('operator.berita.index', compact('berita'));
    }

    public function create()
    {
        $berita = Berita::count();

        return view('operator.berita.create', compact('berita'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_berita'      => 'required',
            'isi_berita'        => 'required',
            'status'            => 'required',
            'keterangan'        => 'required',
            'gambar_berita'     => 'required|image|mimes:png,jpg,jpeg',
        ]);

        //upload image
        $gambar_berita = $request->file('gambar_berita');
        $gambar_berita->storeAs('public/image', $gambar_berita->hashName());

        $berita = Berita::create([
            'judul_berita'      => $request->judul_berita,
            'isi_berita'        => $request->isi_berita,
            'status'            => $request->status,
            'keterangan'        => $request->keterangan,
            'gambar_berita'     => $gambar_berita->hashName(),
        ]);

        if ($berita) {
            //redirect dengan pesan sukses
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('berita.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Berita $beritum)
    {
        $berita = Berita::count();

        return view('operator.berita.edit', compact('beritum', 'berita'));
    }

    public function update(Request $request, Berita $beritum)
    {
        $this->validate($request, [
            'judul_berita'      => 'required',
            'isi_berita'        => 'required',
        ]);

        //get data Berita by ID
        $beritum = Berita::findOrFail($beritum->id);

        if ($request->file('gambar_berita') == "") {

            $beritum->update([
                'judul_berita'      => $request->judul_berita,
                'isi_berita'        => $request->isi_berita,
            ]);
        } else {

            //hapus old image
            Storage::disk('local')->delete('public/image/' . $beritum->gambar_berita);

            //upload new image
            $gambar_berita = $request->file('gambar_berita');
            $gambar_berita->storeAs('public/image', $gambar_berita->hashName());

            $beritum->update([
                'gambar_berita'     => $gambar_berita->hashName(),
                'judul_berita'      => $request->judul_berita,
                'nama_berita'       => $request->nama_berita,
            ]);
        }

        if ($beritum) {
            //redirect dengan pesan sukses
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('berita.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        Storage::disk('local')->delete('public/image/' . $berita->gambar_berita);
        $berita->delete();

        if ($berita) {
            //redirect dengan pesan sukses
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('berita.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
