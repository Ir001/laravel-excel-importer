<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    protected $table = 'regencies';

    protected $fillable = [
        'dagri_regency_id',
        'dagri_province_id',
        'dagri_name',
        'bps_regency_id',
        'bps_province_id',
        'bps_name',
    ];

    public $timestamps = false;
}
