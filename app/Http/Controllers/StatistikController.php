<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aduan;
use Carbon\Carbon;

class StatistikController extends Controller
{
    /**
     * Returns the number of week in a month for the specified date.
     *
     * @param string $date
     * @return int
     */
    function weekOfMonth($date) {
        // estract date parts
        list($y, $m, $d) = explode('-', date('Y-m-d', strtotime($date)));

        // current week, min 1
        $w = 1;

        // for each day since the start of the month
        for ($i = 1; $i <= $d; ++$i) {
            // if that day was a sunday and is not the first day of month
            if ($i > 1 && date('w', strtotime("$y-$m-$i")) == 0) {
                // increment current week
                ++$w;
            }
        }

        // now return
        return $w;
    }
    function getStatus(Aduan $aduan) : String
    {
        $status='Proses Verifikasi';
        $ver=$aduan->status_verifikasi;
        $val=$aduan->status_validasi;
        $hasil=$aduan->hasil_penyidikan;
        if($hasil===null){
            if ($val===null) {
                if($ver==2){
                    $status='Tidak Ditindaklanjuti';
                }
            }
            elseif($val==2){
                    $status='Tidak Ditindaklanjuti';
            }
            elseif($val==1){
                $status='Proses Pemeriksaan';
            }
        }
        elseif($hasil==2){
                $status='Tidak Terbukti';
        }
        elseif($hasil==1){
            $status='Terbukti';
        }
        if(! $aduan->tgl_selesai == null){
            $status = 'Selesai';
        }
        return $status;
    }
    
    public function data()
    {
        $a = Aduan::all();
        $m = [];
        foreach ($a as $val) {
            if($val->tgl_selesai!=null && $val->created_at != null){
                array_push($m,strtotime($val->tgl_selesai) - strtotime($val->created_at));
            }
        }
        $avg = (array_sum($m)/count($m));
        $bulan = round($avg/2419200);
        $avg = $avg%2419200;
        $hari = round($avg/86400);
        $avg = $avg%86400;
        $jam = round($avg/3600);
        $avgDone = ($bulan.' Bulan, '.$hari.' Hari, '. $jam.' Jam.');


        $totalLaporan = $a->Count();

        // data untuk grafik garis
        $weeks = $a->groupBy(function($date) 
                            {
                                return $this->weekOfMonth($date->created_at);
                            });
        $index = 0;
        $weekly=[];
        foreach ($weeks as $key => $value) {
            $weekly['Minggu #'.$key]=count($value);
        }
        
        //Data untuk grafik pie
        $stats = [];
        foreach ($a as $key => $value) {
            array_push($stats, $this->getStatus($value));
        }
        $result = array_count_values($stats);
        $names = ['Proses Verifikasi', 'Proses Pemeriksaan', 'Tidak Ditindaklanjuti','Terbukti','Tidak Terbukti', 'Selesai'];
        foreach ($names as $value) {
            if (! isset($result[$value])){
                $result[$value] = 0;
            }
        }
        // dd($result);
        $index = 0;
        $weekly=[];
        foreach ($weeks as $key => $value) {
            $weekly['Minggu #'.$key]=count($value);
        }
        // dd($j);
        $lineChart = app()->chartjs
            ->name('lineChart')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            // ->labels(['Minggu #1', 'Minggu #2', 'Minggu #3', 'Minggu #4', 'Minggu #5'])
            ->datasets([
                [
                    "label" => "Laporan masuk ".date('M Y'),
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $weekly,
                ]
                
            ])
            ->options([]);
            
            // pie chart
        $pieChart = app()->chartjs
                ->name('pieChart')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Proses Verifikasi', 'Proses Pemeriksaan', 'Tidak Ditindaklanjuti','Terbukti','Tidak Terbukti', 'Selesai'])
                ->datasets([
                    [
                        'backgroundColor' => ['rgba(0, 255, 255,0.5)', 'rgba(0,0,0,0.5)','rgba(242, 41, 10,0.5)','rgba(10, 242, 33,0.5)','rgba(238, 242, 10,0.5)','rgba(215, 10, 242,0.5)'],
                        'hoverBackgroundColor' => ['rgba(0, 255, 255)', 'rgba(0,0,0)','rgba(242, 41, 10)','rgba(10, 242, 33)','rgba(238, 242, 10)','rgba(215, 10, 242)'],
                        'data' => [$result["Proses Verifikasi"], $result["Proses Pemeriksaan"], $result["Tidak Ditindaklanjuti"],$result["Terbukti"],$result["Tidak Terbukti"], $result["Selesai"]]
                    ]
                ])
                ->options([]);

        // bar chart
        $barChart = app()->chartjs
            ->name('barChart')
            ->type('bar')
            ->size(['width' => 400, 'height' => 400])
            ->labels(['Jenis Pelanggaran'])
            ->datasets([
                [
                    "label" => "Pelanggaran Disiplin Pegawai",
                    'backgroundColor' => ['rgba(0, 255, 255,0.5)'],
                    'data' => [$a->where('jenis_aduan',1)->count()]
                ],
                [
                    "label" => "Narkoba",
                    'backgroundColor' => ['rgba(0,0,0,0.5)'],
                    'data' => [$a->where('jenis_aduan',8)->count()]
                ],
                [
                    "label" => "Pungutan Liar/Percaloan/Suap",
                    'backgroundColor' => ['rgba(242, 41, 10,0.5)'],
                    'data' => [$a->where('jenis_aduan',7)->count()]
                ],
                [
                    "label" => "pelanggaran dalam Pengadaan Barang dan Jasa",
                    'backgroundColor' => ['rgba(10, 242, 33,0.5)'],
                    'data' => [$a->where('jenis_aduan',6)->count()]
                ],
                [
                    "label" => "Korupsi",
                    'backgroundColor' => ['rgba(242, 176, 10,0.5)'],
                    'data' => [$a->where('jenis_aduan',5)->count()]
                ],
                [
                    "label" => "Perlakuan amoral/perselingkuhan",
                    'backgroundColor' => ['rgba(238, 242, 10,0.5)'],
                    'data' => [$a->where('jenis_aduan',4)->count()]
                ],
                [
                    "label" => "Mal Administrasi dan pemerasan/penganiayaan",
                    'backgroundColor' => ['rgba(49, 10, 242,0.5)'],
                    'data' => [$a->where('jenis_aduan',3)->count()]
                ],
                [
                    "label" => "Penyalahgunaan wewenang",
                    'backgroundColor' => ['rgba(215, 10, 242,0.5)'],
                    'data' => [$a->where('jenis_aduan',2)->count()]
                ]
            ])
            ->options([]);
    return view('statistik', compact([
        'lineChart',
        'pieChart',
        'barChart',
        'totalLaporan',
        'avgDone'
    ]));

    }
}
