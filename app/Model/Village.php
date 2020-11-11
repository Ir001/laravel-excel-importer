<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table = 'villages';

    protected $fillable = [
        'dagri_village_id',
        'dagri_district_id',
        'dagri_name',
        'bps_village_id',
        'bps_district_id',
        'bps_name',
    ];

    public $timestamps = false;
}
