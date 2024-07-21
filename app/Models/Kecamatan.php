<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Regency;
use App\Models\Village;

/**
 * Kecamatan Model.
 */
class Kecamatan extends Model
{


    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'Kecamatans';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        't_kecamatan'
    ];

    /**
     * Kecamatan belongs to Regency.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */


    /**
     * Kecamatan has many villages.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function villages()
    {
        return $this->hasMany(Village::class);
    }
}
