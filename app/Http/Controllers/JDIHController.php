<?php

namespace App\Http\Controllers;

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
}
