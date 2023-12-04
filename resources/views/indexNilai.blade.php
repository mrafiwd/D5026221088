@extends('master2')
@section('title','Database Nilai')
@section('judul_halaman')
<h2>www.malasngoding.com</h2>
<h3>Data Nilai</h3>
	<a class="btn btn-primary" href="/dbnilai/tambah"> + Tambah Data</a>

	<br/>
	<br/>

@endsection

@section('konten')

    @php
    function angkaToHuruf($nilai){
        if ($nilai >= 81 && $nilai <= 100) {
            return 'A';
        } elseif ($nilai >= 61 && $nilai <= 80) {
            return 'B';
        } elseif ($nilai >= 41 && $nilai <= 60) {
            return 'C';
        } elseif ($nilai >= 0 && $nilai <= 40) {
            return 'D';
        } else {
            return 'Nilai tidak valid';
        }
    }
    @endphp

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
            <td>{{ $n->ID }}</td>
            <td>{{ $n->NRP }}</td>
            <td>{{ $n->NilaiAngka }}</td>
            <td>{{ $n->SKS }}</td>
            <td>{{ angkaToHuruf($n->NilaiAngka) }}</td>
            <td>{{ $n->NilaiAngka*$n->SKS }}</td>
		</tr>
		@endforeach
	</table>

@endsection
