@extends('master2')
@section('title','Edit Lipstick')
@section('judul_halaman')

@endsection

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Lipstick</h3>

	<a href="/dblipstick" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($lipstick as $l)
	<form action="/dblipstick/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $l->kodelipstick }}"> <br/>
        <div class = " form-group row">
            <label for = "merk" class = "col-sm-2 control-label">Nama Merk</label>
            <div class = "col-sm-8">
               <input  name="merk" type = "text" required = "required" class = "form-control-plaintext" id = "merk" value="{{ $l->merklipstick }}" readonly>
            </div>
        </div>
		<div class = " form-group row">
		   <label for = "stock" class = "col-sm-2 control-label">Stock Lipstick</label>
		   <div class = "col-sm-8">
			   <input  name="stock" type = "number" required = "required" class = "form-control" id = "stock"  value="{{ $l->stocklipstick }}">
		   </div>
		</div>
		<div class = " form-group row">
		   <label for = "tersedia" class = "col-sm-2 control-label">Ketersediaan Stock</label>
		   <div class = "col-sm-1">
            <select name = "tersedia" class="form-select" required = "required" id = "tersedia">
                <option>Y</option>
                <option>N</option>
            </select>
		   </div>
		</div>
        <br>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach


@endsection
