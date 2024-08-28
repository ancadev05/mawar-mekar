<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $guarded = [];

    // relasi ke tabel cabang banyak ke satu
    public function cabang()
    {
        return $this->belongsTo(Cabang::class);
    }

    // relasi ketabel pesilat satu ke banyak
    public function units()
    {
        return $this->hasMany(Pesilat::class);
    }
}
