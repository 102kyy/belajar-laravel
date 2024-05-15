<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baranglagi extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_baranglagi', 'harga', 'stok'];
    //protected $table = ['baranglagi'];
    public $timestamps = true;

    //relasi ke tabel transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
