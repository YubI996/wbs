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
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LaporanExport implements FromCollection, ShouldAutoSize,   WithMapping, WithHeadings, WithHeadingRow
{
    private $row = 0;
    use RemembersRowNumber;
    /**
    * @return \Illuminate\Support\Collection
    * @var Aduan $aduan
    */

    public function map($aduan): array
    {
        return [
            $currentRowNumber = ++$this->row,
            $aduan->created_at->format('l ,d F Y'),
            $aduan->user->name,
            $aduan->jenisAduan->name,
            $aduan->nama_terlapor
        ];
    }
    public function headings(): array
    {
        return [
                // [   'Tabel hasil Validasi Inspektur untuk yang ditindaklanjuti'],
                [
                    'No',
                    'Tanggal Aduan',
                    'Nama Pengadu',
                    'Jenis Aduan',
                    'Nama Terlapor'
                ]
        ];
    }
    public function headingRow(): int
    {
        return 2;
    }
    public function collection()
    {
        $aduan = aduan::where('status',1)->where('tgl_selesai',null)->orderByDesc('created_at')->get();
        return $aduan;
    }
}
