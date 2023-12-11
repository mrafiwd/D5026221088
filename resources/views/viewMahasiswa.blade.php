@extends('master2')
@section('title','Lihat Mahasiswa')
@section('judul_halaman')

@endsection

@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Lihat Mahasiswa</h3>

    <a href="/dbmahasiswa" class="btn btn-primary">Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="d-flex justify-content-center">
            @foreach ($mahasiswa as $m)
            <fieldset disabled>
                <form action="/dbmahasiswa/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $m->NRP }}"> <br/>
                    <div class = " form-group row">
                        <label for = "nrp" class = "col-sm-4 control-label">NRP :</label>
                        <div class = "col-sm-8">
                           <input  name="nrp" type = "text" required = "required" class = "form-control" id = "nrp" value="{{ $m->NRP }}" readonly>
                        </div>
                    </div>
                    <div class = " form-group row">
                       <label for = "nama" class = "col-sm-4 control-label">Nama :</label>
                       <div class = "col-sm-8">
                           <input  name="nama" type = "text" required = "required" class = "form-control" id = "nama"  value="{{ $m->Nama }}" readonly>
                       </div>
                    </div>
                    <div class = " form-group row">
                       <label for = "jurusan" class = "col-sm-4 control-label">Jurusan :</label>
                       <div class = "col-sm-8">
                        <input  name="jurusan" type = "text" required = "required" class = "form-control" id = "jurusan"  value="{{ $m->Jurusan }}" readonly>
                       </div>
                    </div>
                    <div class = " form-group row">
                        <label for = "ipk" class = "col-sm-4 control-label">IPK :</label>
                        <div class = "col-sm-3">
                         <input  name="ipk" type = "text" required = "required" class = "form-control" id = "ipk"  value="{{ $m->IPK }}" readonly>
                        </div>
                    </div>
                    <br>
                </form>
            </fieldset>
            @endforeach
            <br>
        </div>
            <div class="text-center" >
                <a href="/dbmahasiswa" class="btn btn-primary w-25">OK</a>
            </div>
    </div>

@endsection
