<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aduan;

class StatistikController extends Controller
{
    public function data()
    {
        $totalLaporan = Aduan::All()->Count();
        $lineChart = app()->chartjs
            ->name('lineChart')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Minggu #1', 'Minggu #2', 'Minggu #3', 'Minggu #4', 'Minggu #5'])
            ->datasets([
                [
                    "label" => "Jumlah Laporan Per-Minggu",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [65, 59, 80, 81, 56],
                ]
                
            ])
            ->options([]);
            
            // pie chart
            $pieChart = app()->chartjs
                    ->name('pieChart')
                    ->type('pie')
                    ->size(['width' => 400, 'height' => 200])
                    ->labels(['Label x', 'Label y'])
                    ->datasets([
                        [
                            'backgroundColor' => ['#FF6384', '#36A2EB'],
                            'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                            'data' => [69, 59]
                        ]
                    ])
                    ->options([]);

            $barChart = app()->chartjs
                ->name('barChart')
                ->type('bar')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Label x', 'Label y'])
                ->datasets([
                    [
                        "label" => "My First dataset",
                        'backgroundColor' => ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                        'data' => [69, 59]
                    ],
                    [
                        "label" => "My First dataset",
                        'backgroundColor' => ['rgba(255, 99, 132, 0.3)', 'rgba(54, 162, 235, 0.3)'],
                        'data' => [65, 12]
                    ]
                ])
                ->options([]);
    return view('statistik', compact([
        'lineChart',
        'pieChart',
        'barChart',
        'totalLaporan'
    ]));

    }
}
