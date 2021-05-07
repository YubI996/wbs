<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function store(Request $req)
    {
        if($req->hasFile('file_bukti')){
            $file = $req->file('file_bukti');
            $filename =  $file->getClientOriginalName();
            $file->storeAs('files',$filename,'public');

            return $filename;
        }
        return '';
    }
}
