<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;
    protected $fillable = ['tingkat','tersedia'];

    public function pasien()
    {
        return $this->hasMany(pasien::class);
    }

}