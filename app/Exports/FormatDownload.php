<?php

namespace App\Exports;

use App\Models\Form;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class FormatDownload implements FromQuery, WithHeadings, WithStyles
{
    use Exportable;

    public function query()
    {
        return Form::query()->select('id', 'client_name', 'client_email', 'no_handphone', 'alamat', 'request', 'pic', 'mulai', 'selesai', 'keterangan', 'status', 'jumlah');
    }

    public function headings(): array{
        return [
            '#',
            'Name',
            'Email',
            'No Handphone',
            'Customer Address',
            'Problem',
            'PIC',
            'Start',
            'End',
            'Description',
            'Status',
            'Price',
        ];
    }


    public function styles(Worksheet $sheet){
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }
}
