<?php
use App\Hekimler;
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{url('assets/awesome/css/font-awesome.css')}}">
		<style>
			.panel{
				background: #F8F8F8;
			}
			.create{
				transform:translateX(-3000px);
				transition: all .5s ease;
				position:absolute;
				top:70px;
			}
			.show{
				position: absolute;
				transform: translateY(-400px);
				top:50px;
			}
			.logo{
				height: 50px;
			}
		</style>
	</head>
	<body>
		<div class="panel">
			<div class="container">
			@php
				
			@endphp
				<img src="{{url('images/logo.png')}}" class="logo pull-left">
				<a href="{{url('/hekimler/logout')}}" class="pull-right" style="color:black;padding:15px">Çıxış et</a>
				{{-- <a href="{{url('/hekimler/settings/',$id)}}" class="pull-right" style="color:black;padding:15px">Tənzimləmə</a> --}}
			</div>
		</div>
		@yield('content')