<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesilat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tingkatan()
    {
        return $this->belongsTo(Tingkatan::class);
    }

    // relasi ke tabel cabang - satu pesilat hanya memiliki satu cabang
    public function cabang()
    {
        return $this->belongsTo(Cabang::class);
    }
}
