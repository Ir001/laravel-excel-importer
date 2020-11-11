<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BpsDistrict extends Model
{
    protected $table = 'bps_districts';

    protected $fillable = [
        'id',
        'regency_id',
        'name',
    ];

    public $timestamps = false;
}
