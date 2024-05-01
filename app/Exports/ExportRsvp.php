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

class ExportRsvp implements FromArray, WithHeadings, WithEvents
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
                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(30);
                $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(20);

                $number = 1;
                $increment = 2;
                $start_number = $increment;

                foreach ($card as $index => $row) {
                    if ($number == $row['number']) {
                        $increment++;

                        // Check if it's the last row or if the next row has a different number
                        if ($index == count($card) - 1 || $card[$index + 1]['number'] != $number) {
                            $sheet->mergeCells("A{$start_number}:A" . ($increment - 1)); // Corrected cell reference
                        }

                        continue;
                    } else {
                        // Merge cells for the previous group with the same number
                        $sheet->mergeCells("A{$start_number}:A" . ($increment - 1)); // Corrected cell reference

                        // Move to the next group with a different number
                        $number = $row['number'];
                        $start_number = $increment;
                        $increment = $start_number + 1; // Reset increment for the new group
                    }
                }

                // Merge cells and add borders
                $sheet->getStyle('A1:D' . $total_rows + 1)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['rgb' => '000000'],
                        ],
                    ],
                ]);

                $event->sheet->getDelegate()->getStyle('A1:D' . $increment)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A1:D' . $increment)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

                $sheet->getStyle('A1:D1')->getFill()->applyFromArray(['fillType' => 'solid', 'rotation' => 0, 'color' => ['rgb' => 'D9D9D9'],]);
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
