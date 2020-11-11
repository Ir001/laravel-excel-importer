<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DagriRegency extends Model
{
    protected $table = 'dagri_regencies';

    protected $fillable = [
        'id',
        'province_id',
        'name',
    ];

    public $timestamps = false;
}
