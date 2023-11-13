<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $a = 3;
        $b = 7;
        $c = $a*$b;
        return "<h1>Hasil Perkalian = " . (string)$c . "</h1>";
    }

    public function showBlog(){
        $nama = "Wede";
        $alamat = "BME B33";
        $hoby = "Mancing";
        $umur = 20;
        return view('blog',['nama' => $nama ,'alamat' => $alamat, 'umur' => $umur]);
    }

    public function shownama($nama){
        return "Anda telah mengisikan : " . $nama; //$nama = "nama" (di web php).
    }

    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : " . $nama.", Alamat : " . $alamat;
    }
}
