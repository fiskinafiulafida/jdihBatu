<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Register;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile    = Register::latest()->get();
        $berita     = Berita::count();

        return view('profile.index', compact('profile', 'berita'));
    }

    public function edit(Register $profile)
    {
        $berita = Berita::count();

        return view('profile.edit', compact('profile', 'berita'));
    }

    public function update(Request $request, Register $profile)
    {
        $this->validate($request, [
            'name' => '',
            'email' => '',
            'jenisKelamin' => '',
            'nik' => '',
            'usia' => '',
            'pekerjaan' => '',
            'pendidikanTerakhir' => '',
            'noHp' => '',
            'alamat' => ''
        ]);

        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->jenisKelamin = $request->input('jenisKelamin');
        $profile->nik = $request->input('nik');
        $profile->usia = $request->input('usia');
        $profile->pekerjaan = $request->input('pekerjaan');
        $profile->pendidikanTerakhir = $request->input('pendidikanTerakhir');
        $profile->noHp = $request->input('noHp');
        $profile->alamat = $request->input('alamat');
        $profile->save();

        return redirect('/profile')->with('success', 'Profile Updated');
    }
}
