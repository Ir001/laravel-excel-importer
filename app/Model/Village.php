<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table = 'villages';

    protected $fillable = [
        'dagri_village_id',
        'bps_village_id',
        'name',
    ];

    public $timestamps = false;
}
