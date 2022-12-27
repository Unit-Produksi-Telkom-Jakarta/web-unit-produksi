<?php

namespace App\Exports;

use App\Models\Form;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class FormatDownload implements FromQuery, WithHeadings, WithMapping, WithStyles
{
    use Exportable;

    public function query()
    {
        return Form::query()->select('id', 'client_name', 'client_email', 'no_handphone', 'alamat', 'request', 'pic', 'mulai', 'selesai', 'keterangan', 'status', 'jumlah');
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Email',
            'No Handphone',
            'Alamat',
            'Kendala',
            'PIC',
            'Tanggal Mulai',
            'Estimasi Selesai',
            'Keterangan',
            'Status',
            'Jumlah'
        ];
    }

    public function map($forms): array{
        return [

        ];
    }

    public function styles(Worksheet $sheet){
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }

}
