<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function login()
    {
        return view('auth.login')->with(['title' => 'login']);
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'maaf anda harus memasukan email terlebih dahulu',
            'password.required' => 'maaf anda harus memasukan password terlebih dahulu',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role == 'administrator' || Auth::user()->role == 'petugas') {
                return redirect('/admin');
            }
            return redirect('/library');
        }
    }

    public function register()
    {
        return view('auth.register')->with(['title' => 'register']);
    }

    public function storeregis(Request $request)
    {

        $request->validate([
            'username' => 'required|unique:users,username',
            'nama_lengkap' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ], [
            'email.required' => 'maaf anda harus memasukan email terlebih dahulu',
            'password.required' => 'maaf anda harus memasukan password terlebih dahulu',
            'username.required' => 'maaf anda harus memasukan username terlebih dahulu',
            'nama_lengkap.required' => 'maaf anda harus memasukan nama_lengkap terlebih dahulu',
            'username.unique' => 'maaf sepertinya username yang anda masukan sudah ada mohon ganti username dengan username baru🙏',
            'email.email' => 'maaf anda  salah memasukan format email tolong masukan email dengan format yang benar',
            'email.unique' => 'maaf email yang anda masukan sudah di pakai',
        ]);


        User::create([
            'username' => $request->input('username'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'role' => 'peminjam',
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/library');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
