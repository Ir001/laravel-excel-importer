<?php

namespace App\Imports;

use App\Model\Regency;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RegencyImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Regency([
            'dagri_regency_id' => $row['dagri_regency_id'],
            'bps_regency_id' => $row['bps_regency_id'],
            'name' => $row['name'],
        ]);
    }
    public function headingRow(): int
    {
        return 2;
    }
}
