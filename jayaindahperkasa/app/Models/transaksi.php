<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    public function detailTransaksi(){
        return $this->hasMany(detailtransaksi::class);
    }
}