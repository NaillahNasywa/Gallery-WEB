<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums'; 

    protected $fillable = [
        'name', 
        'deskripsi',
        'tanggal', 
        'user_id'
    ];

    public function foto()
    {
        return $this->hasMany(Foto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
