<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller{

    public function indexNilai(){
        // mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
        return view('indexNilai',['nilaikuliah' => $nilaikuliah]);
    }

    public function tambahData(){
        // memanggil view tambah
        return view('tambahDataNilai');
        }

    public function storeData(Request $request){
        // insert data ke table pegawai
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/dbnilai');
    }
}
