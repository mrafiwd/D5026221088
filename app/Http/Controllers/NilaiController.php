<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller{

    public function indexNilai(){
        $nilaikuliah = DB::table('nilaikuliah')->get();

        return view('indexNilai',['nilaikuliah' => $nilaikuliah]);
    }

    public function tambahData(){

        return view('tambahDataNilai');
    }

    public function storeData(Request $request){

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks
        ]);

        return redirect('/dbnilai');
    }
}
