@extends('layouts.app')
@section('content')

<div class="container">
	<h1 class="page-title">Data master Kelas</h1><br>

	<div class="card">
		<div class="card">
			<div class="card-header">
				Data master kelas
			</div>
			<div class="card-body">
				<a href="{{route('tambah_kelas')}}" class="btn btn-primary">Tambah Kelas</a>

				<table class="table table-striped table-bordered table-hovered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kelas</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($kelas as $key)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$key->nama_kelas}}</td>
								<td>
									<a href="{{route('edit_kelas',$key->id)}}" class="btn btn-success">Edit</a>
									<a href="{{route('hapus_kelas',$key->id)}}" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection