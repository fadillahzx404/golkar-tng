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
        'tidak_sah',
        'dokumen',
        'status',
        'user',
        'user_verif',
        'paslon1',
        'paslon2',
        'jenis'
    ];

    /**
     * Get the kelRelation that owns the Rekapitulasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelRelation()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan', 'kode');
    }
    public function kecRelation()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan', 'kode');
    }

    public function userRelation()
    {
        return $this->belongsTo(User::class, 'user', 'nik');
    }
}
