<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SKPDController extends Controller
{
    public function index()
    {
        return view('pemohon.bantuanHukum.desa.index');
    }
}
