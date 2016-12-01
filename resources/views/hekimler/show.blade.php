@extends('layouts.hekim')
@section('content')
		<div class="container">
			<h1><b>Göstər</b></h1>
			<br>
			<b>Məqalə adı:</b>{{$found->title}}
			<br>
			<b>Məqalə Mətni:</b>{{$found->text}}
			<br>
			<b>Şəkil:</b><br>
			<img src="../{{$found->picture}}" style="height: 150px">
			<br>
			<br>
			<a href="{{url('hekimler')}}" class="btn btn-danger">Qayıt</a>
		</div>
	</body>
</html>
@endsection