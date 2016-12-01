@extends('layouts.admin')
<?php
use App\Hekimler;
?>
@section('content')
<div class="container">
	<h1><b>Göstər</b></h1>
	<br>
	<b>Müəllif:</b>{{Hekimler::where('id',$meqale->hekimler_id)->first()->name}}{{' '}}{{Hekimler::where('id',$meqale->hekimler_id)->first()->surname}}
	<br>
	<b>Məqalə adı:</b>{{$meqale->title}}
	<br>
	<b>Məqalə Mətni:</b>{{$meqale->text}}
	<br><br>
	<a href="{{url('admin-panel')}}" class="btn btn-danger">Qayıt</a>
</div>
@endsection