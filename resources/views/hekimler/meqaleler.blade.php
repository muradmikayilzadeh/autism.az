@extends('layouts.hekim')
@section('content')
	<div class="container">
		<h1><b>Məqalələr</b></h1>
		<a href="{{url('hekim-panel')}}" class="btn btn-warning">Geri</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<td>Nömrə</td>
					<td>Başlıq</td>
					<td>Mətn</td>
					<td>Şəkil</td>
					<td>Tarix</td>
					<td>Əməllər</td>
				</tr>
			</thead>
			<tbody>
				@foreach($meqaleler as $meqale)
					<tr>
						<td>{{$meqale->id}}</td>
						<td>{{$meqale->title}}</td>
						<td>{{substr($meqale->text,0,100)}}</td>
						<td>
							<img src="{{$meqale->picture}}" style="height: 50px">
						</td>
						<td>{{$meqale->created_at}}</td>
						<td>
							<a href="{{url('hekim-show-meqale',$meqale->id)}}" class="btn btn-xs btn-default">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('hekim-edit-meqale',$meqale->id)}}" class="btn btn-xs btn-primary">
								<i class="fa fa-cog"></i>
							</a>

							<a href="{{url('hekim-delete-meqale',$meqale->id)}}" class="btn btn-xs btn-danger">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection