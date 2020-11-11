<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    protected $table = 'regencies';

    protected $fillable = [
        'dagri_regency_id',
        'bps_regency_id',
        'name',
    ];

    public $timestamps = false;
}
