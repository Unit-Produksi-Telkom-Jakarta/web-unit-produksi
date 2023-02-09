<?php

namespace App\Excel\Order;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class OrderImport implements ToModel, WithHeadingRow
{
    use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new Order([
            'name'              => $row['name'],
            'email'             => $row['email'],
            'phone_number'      => $row['phone_number'],
            'address'           => $row['address'],
            'request'           => $row['request'],
            'pic'               => $row['pic'],
            'start_estimation'  => Date::excelToDateTimeObject($row['start_estimation']),
            'end_etimation'     => Date::excelToDateTimeObject($row['end_estimation']),
            'description'       => $row['description'],
            'status'            => $row['status'],
            'price'             => $row['price']
        ]);
    }
}
