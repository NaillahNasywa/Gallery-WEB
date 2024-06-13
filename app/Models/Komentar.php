<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto_id',
        'user_id', 
        'komentar', 
        'tanggal'
    ];

    // Relasi dengan model Foto
    public function foto()
    {
        return $this->belongsTo(Foto::class);
    }

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}