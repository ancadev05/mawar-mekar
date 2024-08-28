<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $guarded = [];

    // relasi ke tabel cabang
    public function cabang()
    {
        return $this->belongsTo(Cabang::class);
    }
}
