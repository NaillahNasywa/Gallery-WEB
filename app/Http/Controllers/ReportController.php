<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $userId = Auth::id(); // Mendapatkan ID pengguna yang sedang login

        // Mengambil jumlah album dan foto
        $albumCount = Album::where('user_id', $userId)->count();
        $fotoCount = Foto::where('user_id', $userId)->count();

        // Mengambil foto dan album berdasarkan user ID
        $albums = Album::where('user_id', $userId)->get();
        $fotos = Foto::where('user_id', $userId)->get();

        // Memeriksa apakah kedua koleksi kosong
        $isEmptyAlbums = $albums->isEmpty();
        $isEmptyFotos = $fotos->isEmpty();

        // Mengirim data ke tampilan hanya jika kedua koleksi tidak kosong
        if (!$isEmptyAlbums || !$isEmptyFotos) {
            return view('report.index', compact('albumCount', 'fotoCount', 'albums', 'fotos'));
        } else {
            // Jika kedua koleksi kosong, tampilkan pesan yang sesuai
            return view('report.index', compact('albumCount', 'fotoCount','albums','fotos'));
        }
    }

}
