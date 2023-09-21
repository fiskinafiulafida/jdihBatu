<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Register;
use Illuminate\Http\Request;

class ProfilePemohonController extends Controller
{
    public function index()
    {
        $profilePemohon = Register::latest()->get();

        return view('pemohon.profile.index', compact('profilePemohon'));
    }

    public function edit(Register $profilePemohon)
    {
        $berita = Berita::count();

        return view('pemohon.profile.edit', compact('profilePemohon', 'berita'));
    }

    public function update(Request $request, Register $profilePemohon)
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

        $profilePemohon->name = $request->input('name');
        $profilePemohon->email = $request->input('email');
        $profilePemohon->jenisKelamin = $request->input('jenisKelamin');
        $profilePemohon->nik = $request->input('nik');
        $profilePemohon->usia = $request->input('usia');
        $profilePemohon->pekerjaan = $request->input('pekerjaan');
        $profilePemohon->pendidikanTerakhir = $request->input('pendidikanTerakhir');
        $profilePemohon->noHp = $request->input('noHp');
        $profilePemohon->alamat = $request->input('alamat');
        $profilePemohon->save();

        return redirect('/profilePemohon')->with('success', 'Profile Updated');
    }
}
