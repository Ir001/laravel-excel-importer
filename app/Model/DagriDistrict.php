<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DagriDistrict extends Model
{
    protected $table = 'dagri_districts';

    protected $fillable = [
        'id',
        'regency_id',
        'name',
    ];

    public $timestamps = false;
}
