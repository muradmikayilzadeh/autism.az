@extends('layouts.index')
@section('content')
<style>
	.profile{
		box-shadow:0px 0px 5px black;
		margin-top:20px;
		margin-bottom:20px;
		float: left;
	}
	.back{
		background:#CF571B;
	}
	.back h1{
		color:white;
		font-family: 'Bubblegum Sans', cursive;
	}
	.back p{
		color:white;
		font-size:17px;
		font-family: 'Bubblegum Sans', cursive;
	}


	.back2{
		background: #4C7296;
	}
		.back2 h1{
			color:white;
			font-family: 'Bubblegum Sans', cursive;
		}
	form{
		margin-bottom: 20px;
	}
	.error{
		font-family: 'Bubblegum Sans',cursive;
		font-size: 16px;
		color:white;
		text-align: left;
		margin:0;
		padding:0;
	}
</style>
<div class="back container-fluid">
	<div class="container">
		<img src="../{{$user->avatar}}" height="150px" width="150px" class="img img-circle profile">
		<h1 class="text-right">Mənim Profilim</h1>
		<p class="text-right">{{$user->name.' '.$user->surname}}</p>
		<p style="font-size: 15px" class="text-right">{{$user->email}}</p>
	</div>
</div>

<div class="back2 container-fluid">
	<div class="container">
		<h1 class="text-center">Profilini Tənzimlə</h1>


		<form action="{{url('profile/update')}}" method="post" class="col-md-6 col-md-offset-3" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="text" name="name" class="form-control" value="{{$user->name}}">
			@if($errors->has('name'))
	         <p class="error"><b>Adınızı yazın.</b></p>
	        @endif
			<br>
			<input type="text" name="surname" class="form-control" value="{{$user->surname}}">
			@if($errors->has('surname'))
	         <p class="error"><b>Soyadınızı yazın.</b></p>
	        @endif
			<br>

			<input type="email" name="email" class="form-control" value="{{$user->email}}">
			@if($errors->has('email'))
	         <p class="error"><b>E-poçt ünvanınızı yazın.</b></p>
	        @endif
			<br>
			<input type="password" name="password" class="form-control" value="{{$user->password}}">
			@if($errors->has('password'))
	         <p class="error"><b>Şifrənizi yazın.</b></p>
	        @endif
			<br>
			<select name="gender" class="form-control">
				<option value="0">Kişi</option>
				<option value="1">Qadın</option>
			</select><br>
			<input type="file" name="photo" class="form-control" style=""><br>
			
			<input type="submit" value="Yenilə" class="btn btn-success">
		</form>
	</div>
</div>
@endsection