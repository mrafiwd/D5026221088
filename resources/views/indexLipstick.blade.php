@extends('master2')
@section('title','Database Lipstick')
@section('judul_halaman')
<h2>www.malasngoding.com</h2>
<h3>Data Lipstick</h3>

<p>Cari Data Lipstick :</p>
	<form  action="/dblipstick/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Lipstick Berdasarkan Merk .." value="{{ old('cari') }}"> <br>
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
    <br>
	<a class="btn btn-primary" href="/dblipstick/tambah"> + Tambah Data</a>

	<br/>
	<br/>

@endsection

@section('konten')

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Lipstick</th>
			<th>Merk Lipstick</th>
			<th>Stock Lipstick</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($lipstick as $l)
		<tr>
            <td>{{ $l->kodelipstick }}</td>
            <td>{{ $l->merklipstick }}</td>
            <td> {{ $l->stocklipstick }}</td>
            <div class="text-center">
                <td
                @if ($l->tersedia =="Y" ){
                    class = "bg-success text-white text-center"
                }
                @else{
                    class = "bg-danger text-white text-center" value = "Tidak Ada"
                }
                @endif
                >{{ $l->tersedia }}
                </td>
            </div>
            <td>
				<a href="/dblipstick/edit/{{ $l->kodelipstick }}" class="btn btn-warning">Edit</a>
				|
				<a href="/dblipstick/hapus/{{ $l->kodelipstick }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
