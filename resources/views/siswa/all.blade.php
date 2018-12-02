@extends('layouts.app')
@section('content')

<div class="container">
	<h1 class="page-title">Master data siswa</h1><br>

	<div class="card">
		<div class="card-header">
			Data siswa
		</div>
		<div class="card-body">
			<a href="{{route('tambah_siswa')}}" class="btn btn-primary">Tambah data siswa</a>

			<table class="table table-striped table-hovered table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Siswa</th>
						<th>Kelas</th>
						<th>Sekolah</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($siswa as $key)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$key->nama_siswa}}</td>
							<td>{{$key->kelas->nama_kelas}}</td>
							<td>{{$key->sekolah->nama_sekolah}}</td>
							<td>{{$key->jenis_kelamin}}</td>
							<td>{{$key->alamat}}</td>
							<td>
								<a href="{{route('edit_siswa',$key->id)}}" class="btn btn-success">Edit</a>
								<a href="{{route('hapus_siswa',$key->id)}}" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection