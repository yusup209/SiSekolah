@extends('layouts.app')
@section('content')

<div class="container">
	<h1 class="page-title"><a href="{{route('semua_siswa')}}">&larr;</a> Tambah data siswa</h1><br>

	<div class="card">
		<div class="card-header">
			Tambah data siswa
		</div>
		<div class="card-body">
			<form action="{{route('simpan_siswa')}}" method="post">
				@csrf()

				<div class="form-group">
					<label for="">Nama Siswa</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Kelas</label>
					<select name="kelas_id" id="" class="form-control">
						<option value="">-- Pilih kelas --</option>
						@foreach ($kelas as $key_kelas)
							<option value="{{$key_kelas->id}}">{{$key_kelas->nama_kelas}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Sekolah</label>
					<select name="sekolah_id" id="" class="form-control">
						<option value="">-- Pilih sekolah --</option>
						@foreach ($sekolah as $key_sekolah)
							<option value="{{$key_sekolah->id}}">{{$key_sekolah->nama_sekolah}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Jenis Kelamin</label>
					<select name="jenis_kelamin" id="" class="form-control">
						<option value="">-- Pilih Jenis Kelamin --</option>
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
					</select>
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