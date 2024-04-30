<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrang extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama', 'jumlah'];
    public $timestamps = true;
}
