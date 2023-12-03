@extends('master2')
@section('title','Edit Pegawai')
@section('judul_halaman')

@endsection

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/dbpegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/dbpegawai/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class = "form-group">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-10">
               <input  name="nama" type = "text" required = "required" class = "form-control" id = "nama" placeholder = "Masukan Nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
		<div class = "form-group">
		   <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
		   <div class = "col-sm-10">
			   <input  name="jabatan" type = "text" required = "required" class = "form-control" id = "jabatan" placeholder = "Masukan Jabatan" value="{{ $p->pegawai_jabatan }}">
		   </div>
		</div>
		<div class = "form-group">
		   <label for = "umur" class = "col-sm-2 control-label">Umur</label>
		   <div class = "col-sm-10">
			   <input  name="umur" type = "number" required = "required" class = "form-control" id = "umur" placeholder = "Masukan Umur" value="{{ $p->pegawai_umur }}">
		   </div>
		</div>
		<div class = "form-group">
		   <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
		   <div class = "col-sm-10">
			   <textarea required="required" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat">{{ $p->pegawai_alamat }}</textarea>
		   </div>
		</div>
        <br>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach


@endsection
