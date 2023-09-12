<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class JDIHController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function faq()
    {
        return view('pemohon.faq');
    }

    public function profiljdih()
    {
        return view('pemohon.profil');
    }

    // Berita jdih
    public function beritajdih()
    {
        $beritajdih = Berita::latest()->paginate(10);
        return view('pemohon.berita', compact('beritajdih'));
    }
    // detail berita jdih
    public function show($id)
    {
        $detailberita = Berita::findOrFail($id);
        return view('pemohon.beritadetail', ['detailberita' => $detailberita]);
    }
}
