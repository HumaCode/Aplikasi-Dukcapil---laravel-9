<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use APP\Rules\Captcha;

class AuthController extends Controller
{
    public function index()
    {
        // cek sessionya
        if ($user = Auth::user()) {
            if ($user->level == '1') {
                return redirect()->intended('dashboard');
            } else if ($user->level == '2') {
                return redirect()->intended('home');
            }
        }


        // jika tidak ada session
        return view('auth');
    }

    public function loginProses(Request $request)
    {

        // return $request->all();

        // validasi inputan
        $request->validate(

            [
                'nik'       => 'required',
                'password'  => 'required',
            ],

            // error bhs indo
            [
                'nik.required'      => 'NIK tidak  boleh kosong',
                'password.required' => 'Password tidak  boleh kosong',
            ],

        );

        // kredensial kusus untuk nik dan password
        $kredensial = $request->only('nik', 'password');

        // pengecekan nik dan password
        if (Auth::attempt($kredensial)) {
            // buat session
            $request->session()->regenerate();

            // jika nik dan password cocok maka ambil data loginya
            $user = Auth::user();

            // pengecekan level apakah level 1 atau 2 (1 = admin, 2 = user biasak)
            if ($user->level == '1') {
                return redirect()->intended('dashboard');
            } else if ($user->level == '2') {
                return redirect()->intended('home');
            }

            return redirect()->intended('/');
        }

        // tampilkan pesan error
        return back()->with('error', 'Guuoobloogg');
    }

    public function registerProses(Request $request)
    {
        // // validasi inputan
        $validatedData = $request->validate(
            [
                'nik'           => 'required|unique:users',
                'no_kk'         => 'required|unique:users',
                'nama_leng'     => 'required',
                'tlp'           => 'required',
                'email'         => 'required|unique:users',
                'password'      => 'required|min:6',
                'g-recaptcha-response'           => new Captcha(),
            ],
        );

        User::create([
            'nik'           => $validatedData['nik'],
            'no_kk'         => $validatedData['no_kk'],
            'nama_leng'     => $validatedData['nama_leng'],
            'tlp'           => $validatedData['tlp'],
            'email'         => $validatedData['email'],
            'password'      => bcrypt($validatedData['password']),
            'level'         => 2,
        ]);


        // return redirect('login')->with('success', 'New category has been added ');
        return back()->with('success', 'Dibuat');
    }




    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
