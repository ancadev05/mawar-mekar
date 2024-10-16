<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $guarded = [];

    // relasi ke tabel cabang banyak ke satu
    // satu unit memiliki satu cabang
    public function cabang()
    {
        return $this->belongsTo(Cabang::class);
    }

    // relasi ketabel pesilat satu ke banyak
    // satu unit dimiliki banyak pesilat
    public function pesilats()
    {
        return $this->hasMany(Pesilat::class);
    }
}
