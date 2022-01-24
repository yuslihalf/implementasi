<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CusImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'id_customer' => $row['id_customer'],
            'nama' => $row['nama'],
            'alamat' => $row['alamat'],
            'subdis_id' => $row['kodepos'],
        ]);
    }
}
