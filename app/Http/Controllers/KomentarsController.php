<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use App\Models\Foto;
use App\Models\User;

class KomentarsController extends Controller
{

    public function index()
    {
        $komentars = Komentar::all(); 
        return view('fotos.index', compact('komentars'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto_id' => 'required|exists:fotos,id',
            'user_id' => 'required|exists:users,id',
            'komentar' => 'required|string',
        ]);
    
        // Periksa jumlah komentar
        $totalKomentars = Komentar::where('foto_id', $request->foto_id)->count();
        $maxKomentars = 5; // Maksimal 5 komentar
    
        if ($totalKomentars >= $maxKomentars) {
            return redirect()->back()->with('error', 'Jumlah maksimal komentar telah tercapai');
        }
    
        // Simpan komentar ke database
        $komentars = new Komentar;
        $komentars->foto_id = $request->foto_id;
        $komentars->user_id = auth()->id(); 
        $komentars->komentar = $validatedData['komentar'];
        $komentars->tanggal = now();
    
        $komentars->save();
        return redirect()->route('fotos.index')->with('success', 'Komentar berhasil ditambahkan.');
    }
    

    public function destroy($id)
    {
        $komentars = Komentarfoto::findOrFail($id);
        $komentars->delete();

        return redirect()->route('fotos.index')->with('success', 'Komentar berhasil dihapus.');
    }
}
