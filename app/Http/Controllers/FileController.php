<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class FileController extends Controller
{
    public function store(Request $req)
    {
        if($req->hasFile('file_bukti')){
            $file = $req->file('file_bukti');
            $filename =  Auth::id().str_replace(' ', '_', $file->getClientOriginalName());
            $file->storeAs('files/bukti',$filename,'public');

            return $filename;
        }
        return '';
    }
    
    public function store_verif(Request $req)
    {
        if($req->hasFile('file_verifikator')){
            $file = $req->file('file_verifikator');
            $filename =  Auth::id().str_replace(' ', '_', $file->getClientOriginalName());
            $file->storeAs('files/verifikator',$filename,'public');

            return $filename;
        }
        return '';
    }

    public function store_inspek(Request $req)
    {
        if($req->hasFile('file_inspektur')){
            $file = $req->file('file_inspektur');
            $filename =  Auth::id().str_replace(' ', '_', $file->getClientOriginalName());
            $file->storeAs('files/inspektur',$filename,'public');

            return $filename;
        }
        return '';
    }

    public function delete()
    {
        
    }
}
