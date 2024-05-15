<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
     protected $fillable = ['id','nama_pembeli', 'kelamin'];
    //protected $table = ['pembeli'];
    public $timestamps = true;

    //relasi ke tabel transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
