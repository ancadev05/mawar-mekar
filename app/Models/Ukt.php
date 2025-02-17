<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukt extends Model
{
    use HasFactory;
    protected $guarded = [];

    // relasi ketabel pesilat
    public function pesilats()
    {
        return $this->hasMany(Pesilat::class);
    }
}
