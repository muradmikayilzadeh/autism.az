@extends('layouts.admin')
@section('content')
<div class="container">
	<a href="{{url('admin-panel')}}" class="btn btn-warning">Geri</a>
	<a href="{{url('admin/add')}}" class="btn btn-success">Həkim Əlavə Et</a>

	<table class="table table-striped">
		<thead>
			<tr>
				<td>ID</td>
				<td>Ad</td>
				<td>Soyad</td>
				<td>Haqqında</td>
				<td>E-poçt</td>
				<td>Əməllər</td>
			</tr>
		</thead>

		<tbody>
			@foreach($hekimler as $hekim)
				<tr>
					<td>{{$hekim->id}}</td>
					<td>{{$hekim->name}}</td>
					<td>{{$hekim->surname}}</td>
					<td>{{substr($hekim->haqqinda,0,90)}}</td>
					<td>{{$hekim->email}}</td>
					<td>
						<a href="{{url('admin/showh',$hekim->id)}}" class="btn btn-xs btn-default">
							<i class="fa fa-eye"></i>
						</a>
						<a href="" class="btn btn-xs btn-primary">
								<i class="fa fa-envelope"></i>
						</a>
						<a href="{{url('admin/destroyh',$hekim->id)}}" class="btn btn-xs btn-danger">
							<i class="fa fa-trash"></i>
						</a>

					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection