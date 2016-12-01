@extends('layouts.index')
<style>
	strong{
		color:white;
	}
	h3{
		
	}
</style>
@section('content')
<section id="blog" class="col-md-12 col-sm-12 col-xs-12">
	<h2>Həkim</h2>
	<strong>Həkimin adı:</strong>
	<p>{{$finishName}}</p>
	<strong>Həkimin soyadı:</strong>
	<p>{{$finishSurname}}</p>
	<strong>Həkim haqqında:</strong>
	<p>{{$finishAbout}}</p>
	<a href="{{url('/stats')}}" class="btn btn-danger">Back</a>
</section>
@endsection
