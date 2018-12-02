@extends('layouts.app')

@section('content')

<div class="container">
	<h1 class="page-title"><a href="{{route('semua_kelas')}}">&larr;</a> Edit data Kelas</h1><br>

	<div class="card">
		<div class="card-header">
			Edit data kelas
		</div>
		<div class="card-body">
			<form action="{{route('update_kelas')}}" method="post">
				@csrf()
				<input type="hidden" name="id" value="{{$kelas->id}}">
				<div class="form-group">
					<label for="">Nama Kelas</label>
					<input type="text" name="nama" class="form-control" value="{{$kelas->nama_kelas}}">
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>

@endsection