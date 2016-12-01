@extends('layouts.admin')
@section('content')
<div class="container">
	<h1><b>Həkim Əlavə Et</b></h1>
	<form action="{{url('admin/addhekim')}}" enctype="multipart/form-data" method="POST">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		{{csrf_field()}}
		<strong>Ad</strong>
		<input type="text" name="name" class="form-control"><br>
		<strong>Soyad</strong>
		<input type="text" name="surname" class="form-control"><br>
		<strong>Haqqında</strong>
		<textarea name="about" class="form-control"></textarea><br>
		<strong>E-poçt</strong>
		<input type="email" name="email" class="form-control"><br>
		<strong>Şifrə</strong>
		<input type="password" name="password" class="form-control"><br>
		<input type="submit" value="Əlavə et" class="btn btn-success">
		<a href="{{url('admin/hekimler')}}" class="btn btn-danger">Geri</a>
	</form>
</div>
@endsection