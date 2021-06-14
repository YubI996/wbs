<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aduan;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aduans = Aduan::all();
        $arr= [];
        foreach($aduans as $a){
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
        
            $arr[$a->id] = $status;
        }
        // dd($arr);
        return view('welcome2');
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
