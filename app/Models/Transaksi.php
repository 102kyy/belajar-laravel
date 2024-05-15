<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_pembeli','kelamin','nama_baranglagi', 'jumlah', 'tanggal'];
    public $timestamps = true;


        public function pembeli()
    {
        return $this->BelongsTo(Pembeli::class, 'nama_pembeli');
        return $this->BelongsTo(Pembeli::class, 'kelamin');

    }

        public function baranglagi()
    {
        return $this->BelongsTo(Baranglagi::class, 'nama_baranglagi');
    }
}
