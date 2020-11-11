<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

    protected $fillable = [
        'dagri_province_id',
        'dagri_name',
        'bps_province_id',
        'bps_name',
    ];

    public $timestamps = false;
}
