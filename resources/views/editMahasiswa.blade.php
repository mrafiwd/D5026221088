@extends('master2')
@section('title','Edit Mahasiswa')
@section('judul_halaman')

@endsection

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Mahasiswa</h3>

	<a href="/dbmahasiswa" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($mahasiswa as $m)
    <div class="d-flex justify-content-center">
        <form  action="/dbmahasiswa/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $m->NRP }}"> <br/>
            <div class = " form-group row">
                <label for = "nrp" class = "col-sm-4 control-label">NRP :</label>
                <div class = "col-sm-8">
                <input  name="nrp" type = "text" required = "required" class = "form-control" id = "nrp" value="{{ $m->NRP }}" >
                </div>
            </div>
            <div class = " form-group row">
            <label for = "nama" class = "col-sm-4 control-label">Nama :</label>
            <div class = "col-sm-8">
                <input  name="nama" type = "text" required = "required" class = "form-control" id = "nama"  value="{{ $m->Nama }}">
            </div>
            </div>
            <div class = " form-group row">
            <label for = "jurusan" class = "col-sm-4 control-label">Jurusan :</label>
            <div class = "col-sm-8">
                <input  name="jurusan" type = "text" required = "required" class = "form-control" id = "jurusan"  value="{{ $m->Jurusan }}">
            </div>
            </div>
            <div class = " form-group row">
                <label for = "ipk" class = "col-sm-4 control-label">IPK :</label>
                <div class = "col-sm-3">
                <input  name="ipk" type = "text" required = "required" class = "form-control" id = "ipk"  value="{{ $m->IPK }}">
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
            <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </form>
    </div>
	@endforeach


@endsection
