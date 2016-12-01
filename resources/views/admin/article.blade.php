@extends('layouts.admin')
@section('content')
<div class="container">
	<a href="{{url('admin-panel')}}" class="btn btn-warning">Geri</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Nömrə</td>
				<td>Başlıq</td>
				<td>Mətn</td>
				<td>Əməllər</td>
			</tr>
		</thead>
		<tbody>
				<tr>
					@foreach($meqaleler as $meqale)
					<tr>
						<td class="col-md-1">{{$meqale->id}}</td>
						<td class="col-md-2">{{$meqale->title}}</td>
						<td class="col-md-8">{{substr($meqale->text,0,400)}}</td>
						<td>
							<a href="{{url('admin/show',$meqale->id)}}" class="btn btn-xs btn-default goster"><i class="fa fa-eye"></i></a>
							<a href="{{url('admin/destroy',$meqale->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@endforeach
				</tr>
			</tbody>
	</table>
</div>
@endsection