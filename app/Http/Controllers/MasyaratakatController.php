<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasyaratakatController extends Controller
{
    public function index()
    {
        return view('pemohon.bantuanHukum.masyarakat.index');
    }
}
