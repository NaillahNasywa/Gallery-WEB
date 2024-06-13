<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Album;
use App\Models\Foto;

class ProfileController extends Controller
{
  public function index()
  {
    $albums = Album::all();
      $userId = Auth::id(); // Mendapatkan ID pengguna yang sedang login
      $fotos = Foto::where('user_id', $userId)->get(); // Mengambil foto berdasarkan user ID
      $albums = Album::where('user_id', $userId)->get();

      return view('profile.index', ['fotos' => $fotos, 'albums' => $albums]);
  }

  // public function album()
  // {
  //    $albums = Album::all();
  //     return view('profile.index', compact('albums'));
  // }
}
