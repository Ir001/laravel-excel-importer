<?php

namespace App\Imports;

use App\Model\DagriProvince;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DagriProvinceImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DagriProvince([
            'id' => $row['id'],
            'name' => $row['name'],
        ]);
    }
    public function headingRow(): int
    {
        return 2;
    }
}
