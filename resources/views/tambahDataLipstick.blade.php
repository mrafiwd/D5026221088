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

	<form action="/dblipstick/storeData" method="post" class="form-horizontal">
		{{ csrf_field() }}

         <div class = "form-group">
            <label for = "merk" class = "col-sm-2 control-label">Merk Lipstick</label>
            <div class = "col-sm-10">
               <input  name="merk" type = "text" required = "required" class = "form-control" id = "merk" placeholder = "Masukan Merk Lipstick">
            </div>
         </div>
         <div class = "form-group">
            <label for = "stock" class = "col-sm-2 control-label">Jumlah Lipstick</label>
            <div class = "col-sm-10">
               <input name = "stock" type = "number"  required = "required" class = "form-control" id = "stock" placeholder = "Masukan Jumlah Lipstick">
            </div>
         </div>
         <div class = "form-group">
            <label for = "tersedia" class = "col-sm-2 control-label">Ketersediaan Stock</label>
            <div class = "col-sm-10">
                <select name = "tersedia" class="form-select" required = "required" id = "tersedia">
                    <option>Y</option>
                    <option>N</option>
                </select>
            </div>
         </div>
        <br>
		<input type="submit" value="Simpan Data" class="btn btn-primary">


	</form>

@endsection
