<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayatModel extends Model
{
    use HasFactory;
    protected $fillable = ['pasien_id','kamar_id','chech_in_date','chech_out_date'];

    public function pasien()
    {
        return $this->belongsTo(pasien::class);
    }

    public function kamar()
    {
        return $this->belongsTo(kamar::class);
    }
}
