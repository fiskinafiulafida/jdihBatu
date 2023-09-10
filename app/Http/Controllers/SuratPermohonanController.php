<?php

namespace App\Http\Controllers;

use App\Models\SuratPermohonan;
use Illuminate\Http\Request;

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
}


// $surat = SuratPermohonan::latest()->get();
// return view('pemohon.surat.index', compact('surat'));