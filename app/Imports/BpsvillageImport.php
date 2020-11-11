<?php

namespace App\Imports;

use App\Model\BpsVillage;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BpsvillageImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BpsVillage([
            'id' => $row['id'],
            'district_id' => $row['district_id'],
            'name' => $row['name'],
        ]);
    }
    public function headingRow(): int
    {
        return 2;
    }
}
