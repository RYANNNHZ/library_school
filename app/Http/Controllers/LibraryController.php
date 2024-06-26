<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\buku_kategori;
use App\Models\kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.home')->with(['title' => 'home', 'buku' => buku::all()]);
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('content.show')->with(['title' => 'show', 'buku' => buku::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('content.edit')->with(['title' => 'edit', 'buku' => buku::find($id), 'category' => kategori::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
        ]);

        DB::transaction(function () use ($request, $id) {
            buku::find($id)->update([
                'judul' => $request->input('judul'),
                'penulis' => $request->input('penulis'),
                'penerbit' => $request->input('penerbit'),
                'tahun_terbit' => date('Y-m-d H:i:s'),
            ]);

            if ($request->input('kategori')) {
                buku_kategori::where('buku_id', $id)->delete();
                foreach ($request->kategori as $key) {
                    buku_kategori::create([
                        'buku_id' => $id,
                        'kategori_id' => $key,
                    ]);
                }
            }
        });

        return redirect('/admin')->with('sukses', 'berhasil mengedit buku');
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
        $data = [
            'books' => buku::all()->count(),
            'categories' => kategori::all()->count(),
            'users' => User::all()->count(),
            'petugases' => User::where('role', 'petugas')->count(),

        ];


        return view('content.admin')->with(['title' => 'admin', 'buku' => buku::paginate(3), 'kategori' => kategori::all(), 'data' => $data]);
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


    public function addBook()
    {
        return view('content.addBook')->with(['title' => 'addBook', 'category' => kategori::all()]);
    }

    public function addBookstore(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'kategori' => 'required',
        ]);


        DB::transaction(function () use ($request) {
            $buku = buku::create([
                'judul' => $request->input('judul'),
                'penulis' => $request->input('penulis'),
                'penerbit' => $request->input('penerbit'),
                'tahun_terbit' => date('Y-m-d H:i:s'),
            ]);

            foreach ($request->kategori as $key) {
                buku_kategori::create([
                    'buku_id' => $buku->id,
                    'kategori_id' => $key,
                ]);
            }
        });



        return redirect('/addBook')->with('sukses', 'berhasil memasukan data');
    }


    public function del($id)
    {
        buku::find($id)->delete();
        return redirect('/admin');
    }


    public function addcategory()
    {
        return view('content.addcategory')->with(['title' => 'addcategory']);
    }


    public function storecategory(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ], [
            'nama_kategori.required' => 'mohon masukan category baru',
        ]);

        kategori::create([
            'nama_kategori' => $request->input('nama_kategori')
        ]);

        return redirect('/addcategory');
    }


    public function delcategory($id)
    {

        kategori::find($id)->delete();
        return redirect('/admin');
    }


    public function cari(Request $request)
    {
        $cari = $request->input('cari');
        $buku = buku::whereAny(['judul', 'penulis', 'penerbit'], 'like', "%$cari%")->get();
        return view('content.home')->with(['title' => 'home', 'buku' => $buku]);
    }


    public function bookmark($id)
    {
        $user = User::find($id);
        return view('content.bookmark')->with(['title' => 'bookmark', 'user' => $user]);
    }

    public function Udashboard($id)
    {

        $user = User::find($id);
        return view('content.pinjam')->with(['title' => 'pinjam', 'user' => $user]);
    }
}
