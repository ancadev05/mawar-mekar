<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tingkatan extends Model
{
    use HasFactory;

    protected $guarded = [];

    // relasi ketabel pesilat - satu tingkatan bisa dimiliki oleh banyak pesilat
    public function pesilats()
    {
        return $this->hasMany(Pesilat::class);
    }
}
