<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\Kecamatan;

/**
 * Kelurahan Model.
 */
class Kelurahan extends Model
{

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 't_kelurahan';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'district_id'
    ];

    /**
     * Kelurahan belongs to District.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
