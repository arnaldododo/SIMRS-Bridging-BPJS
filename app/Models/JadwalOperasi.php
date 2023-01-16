<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalOperasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'kode_booking',
        'no_bpjs',
        'tanggal_operasi',
        'jenis_tindakan',
        'poli_id',
        'terlaksana'
    ];
}
