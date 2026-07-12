<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'nama',
        'rasa',
        'harga',
        'foto',
        'deskripsi',
        'bahan',
        'langkah'
    ];
}