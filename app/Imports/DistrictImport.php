<?php

namespace App\Imports;

use App\Model\District;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DistrictImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new District([
            'dagri_district_id' => $row['dagri_district_id'],
            'dagri_regency_id' => $row['dagri_regency_id'],
            'dagri_name' => $row['dagri_name'],
            'bps_district_id' => $row['bps_district_id'],
            'bps_regency_id' => $row['bps_regency_id'],
            'bps_name' => $row['bps_name'],
        ]);
    }
    public function headingRow(): int
    {
        return 2;
    }
}
