@extends('layouts.app')
@section('content')

<div class="container">
	<h1 class="page-title"><a href="{{route('semua_sekolah')}}">&larr;</a> Tambah data sekolah</h1><br>

	<div class="card">
		<div class="card-header">
			Tambah data sekolah
		</div>
		<div class="card-body">
			<form action="{{route('simpan_sekolah')}}" method="post">
				@csrf()
				<div class="form-group">
					<label for="">Nama Sekolah</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Nomor Telepon</label>
					<input type="text" name="nomor" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Alamat</label>
					<textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>

@endsection