<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryawanModel;
use App\Models\ProfesiModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username'  => ['required'],
            'password'  => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->status != 1) {
                return redirect('login')->with('status', 'USER AKUN BELUM DI AKTIFKAN !');
            }

            if (Auth::user()->status == 1) {
                if (Auth::user()->role == 1) {
                    $nama           = KaryawanModel::where('id', Auth::user()->iduser)->first()->nama;

                    $profesi        = KaryawanModel::where('id', Auth::user()->iduser)->first()->profesi;
                    $dataprofesi    = ProfesiModel::where('id', $profesi)->first()->jenisprofesi;

                    Session::put('nama', $nama);
                    Session::put('profesi', $dataprofesi);
                    return redirect('dashboard');
                }
            }
        }
        return redirect('login')->with('status', 'USER AKUN TIDAK DITEMUKAN !');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
        session()->forget('nama');
        session()->forget('profesi');
    }
}
