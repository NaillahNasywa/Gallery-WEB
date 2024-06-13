<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LikeFoto;
use App\Models\Foto;
use App\Models\User;

class LikefotosController extends Controller
{
        public function like($id)
        {
            $fotos = Foto::findOrFail($id);
    
            // Cek apakah pengguna sudah melakukan like pada foto ini
            $existingLike = Likefoto::where('foto_id', $fotos->id)
                                    ->where('user_id', auth()->id())
                                    ->first();
    
            if ($existingLike) {
                // Jika pengguna sudah melakukan like, hapus like tersebut
                $existingLike->delete();
                return redirect()->back()->with('success', 'Like dihapus.');
            } else {
                // Jika pengguna belum melakukan like, tambahkan like baru
                Likefoto::create([
                    'foto_id' => $fotos->id,
                    'user_id' => auth()->id(),
                    'tanggal' => now(),
                ]);
                return redirect()->route('fotos.index')->with('success', 'Liked.');
            }
        }
}
