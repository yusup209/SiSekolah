@extends('layouts.app')
@section('content')

<div class="container">
	<h1 class="page-title"><a href="{{route('semua_sekolah')}}">&larr;</a> Edit data sekolah</h1><br>

	<div class="card">
		<div class="card-header">
			Edit data sekolah
		</div>
		<div class="card-body">
			<form action="{{route('update_sekolah')}}" method="post">
				@csrf()
				<input type="hidden" name="id" value="{{$sekolah->id}}">
				<div class="form-group">
					<label for="">Nama Sekolah</label>
					<input type="text" name="nama" class="form-control" value="{{$sekolah->nama_sekolah}}">
				</div>
				<div class="form-group">
					<label for="">Nomor Telepon</label>
					<input type="text" name="nomor" class="form-control" value="{{$sekolah->no_telp}}">
				</div>
				<div class="form-group">
					<label for="">Alamat</label>
					<textarea name="alamat" id="" cols="30" rows="10" class="form-control">{{$sekolah->alamat}}</textarea>
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>

@endsection