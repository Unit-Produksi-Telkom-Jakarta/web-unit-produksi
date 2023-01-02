<?php

namespace App\Exports;

use App\Models\Form;

use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class FormExport implements FromQuery, WithHeadings, WithStyles, WithMapping, WithColumnFormatting
{
    use Exportable;

    public function query()
    {
        return Form::query()->select("id", "client_name", "client_email", "no_handphone", "alamat", "request", "pic", "mulai", "selesai", "keterangan", "status", "jumlah");
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

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }

    public function map($forms): array {
        return [
            $forms->id,
            $forms->client_name,
            $forms->client_email,
            $forms->no_handphone,
            $forms->alamat,
            $forms->request,
            $forms->pic,
            Date::stringToExcel($forms->mulai),
            Date::stringToExcel($forms->selesai),
            $forms->keterangan,
            $forms->status,
            $forms->jumlah,
        ];
    }

    public function columnFormats(): array {
        return [
            'H' => NumberFormat::FORMAT_DATE_YYYYMMDD,
            'I' => NumberFormat::FORMAT_DATE_YYYYMMDD,
        ];
    }
}
