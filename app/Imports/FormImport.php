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
            'client_name'       => $row['0'],
            'client_email'      => $row['1'],
            'no_handphone'      => $row['2'],
            'alamat'            => $row['3'],
            'request'           => $row['4'],
            'pic'               => $row['5'],
            'mulai'             => $row['6'],
            'selesai'           => $row['7'],
            'keterangan'        => $row['8'],
            'jumlah'            => $row['9']
        ]);
    }
}
