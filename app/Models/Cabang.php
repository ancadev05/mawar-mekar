<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    // relasi ketabel pesilat - satu cabang bisa dimiliki oleh banyak pesilat
    public function pesilats()
    {
        return $this->hasMany(Pesilat::class);
    }
}
