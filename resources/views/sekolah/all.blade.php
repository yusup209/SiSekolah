@extends('layouts.app')

@section('content')

<div class="container">
	<h1 class="page-title">Master data Sekolah</h1>
	<br>

	<div class="card">
		<div class="card-header">
			Master data sekolah
		</div>
		<div class="card-body">
			<a href="{{route('tambah_sekolah')}}" class="btn btn-primary">Tambah data sekolah</a>
			<table class="table table-striped table-hovered table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Sekolah</th>
						<th>No. Telepon</th>
						<th>Alamat</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($sekolah as $key)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$key->nama_sekolah}}</td>
							<td>{{$key->no_telp}}</td>
							<td>{{$key->alamat}}</td>
							<td>
								<a href="{{route('edit_sekolah',$key->id)}}" class="btn btn-success">Edit</a>
								<a href="{{route('hapus_sekolah',$key->id)}}" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection