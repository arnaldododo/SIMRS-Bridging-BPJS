<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_poli',
        'nama_poli',
        'kode_antrean'
    ];
}
