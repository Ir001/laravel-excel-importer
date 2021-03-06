<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

    protected $fillable = [
        'dagri_district_id',
        'bps_district_id',
        'name',
    ];

    public $timestamps = false;
}
