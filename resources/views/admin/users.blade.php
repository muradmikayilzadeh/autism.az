@extends('layouts.admin')
@section('content')
<div class="container">
	<a href="{{url('admin-panel')}}" class="btn btn-warning">Geri</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<td>ID</td>
				<td>Ad və Soyad</td>
				<td>E-poçt</td>
				<td>Əməllər</td>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>
						<a href="{{url('admin/showuser',$user->id)}}" class="btn btn-xs btn-default">
							<i class="fa fa-eye"></i>
						</a>
						<a href="" class="btn btn-xs btn-primary">
							<i class="fa fa-envelope"></i>
						</a>
						<a href="{{url('admin/ban',$user->id)}}" class="btn btn-xs btn-danger">
							<i class="fa fa-trash"></i>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection