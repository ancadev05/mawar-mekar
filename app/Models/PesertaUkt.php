<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaUkt extends Model
{
    use HasFactory;
    protected $guarded = [];

    // relasi ketabel pesilat
    public function pesilat()
    {
        return $this->belongsTo(Pesilat::class, 'pesilat_id');
    }
}
