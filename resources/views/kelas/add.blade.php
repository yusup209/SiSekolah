@extends('layouts.app')

@section('content')

<div class="container">
	<h1 class="page-title"><a href="{{route('semua_kelas')}}">&larr;</a> Tambah data Kelas</h1><br>

	<div class="card">
		<div class="card-header">
			Tambah data kelas
		</div>
		<div class="card-body">
			<form action="{{route('simpan_kelas')}}" method="post">
				@csrf()
				<div class="form-group">
					<label for="">Nama Kelas</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>

@endsection