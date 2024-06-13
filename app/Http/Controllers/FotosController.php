<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Album;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;

class FotosController extends Controller
{
    public function index()
    {
        $fotos = Foto::all();
        $albums = Album::all();
        $komentars = Komentar::all();
        return view('fotos.index', compact('fotos','albums', 'komentars'));
    }

    public function dataTable()
{
    $fotos = Foto::all();
    $userId = Auth::id(); // Mendapatkan ID pengguna yang sedang login
    $fotos = Foto::where('user_id', $userId)->get();
 
    return view('landingpage.dataTable', ['fotos' => $fotos]);
}

// public function exportExcel()
// {
//     return Excel::download(new FotosExport, 'fotos.xlsx');
// }

public function profile()
{
    $fotos = Foto::all();
    return view('landingpage.profile', compact('fotos'));
}

    public function create()
    {
        $albums = Album::all();
        $userAlbums = Album::where('user_id', auth()->id())->get();
        $albums = $userAlbums->count() > 0 ? $userAlbums : null;
        return view('fotos.create', compact('albums'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'album_id' => 'required|exists:albums,id',
        ]);

        $foto = new Foto;
        $foto->name = $request->name;
        $foto->deskripsi = $request->deskripsi;
        $foto->album_id = $request->album_id;
        $foto->user_id = auth()->id();

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destination = public_path('/images');
            $file->move($destination, $fileName);
            $foto->cover = $fileName;
        }

        $foto->save();
        return redirect()->route('fotos.index');
    }

    public function show($id)
    {
        $fotos = Foto::findOrFail($id);
        return view('fotos.show', compact('fotos'));
    }

    public function destroy($id)
    {
        $fotos = Foto::findOrFail($id);
        $fotos->delete();

        return redirect()->route('fotos.index')->with('success', 'Foto berhasil dihapus');
    }
}
