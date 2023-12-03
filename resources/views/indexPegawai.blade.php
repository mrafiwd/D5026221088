@extends('master2')
@section('title','Database Pegawai')
@section('judul_halaman')
<h2>www.malasngoding.com</h2>
<h3>Data Pegawai</h3>

<p>Cari Data Pegawai :</p>

	<form  action="/dbpegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai Berdasarkan Nama .." value="{{ old('cari') }}"> <br>
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

	<a href="/dbpegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

@endsection

@section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/dbpegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
				|
				<a href="/dbpegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/dbpegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{$pegawai -> links()}}
@endsection
