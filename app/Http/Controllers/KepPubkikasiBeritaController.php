<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class KepPubkikasiBeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('kepalapublikasi.berita.index', compact('berita'));
    }

    public function edit(Berita $kepalapublikasiberitum)
    {
        $berita = Berita::count();
        return view('kepalapublikasi.berita.edit', compact('kepalapublikasiberitum', 'berita'));
    }

    public function update(Request $request, $kepalapublikasiberitum)
    {
        $request->validate([
            'status'        => 'required',
            'keterangan'    => 'nullable',
        ]);
        $berita = Berita::find($kepalapublikasiberitum);
        $berita->update($request->all());
        return redirect()->route('kepalapublikasiberita.index')
            ->with('success', 'Berita updated successfully.');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect()->route('kepalapublikasiberita.index')
            ->with('success', 'Berita deleted successfully');
    }
}
