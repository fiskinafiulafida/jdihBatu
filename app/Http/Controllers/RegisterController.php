<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('LogReg.Register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'                  => 'required|max:255',
            'jenisKelamin'          => 'required',
            'nik'                   => 'required',
            'noHp'                  => 'required',
            'alamat'                => 'required',
            'email'                 => 'required',
            'password'              => 'required|min:3|max:255',
            'usia'                  => 'required',
            'pekerjaan'             => 'required',
            'pendidikanTerakhir'    => 'required',
            'role'                  => 'required|in:operator,pengelolahbantuanhukum,analisishukum,obh,kabag,kuasahukumpemkot,staffdokumentasi,kasubaghukum,kepalapublikasi,staffhukum,pemohon',
        ]);

        Register::create([
            'name'                  => $request->name,
            'jenisKelamin'          => $request->jenisKelamin,
            'nik'                   => $request->nik,
            'noHp'                  => $request->noHp,
            'alamat'                => $request->alamat,
            'email'                 => $request->email,
            'password'              => bcrypt($request->password),
            'usia'                  => $request->usia,
            'pekerjaan'             => $request->pekerjaan,
            'pendidikanTerakhir'    => $request->pendidikanTerakhir,
            'role'                  => $request->role,
        ]);

        return redirect('/')->with('Pesan', 'Register Berhasil');
    }
}
