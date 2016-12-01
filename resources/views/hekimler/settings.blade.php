@extends('layouts.hekim')
@section('content')
<div class="container">
	<h1><b>Tənzimləmələr</b></h1>
	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	<form action="{{url('hekimler-save-changes')}}" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<b>Ad</b>
		<input type="text" name="name" value="{{$id->name}}" class="form-control"><br>
		<b>Soyad</b>
		<input type="text" name="surname" value="{{$id->surname}}" class="form-control"><br>
		<b>Şifrə</b>
		<input type="text" name="password" value="{{$id->password}}" class="form-control"><br>
		<b>E-poçt ünvanı</b>
		<input type="email" name="email" value="{{$id->email}}" class="form-control"><br>
		<b>Haqqında</b>
		<textarea name="about" class="form-control">{{$id->haqqinda}}</textarea>
		<br>
		<input type="file" name="photo" class="form-control">
		<br>
		<input type="submit" class="btn btn-success" value="Yenilə">
		<a href="{{url('hekim-panel')}}" class="btn btn-danger">Qayıt</a>
	</form>
</div>
@endsection