<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

    protected $fillable = [
        'dagri_district_id',
        'dagri_regency_id',
        'dagri_name',
        'bps_district_id',
        'bps_regency_id',
        'bps_name',
    ];

    public $timestamps = false;
}
