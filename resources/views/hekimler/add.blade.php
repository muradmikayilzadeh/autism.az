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
		<input type="text" name="title" class="form-control">
		@if($errors->has('title'))
         <p style="color:red;text-align: left"><b>Başlıq yazın.</b></p>
        @endif
		<br>
		
		<b>Məqalə Mətni:</b>
		<textarea name="text" class="form-control"></textarea>
		@if($errors->has('text'))
         <p style="color:red;text-align: left"><b>Mətn yazın.</b></p>
        @endif
		<br>
		
		<b>Şəkil:</b>
		<input type="file" name="photo" class="form-control">
		@if($errors->has('photo'))
         <p style="color:red;text-align: left"><b>Şəkil əlavə edin.</b></p>
        @endif
		<br>
		<input type="submit" class="btn btn-success" value="Bitir"> 
		
        
       
	</form>
</div>
@endsection