<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aduan;
use App\Http\Controllers\StatistikController;

class WelcomeController extends StatistikController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(app('App\Http\Controllers\StatistikController')->weekOfMonth(now()));
        
        $aduans = Aduan::all();
        $arr= [];
        if ($aduans->count() > 0) {
            foreach($aduans as $a){
            $status='Proses Verifikasi';
            $statusSwitch = $a->status;
            switch ($statusSwitch) {
                case 1:
                    $status="Proses Verifikasi";
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

                case 2||4:
                $status="Tidak Ditindaklanjuti";
                break;
                
                default:
                    $status='Proses Verifikasi';
                    break;
            }
            
            $datas[$a->id] = $status;
            }
            $result = array_count_values($datas);
        }
        else{
            $result = 0;
        }
        
        $data = $this->data();
        $lineChart=$data['lineChart'];
        $pieChart=$data['pieChart'];
        $barChart=$data['barChart'];
        $totalLaporan=$data['totalLaporan'];
        $avgDone=$data['avgDone'];
        return view('welcome2', compact('result','lineChart','pieChart','barChart','totalLaporan','avgDone'));
        // return view('welcome2')
        //     ->with([
        //         'arr' => $arr
        //     ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
