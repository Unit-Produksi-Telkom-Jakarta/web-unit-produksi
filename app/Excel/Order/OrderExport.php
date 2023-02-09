<?php

namespace App\Excel\Order;

use App\Models\Order;

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

class OrderExport implements FromQuery, WithHeadings, WithStyles, WithMapping, WithColumnFormatting
{
    use Exportable;

    public function query()
    {
        return Order::query()->select("id", "name", "email", "phone_number", "address", "request", "pic", "start_estimation", "end_estimation", "description", "status", "price");
    }

    public function headings(): array{
        return [
            '#',
            'Name',
            'Email',
            'Phone Number',
            'Address',
            'Request',
            'PIC',
            'Start Estimation',
            'End Estimation',
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

    public function map($orders): array {
        return [
            $orders->id,
            $orders->name,
            $orders->email,
            $orders->phone_number,
            $orders->address,
            $orders->request,
            $orders->pic,
            Date::stringToExcel($orders->start_estimation),
            Date::stringToExcel($orders->end_estimation),
            $orders->description,
            $orders->status,
            $orders->price,
        ];
    }

    public function columnFormats(): array {
        return [
            'H' => NumberFormat::FORMAT_DATE_YYYYMMDD,
            'I' => NumberFormat::FORMAT_DATE_YYYYMMDD,
        ];
    }
}
