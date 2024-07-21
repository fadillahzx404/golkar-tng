<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekapitulasi extends Model
{
    use HasFactory;
    protected $table = 't_rekap';

    protected $fillable = [
        'kecamatan',
        'kelurahan',
        'tps',
        'dpt',
        'sah',
        'tidak-sah',
        'dokumen',
        'status',
        'user',
        'user_verif',
        'paslon1',
        'paslon2',
        'jenis'
    ];
}
