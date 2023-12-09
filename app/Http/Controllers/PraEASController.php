<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PraEASCOntroller extends Controller{

    public function indexLipstick(){
        $lipstick = DB::table('lipstick')->get();

        return view('indexLipstick',['lipstick' => $lipstick]);
    }

    public function tambahData(){

        return view('tambahDataLipstick');
    }

    public function storeData(Request $request){

        DB::table('lipstick')->insert([
            'merklipstick' => $request->merk,
            'stocklipstick' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/dblipstick');
    }

    public function edit($kode){

        $lipstick = DB::table('lipstick')->where('kodelipstick',$kode)->get();

        return view('editLipstick',['lipstick' => $lipstick]);
    }


    public function update(Request $request){

        DB::table('lipstick')->where('kodelipstick',$request->id)->update([
            'merklipstick' => $request->merk,
            'stocklipstick' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/dblipstick');
    }

    public function cari(Request $request)
	{

		$cari = $request->cari;

		$lipstick = DB::table('lipstick')
		->where('merklipstick','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexLipstick',['lipstick' => $lipstick]);

	}


    public function hapus($kode){
        DB::table('lipstick')->where('kodelipstick',$kode)->delete();

        return redirect('/dblipstick');
    }

}
