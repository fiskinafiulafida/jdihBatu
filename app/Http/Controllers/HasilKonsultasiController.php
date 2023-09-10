<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilKonsultasiController extends Controller
{
    public function index()
    {
        return view('pemohon.surat.konsul');
    }
}
