@extends('master2')
@section('title','Lihat Pegawai')
@section('judul_halaman')

@endsection

@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Lihat Pegawai</h3>

    <a href="/dbpegawai" class="btn btn-primary">Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-6 border"></div> {{-- Taruh border untuk menandakan adanya empty box --}}
        <div class="col-6">
            @foreach ($pegawai as $p)
            <fieldset disabled>
                <form action="/dbpegawai/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                    <div class = "form-group row">
                        <label for = "nama" class = "col-sm-2 control-label align-self-center">Nama : </label>
                        <div class = "col-sm-10">
                            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "jabatan" class = "col-sm-2 control-label align-self-center">Jabatan : </label>
                        <div class = "col-sm-10">
                            <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "umur" class = "col-sm-2 control-label align-self-center">Umur : </label>
                        <div class = "col-sm-10">
                            <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "alamat" class = "col-sm-2 control-label align-self-center">Alamat : </label>
                        <div class = "col-sm-10">
                            <textarea required="required" name="alamat" class="form-control" id="alamat" readonly>{{ $p->pegawai_alamat }}</textarea>
                        </div>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <br>
            <div class="text-center" >
                <a href="/dbpegawai" class="btn btn-primary w-25">OK</a>
            </div>
        </div>
    </div>

@endsection
