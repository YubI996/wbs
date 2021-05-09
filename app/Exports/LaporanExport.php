<?php

namespace App\Exports;

use App\Models\Aduan;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LaporanExport implements FromCollection, ShouldAutoSize,   WithMapping, WithHeadings
{
    use RemembersRowNumber;
    /**
    * @return \Illuminate\Support\Collection
    * @var Aduan $aduan
    */

    public function map($aduan): array
    {
        return [
            $currentRowNumber = $this->getRowNumber(),
            $aduan->created_at->format('l ,d F Y'),
            $aduan->user->name,
            $aduan->jenisAduan->name,
            $aduan->nama_terlapor
        ];
    }
    public function headings(): array
    {
        return [
            'No',
            'Tanggal Aduan',
            'Nama Pengadu',
            'Jenis Aduan',
            'Nama Terlapor'
        ];
    }
    public function collection()
    {
        return aduan::all();
    }
}
