<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelAkun extends Model
{
    use HasFactory;

    protected $guarded = [];

    // satu level dimiliki banyak user
    public function users()
    {
        return $this->hasMany(User::class);
    }
}


