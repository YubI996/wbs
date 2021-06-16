<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aduan;
use Carbon\Carbon;
use DB;

class StatistikController extends Controller
{
    /**
     * Returns the number of week in a month for the specified date.
     *
     * @param string $date
     * @return int
     */
    function index()
    {
        // dd($this->data());
        return view('statistik', with($this->data()));
    }
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
        $statusSwitch = $aduan->status;
        switch ($statusSwitch) {
            case 1:
                $status="Proses Verifikasi";
                break;
            
            case 2||4:
                $status="Tidak Ditindaklanjuti";
                break;
            
            case 3:
                $status="Proses Pemeriksaan";
                break;

            case 5:
                $status="Terbukti";
                break;
            
            case 6:
                $status="Tidak Terbukti";
                break;
            
            case 7:
                $status="Selesai";
                break;

            default:
                $status='Proses Verifikasi';
                break;
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
        
        try {
            $avg = (array_sum($m)/count($m));
        } catch (\Throwable $th) {
            $avg=0;
        }
        $bulan = round($avg/2419200);
        $avg = $avg%2419200;
        $hari = round($avg/86400);
        $avg = $avg%86400;
        $jam = round($avg/3600);
        $avgDone = ($bulan.' Bulan, '.$hari.' Hari, '. $jam.' Jam.');


        $totalLaporan = $a->Count();

        // data untuk grafik garis
        // $weeks = $a->groupBy(function($date) 
        //                     {
        //                         // $i = 
        //                         return $this->weekOfMonth($date->created_at);
        //                     })->toArray();
        //select(DB::raw('count(id) as `data`'), DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"),  DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            // groupby(DB::raw('MONTH(created_at)'),function($date) 
            //                 {
            //                     // $i = 
            //                     return $this->weekOfMonth($date->created_at);
            //                 })
        $weeks = DB::table('aduans')
                    // ->WhereMonth('created_at',6)
                    ->get()
                    ->groupBy(function($date) {
                                    return Carbon::parse($date->created_at)->format('F');
                                })
                    ->toArray();
                    // dd($weeks);
        // ksort($weeks);

        $index = 0;
        $weekly=[];
        foreach ($weeks as $key => $value) {
            $weekly['Bulan '.$key]=count($value);
        }
        // dd($weekly);
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
            $weekly[$key]=count($value);
        }
        // dd($j);
        $lineChart = app()->chartjs
            ->name('lineChart')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            // ->labels(['Minggu #1', 'Minggu #2', 'Minggu #3', 'Minggu #4', 'Minggu #5'])
            ->datasets([
                [
                    "label" => "Laporan masuk ".date('Y'),
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $weekly,
                    
                ]
                
            ])
            ->options([
                'scales' => [
                    'yAxes' => [
                        'beginAtZero' => true
                    ]
                ]
            ]);
            
            // pie chart
        $pieChart = app()->chartjs
                ->name('pieChart')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Proses Verifikasi', 'Proses Pemeriksaan', 'Tidak Ditindaklanjuti','Terbukti','Tidak Terbukti', 'Selesai'])
                ->datasets([
                    [
                        'backgroundColor' => ['rgba(0, 255, 255,0.5)', 'rgba(0,0,0,0.5)','rgba(242, 41, 10,0.5)','rgba(10, 242, 33,0.5)','rgba(238, 242, 10,0.5)','rgba(215, 10, 242,0.5)'],
                        'hoverBackgroundColor' => ['rgba(0, 0, 255)', 'rgba(0,0,0)','rgba(242, 41, 10)','rgba(10, 242, 33)','rgba(238, 242, 10)','rgba(215, 10, 242)'],
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
    return compact([
        'lineChart',
        'pieChart',
        'barChart',
        'totalLaporan',
        'avgDone'
    ]);

    }
}
