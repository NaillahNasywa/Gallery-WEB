<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Foto;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function index()
    {
        
        $albums = Album::with('foto')->get();
        // $albums = Album::all();
        // $albums = Auth::user()->albums;

        return view('albums.index', compact('albums'));
    }

    public function dataTable()
    {
        $albums = Album::all();
        $userId = Auth::id(); // Mendapatkan ID pengguna yang sedang login
        $albums = Album::where('user_id', $userId)->get();
     
        return view('landingpage.export', ['albums' => $albums]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
        ]);

        Album::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'tanggal' => now(),
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('profile.index')->with('success', 'Album berhasil ditambahkan');
    }

    public function show($id)
    {
        $album = Album::findOrFail($id);
        $fotos = Foto::where('album_id', $id)->get(); // Mendapatkan semua foto yang terkait dengan album
        return view('albums.show', compact('album', 'fotos'));
    }
    
    public function edit($id)
    {
    $album = Album::findOrFail($id);
    return view('albums.edit', compact('album'));
    }

    public function update(Request $request, $id)
    {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'deskripsi' => 'required',
        
        // Tambahkan validasi untuk input lainnya jika diperlukan
    ]);

    $album = Album::findOrFail($id);
    $album->name = $request->name;
    $album->deskripsi = $request->deskripsi;
    // Update atribut lainnya jika diperlukan
    $album->save();

    return redirect()->route('profile.index')->with('success', 'Album successfully updated.');
    }


    public function destroy($id)
    {
        $albums = Album::findOrFail($id);
        $albums->delete();

        return redirect()->route('albums.index')->with('success', 'Foto berhasil dihapus');
    }
}
