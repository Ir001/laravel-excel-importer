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
            //
        ]);
    }
    public function headingRow(): int
    {
        return 2;
    }
}
