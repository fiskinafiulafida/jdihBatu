<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'nik' => ['required', 'string'],
            'noHp' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'usia' => ['required', 'string'],
            'pekerjaan' => ['required', 'string'],
            'jenisKelamin' => ['required', 'string'],
            'pendidikanTerakhir' => ['required', 'string'],
            'role' => ['required', 'string']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nik' => $data['nik'],
            'noHp' => $data['noHp'],
            'alamat' => $data['alamat'],
            'usia' => $data['usia'],
            'pekerjaan' => $data['pekerjaan'],
            'jenisKelamin' => $data['jenisKelamin'],
            'pendidikanTerakhir' => $data['pendidikanTerakhir'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
