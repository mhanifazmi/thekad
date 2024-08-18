<?php

namespace App\Exports;

use App\Models\Rsvp;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class ExportRsvp2 implements FromArray, WithHeadings, WithEvents
{
    protected $card;

    public function __construct($card)
    {
        $this->card = $card;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function array(): array
    {
        return $this->card;
    }

    public function headings(): array
    {
        // Define the headings for the Excel file
        return [
            '#',
            'Name',
            'Pax',
            'Email',
            'Contact',
        ];
    }

    public function registerEvents(): array
    {
        $total_rows = count($this->card);
        $card = $this->card;
        return [
            AfterSheet::class => function (AfterSheet $event) use ($total_rows, $card) {
                $sheet = $event->sheet->getDelegate();

                $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(10);
                $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(40);
                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(20);
                $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(30);
                $event->sheet->getDelegate()->getColumnDimension('E')->setWidth(20);

                $sheet->getStyle('A1:E1')->getFill()->applyFromArray(['fillType' => 'solid', 'rotation' => 0, 'color' => ['rgb' => 'D9D9D9'],]);
            },
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }
}
