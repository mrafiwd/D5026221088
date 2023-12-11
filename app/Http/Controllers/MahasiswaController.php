<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller{

    public function indexMahasiswa(){
        $mahasiswa = DB::table('mahasiswa')->get();

        return view('indexMahasiswa',['mahasiswa' => $mahasiswa]);
    }

    // public function tambahData(){

    //     return view('tambahDataLipstick');
    // }

    // public function storeData(Request $request){

    //     DB::table('lipstick')->insert([
    //         'merklipstick' => $request->merk,
    //         'stocklipstick' => $request->stock,
    //         'tersedia' => $request->tersedia
    //     ]);

    //     return redirect('/dblipstick');
    // }

    public function edit($id){

        $mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();

        return view('editMahasiswa',['mahasiswa' => $mahasiswa]);
    }


    public function update(Request $request){

        DB::table('mahasiswa')->where('NRP',$request->id)->update([
            'NRP' => $request->nrp,
            'Nama' => $request->nama,
            'Jurusan' => $request->jurusan,
            'IPK' => $request->ipk
        ]);

        return redirect('/dbmahasiswa');
    }

    public function view($id){
        $mahasiswa = DB::table('mahasiswa')
        ->where('NRP', $id)
        ->get();

        return view('viewMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    // public function cari(Request $request)
	// {

	// 	$cari = $request->cari;

	// 	$lipstick = DB::table('lipstick')
	// 	->where('merklipstick','like',"%".$cari."%")
	// 	->paginate();

    // 		// mengirim data pegawai ke view index
	// 	return view('indexLipstick',['lipstick' => $lipstick]);

	// }


    // public function hapus($kode){
    //     DB::table('lipstick')->where('kodelipstick',$kode)->delete();

    //     return redirect('/dblipstick');
    // }

}
