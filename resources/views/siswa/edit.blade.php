@extends('layouts.app')
@section('content')

<div class="container">
	<h1 class="page-title"><a href="{{route('semua_siswa')}}">&larr;</a> Edit data Siswa</h1><br>

	<div class="card">
		<div class="card-header">
			Edit data siswa
		</div>
		<div class="card-body">
			<form action="{{route('update_siswa')}}" method="post">
				@csrf
				<input type="hidden" name="id" value="{{$siswa->id}}">
				<div class="form-group">
					<label for="">Nama Siswa</label>
					<input type="text" name="nama" class="form-control" value="{{$siswa->nama_siswa}}">
				</div>
				<div class="form-group">
					<label for="">Kelas</label>
					<select name="kelas_id" id="" class="form-control">
						<option value="{{$siswa->kelas_id}}">{{$siswa->kelas->nama_kelas}}</option>
						@foreach ($kelas as $key_kelas)
							<option value="{{$key_kelas->id}}">{{$key_kelas->nama_kelas}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Sekolah</label>
					<select name="sekolah_id" id="" class="form-control">
						<option value="{{$siswa->sekolah_id}}">{{$siswa->sekolah->nama_sekolah}}</option>
						@foreach ($sekolah as $key_sekolah)
							<option value="{{$key_sekolah->id}}">{{$key_sekolah->nama_sekolah}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Jenis Kelamin</label>
					<select name="jenis_kelamin" id="" class="form-control">
						<option value="{{$siswa->jenis_kelamin}}">{{$siswa->jenis_kelamin}}</option>
						<option value="L">L</option>
						<option value="P">P</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Alamat</label>
					<textarea name="alamat" id="" cols="30" rows="10" class="form-control">{{$siswa->alamat}}</textarea>
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>

@endsection