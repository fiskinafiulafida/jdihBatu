<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('LogReg.Login');
    }

    public function dologin(Request $request)
    {
        // validasi
        $credentials = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();

            if (auth()->user()->role === 'operator') {
                // jika user operator
                return redirect()->intended('/operator');
            }
            if (auth()->user()->role === 'pengelolahbantuanhukum') {
                // jika user pengelolahbantuanhukum
                return redirect()->intended('/pengelolahbantuanhukum');
            }
            if (auth()->user()->role === 'analisishukum') {
                // jika user analisishukum
                return redirect()->intended('/analisishukum');
            }
            if (auth()->user()->role === 'obh') {
                // jika user obh
                return redirect()->intended('/obh');
            }
            if (auth()->user()->role === 'kabag') {
                // jika user kabag
                return redirect()->intended('/kabag');
            }
            if (auth()->user()->role === 'kuasahukumpemkot') {
                // jika user kuasahukumpemkot
                return redirect()->intended('/kuasahukumpemkot');
            }
            if (auth()->user()->role === 'staffdokumentasi') {
                // jika user staffdokumentasi
                return redirect()->intended('/staffdokumentasi');
            }
            if (auth()->user()->role === 'kasubaghukum') {
                // jika user kasubaghukum
                return redirect()->intended('/kasubaghukum');
            }
            if (auth()->user()->role === 'kepalapublikasi') {
                // jika user kepalapublikasi
                return redirect()->intended('/kepalapublikasi');
            }
            if (auth()->user()->role === 'staffhukum') {
                // jika user staffhukum
                return redirect()->intended('/staffhukum');
            }
            if (auth()->user()->role === 'pemohon') {
                // jika user pemohon
                return redirect()->intended('/pemohon');
            } else {
                // jika user tidak memiliki role user
                return redirect()->intended('/');
            }
        }

        // kirimkan session error
        return back()->with('error', 'email atau password salah');
    }

    public function cek()
    {
        if (auth()->user()->role === 'operator') {
            return redirect('/operator');
        }
        if (auth()->user()->role === 'pengelolahbantuanhukum') {
            return redirect('/pengelolahbantuanhukum');
        }
        if (auth()->user()->role === 'analisishukum') {
            return redirect('/analisishukum');
        }
        if (auth()->user()->role === 'obh') {
            return redirect('/obh');
        }
        if (auth()->user()->role === 'kabag') {
            return redirect('/kabag');
        }
        if (auth()->user()->role === 'kuasahukumpemkot') {
            return redirect('/kuasahukumpemkot');
        }
        if (auth()->user()->role === 'staffdokumentasi') {
            return redirect('/staffdokumentasi');
        }
        if (auth()->user()->role === 'kasubaghukum') {
            return redirect('/kasubaghukum');
        }
        if (auth()->user()->role === 'kepalapublikasi') {
            return redirect('/kepalapublikasi');
        }
        if (auth()->user()->role === 'staffhukum') {
            return redirect('/staffhukum');
        }
        if (auth()->user()->role === 'pemohon') {
            return redirect('/pemohon');
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
