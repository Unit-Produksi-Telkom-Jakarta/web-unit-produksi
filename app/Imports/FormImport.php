<?php

namespace App\Imports;

use App\Models\Form;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FormImport implements ToModel, WithHeadingRow
{
    use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new Form([
            'client_name'       => $row['name'],
            'client_email'      => $row['email'],
            'no_handphone'      => $row['no_handphone'],
            'alamat'            => $row['customer_address'],
            'request'           => $row['problem'],
            'pic'               => $row['pic'],
            'mulai'             => date('Y-m-d H:i:s',$row['start']),
            'selesai'           => date('Y-m-d H:i:s',$row['end']),
            'keterangan'        => $row['description'],
            'status'            => $row['status'],
            'jumlah'            => $row['price']
        ]);
    }
}
