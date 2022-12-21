<?php

namespace App\Imports;

use App\Models\Form;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Form([
            'client_name' => $row['Nama'],
            'client_email' => $row['Email'],
            'no_handphone' => $row['No Handphone'],
            'alamat' => $row['Alamat Rumah Customer'],
            'request' => $row['Kendala'],
            'pic' => $row['PIC'],
            'mulai' => $row['Mulai'],
            'selesai' => $row['Selesai'],
            'keterangan' => $row['Keterangan'],
            'status' => $row['Status'],
            'jumlah' => $row['Jumlah'],
        ]);
    }
}
