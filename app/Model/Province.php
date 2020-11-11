<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

    protected $fillable = [
        'dagri_province_id',
        'bps_province_id',
        'name',
    ];

    public $timestamps = false;
}
