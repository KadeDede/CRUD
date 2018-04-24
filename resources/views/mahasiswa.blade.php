@extends('templete');
@section('content');

	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Data Mahasiswa</h2>				
					</div>
					<div class="col-sm-6">
						<a href="{{route('mahasiswaModel.create')}}" class="btn btn-primary">tambah mahasiswa</a>
					</div>
				</div>
			</div>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>nama mahasiswa</th>
					<th>nim mahasiswa</th>
					<th>no telp mahasiswa</th>
					<th>fakultas mahasiswa</th>
					<th>action</th>
				</tr>
			</thead>
			@foreach ($post as $data);

			<tbody>
				<tr>
					<td>{{ $data->namaMhs }}</td>
					<td>{{ $data->nimMhs }}</td>
					<td>{{ $data->noTelpMhs }}</td>
					<td>{{ $data->fakultasMhs }}</td>
					<td>
						<a class="btn btn-success" href="{{route('mahasiswaModel.edit',$data->id)}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                       <form action="{{route('mahasiswaModel.destroy',$data->id)}}" method="POST">
                       	@csrf
                       	{{method_field('DELETE')}}
                       	<button type="submit" class="btn btn-danger"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                       </form>
					</td>
				</tr>
				 @endforeach
			</tbody>
       	</table>
	</div>
