<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DagriVillage extends Model
{
    protected $table = 'dagri_villages';

    protected $fillable = [
        'id',
        'district_id',
        'name',
    ];

    public $timestamps = false;
}
