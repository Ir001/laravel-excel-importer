<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BpsRegency extends Model
{
    protected $table = 'bps_regencies';

    protected $fillable = [
        'id',
        'province_id',
        'name',
    ];

    public $timestamps = false;
}
