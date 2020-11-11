<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BpsVillage extends Model
{
    protected $table = 'bps_villages';

    protected $fillable = [
        'id',
        'district_id',
        'name',
    ];

    public $timestamps = false;
}
