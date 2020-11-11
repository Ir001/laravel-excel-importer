<?php

namespace App\Imports;

use App\Model\Village;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class VillageImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Village([
            'dagri_village_id' => $row['dagri_village_id'],
            'bps_village_id' => $row['bps_village_id'],
            'name' => $row['name'],
        ]);
    }
    public function headingRow(): int
    {
        return 2;
    }
}
