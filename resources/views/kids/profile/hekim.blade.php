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
</style>
<div class="back container-fluid">
	<div class="container">	
		<img src="../{{$hekim->avatar}}" height="150px" width="150px" class="img img-circle profile">
		<h1 class="text-right">Həkim Profili</h1>
		<p class="text-right">{{$hekim->name.' '.$hekim->surname}}</p>
		<p style="font-size: 15px" class="text-right">{{$hekim->email}}</p>
		<p style="font-size: 15px" class="text-right">{{$hekim->haqqinda}}</p>

		<p style="font-size: 15px" class="text-right">{{count($meqaleler)}} məqalənin müəllifidir.</p>
	</div>
</div>
@endsection