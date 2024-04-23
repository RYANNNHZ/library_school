<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.home')->with(['title' => 'home']);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.create')->with(['title' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            ''
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function admin()
    {
        return view('content.admin')->with(['title' => 'admin']);
    }


    public function addPetugas()
    {

        return view('content.addPetugas')->with(['title' => 'addPetugas']);
    }


    public function addPetugasstore(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'nama_lengkap' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ], [
            'email.required' => 'mohon masukan email petugas',
            'password.required' => 'mohon masukan password petugas',
            'username.required' => 'mohon masukan username petugas',
            'nama_lengkap.required' => 'mohon masukan nama lengkap petugas',
            'username.unique' => 'sepertinya username petugas yang anda input sudah di pakai mohon ganti username petugas',
            'email.email' => 'maaf anda  salah memasukan format email tolong masukan email dengan format yang benar',
            'email.unique' => 'maaf email yang anda masukan sudah di pakai',
        ]);

        User::create([
            'username' => $request->input('username'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'role' => 'petugas',
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect('/addPetugas');
    }


    public function addBook(){

        return view('content.addBook')->with(['title' => 'addBook','category' => kategori::all()]);
    }
}
