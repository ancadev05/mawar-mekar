<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pesilat extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function tingkatan()
    {
        return $this->belongsTo(Tingkatan::class);
    }

    // relasi ke tabel cabang - satu pesilat hanya memiliki satu cabang
    public function cabang()
    {
        return $this->belongsTo(Cabang::class);
    }

    // relasi ke tabel unit - satu pesilat hanya memiliki satu unit
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    // relasi ketabel ukt
    public function uktTerakhir()
    {
        return $this->belongsTo(Ukt::class);
    }
}
