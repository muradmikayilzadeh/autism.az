@extends('layouts.hekim')
@section('content')
<div class="container">
	  
	  

	<a href="{{url('hekim-panel')}}" class="btn btn-warning">Geri</a>
	<h1><b>Məqalə Yazın</b></h1>
	 @if ($message = Session::get('success'))
		<div class="alert alert-success">{{$message}}</div>
	@endif
	<form action="{{url('hekimler/store')}}" method="post" style="margin-bottom: 40px" enctype="multipart/form-data">
		{{csrf_field()}}<br>
		<b>Məqalə adı:</b>
		<input type="text" name="title" class="form-control"><br>
		<b>Məqalə Mətni:</b>
		<textarea name="text" class="form-control"></textarea><br>
		<b>Şəkil:</b>
		<input type="file" name="photo" class="form-control">
		<br>
		<input type="submit" class="btn btn-success" value="Bitir">
	</form>
</div>
@endsection