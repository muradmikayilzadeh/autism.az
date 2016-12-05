@extends('layouts.hekim')
@section('content')
		<div class="container">
			<h1><b>Təzələyin</b></h1>		
			 @if ($message = Session::get('success'))
				<div class="alert alert-success">{{$message}}</div>
			@endif
			<form action="{{url('hekim-update-meqale',$meqale->id)}}" method="post" style="margin-bottom: 40px" enctype="multipart/form-data">
				{{csrf_field()}}<br>
				<b>Məqalə adı:</b>
				<input type="text" name="title" class="form-control" value="{{$meqale->title}}"
				>
				@if($errors->has('title'))
		         <p style="color:red;text-align: left"><b>Başlıq yazın.</b></p>
		        @endif
				<br>
				<b>Məqalə Mətni:</b>
				<textarea name="text" class="form-control">{{$meqale->text}}</textarea>
				@if($errors->has('text'))
		         <p style="color:red;text-align: left"><b>Mətn yazın.</b></p>
		        @endif
				<br>
				<b>Şəkil:</b>
				<input type="file" name="photo" class="form-control" value="{{$meqale->picture}}">
				<br>
				<input type="submit" class="btn btn-success" value="Bitir">
				<a href="{{url('hekim-panel')}}" class="btn btn-warning">Geri</a>
			</form>
		
		</div>
	</body>
</html>
@endsection