<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{

    use HasFactory;

    protected $table = 'fotos';

    protected $fillable = [
        'name', 
        'deskripsi',
        'tanggal',
        'cover', 
        'album_id', 
        'user_id'
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likefoto()
    {
        return $this->hasMany(Likefoto::class);
    }

    // Menghitung jumlah likes
    public function likefotoCount()
    {
        return $this->likefoto->count();
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }

    public function jumlahKomentar()
    {
        return $this->komentar()->count();
    }
}
