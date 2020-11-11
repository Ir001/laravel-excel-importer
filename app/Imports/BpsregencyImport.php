<?php

namespace App\Imports;

use App\Model\BpsRegency;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BpsregencyImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BpsRegency([
            'id' => $row['id'],
            'province_id' => $row['province_id'],
            'name' => $row['name'],
        ]);
    }
    public function headingRow(): int
    {
        return 2;
    }
}
