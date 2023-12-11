@extends('master2')
@section('title','Database Mahasiswa')
@section('judul_halaman')
<h1 class="text-center">EAS <br> 5026221088 - Muhammad Rafi Widya Danendra</h1>
<br>
<h2 class="text-center">Data Mahasiswa</h2>
<br>

@endsection

@section('konten')

	<table class="table table-striped table-hover text-center">
		<tr >
			<th class="col-2">NRP</th>
			<th>Nama</th>
			<th class="col-2">Jurusan</th>
			<th>IPK</th>
            <th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $m)
		<tr >
            <td>{{ $m->NRP }}</td>
            <td>{{ $m->Nama }}</td>
            <td> {{ $m->Jurusan }}</td>
            <td>{{ $m->IPK }}</td>
            <td>
				<a href="/dbmahasiswa/edit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
				|
				<a href="/dbmahasiswa/view/{{ $m->NRP }}" class="btn btn-info">View</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
