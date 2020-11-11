<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BpsProvince extends Model
{
    protected $table = 'bps_provinces';

    protected $fillable = [
        'id',
        'name',
    ];

    public $timestamps = false;
}
