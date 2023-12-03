@extends('master2')
@section('title','Tambah Database Pegawai')
@section('judul_halaman')

@endsection

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Data Pegawai</h3>

	<a class="btn btn-primary" href="/dbpegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/dbpegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class = "form-group">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-10">
               <input  name="nama" type = "text" required = "required" class = "form-control" id = "nama" placeholder = "Masukan Nama">
            </div>
         </div>
         <div class = "form-group">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-10">
               <input  name="jabatan" type = "text" required = "required" class = "form-control" id = "jabatan" placeholder = "Masukan Jabatan">
            </div>
         </div>
         <div class = "form-group">
            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-10">
               <input name = "umur" type = "number"  required = "required" class = "form-control" id = "umur" placeholder = "Masukan Umur">
            </div>
         </div>
         <div class = "form-group">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-10">
                <textarea required="required" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat"></textarea>
            </div>
         </div>
        <br>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
