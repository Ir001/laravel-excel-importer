<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DagriProvince extends Model
{
    protected $table = 'dagri_provinces';

    protected $fillable = [
        'id',
        'name',
    ];

    public $timestamps = false;
}
