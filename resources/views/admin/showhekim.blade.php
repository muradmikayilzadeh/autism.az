@extends('layouts.admin')
@section('content')
<div class="container">
	<h1><b>Göstər</b></h1>
	<br>
	<b>Sıra:</b>{{$hekim->id}}
	<br>
	<b>Həkim adı:</b>{{$hekim->name}}
	<br>
	<b>Həkim soyadı:</b>{{$hekim->surname}}
	<br>
	<b>Həkim haqqında:</b>{{$hekim->about}}
	<br>
	<b>E-poçt:</b>{{$hekim->email}}
	<br><br>
	<a href="{{url('admin-panel')}}" class="btn btn-danger">Qayıt</a>
</div>
@endsection