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
            'name'                      => 'required',
            'email'                     => 'required',
        ]);

        //get data User by ID
        $profile = Register::findOrFail($profile->id);

        if ($request->file('profile') == "") {

            $profile->update([
                'name'                  => $request->name,
                'email'                 => $request->email,
            ]);
        } else {

            //hapus old image
            Storage::disk('local')->delete('public/image/' . $profile->profile);

            //upload new image
            $profile = $request->file('profile');
            $profile->storeAs('public/image', $profile->hashName());

            $profile->update([
                'profile'           => $profile->hashName(),
                'name'              => $request->name,
                'email'             => $request->email,
            ]);
        }

        if ($profile) {
            //redirect dengan pesan sukses
            return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('profile.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
