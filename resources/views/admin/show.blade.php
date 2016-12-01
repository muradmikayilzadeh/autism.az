@extends('layouts.admin')
@section('content')
		<div class="container">
			<h1><b>Göstər</b></h1>
			<br>
			<b>Sıra:</b>{{$user->id}}
			<br>
			<b>İstifadəçinin adı və soyadı:</b>{{$user->name}}
			<br>
			<b>İstifadəçi e-poçt ünvanı:</b>{{$user->email}}
			<br>
			<b>Qeydiyyat tarixi:</b>{{$user->created_at}}

			<br><br>
			<a href="{{url('admin-panel')}}" class="btn btn-danger">Qayıt</a>
		</div>
	</body>
</html>
@endsection