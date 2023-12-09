@extends('master2')
@section('title','Tambah Database Lipstick')
@section('judul_halaman')

@endsection

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Data </h3>

	<a class="btn btn-primary" href="/dbnilai"> Kembali</a>

	<br/>
	<br/>

	<form action="/dbnilai/storeData" method="post" class="form-horizontal">
		{{ csrf_field() }}

         <div class = "form-group">
            <label for = "nrp" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-10">
               <input  name="nrp" type = "number" required = "required" class = "form-control" id = "nrp" placeholder = "Masukan NRP">
            </div>
         </div>
         <div class = "form-group">
            <label for = "nilaiangka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-10">
               <input name = "nilaiangka" type = "number"  required = "required" class = "form-control" id = "nilaiangka" placeholder = "Masukan Nilai ANgka">
            </div>
         </div>
         <div class = "form-group">
            <label for = "sks" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-10">
                <input required="required" name="sks" class="form-control" id="sks" placeholder="Masukan SKS">
            </div>
         </div>
        <br>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
