@extends('layouts.admin')
@section('content')
<div class="container col-md-offset-1">
	<div class="panel panel-warning col-md-3">
		<div class="panel-head text-center">
			<h3><b>İSTİFADƏÇİLƏR</b></h3>
		</div>
		<div class="panel-body text-center">
			<a href="{{url('admin/users')}}" class="btn btn-warning">Keçid et</a>
		</div>
	</div>

	<div class="panel panel-danger col-md-3 col-md-offset-1">
		<div class="panel-head text-center">
			<h3><b>MƏQALƏLƏR</b></h3>
		</div>
		<div class="panel-body text-center">
			<a href="{{url('admin/articles')}}" class="btn btn-danger">Keçid et</a>
		</div>
	</div>

	<div class="panel panel-success col-md-3 col-md-offset-1">
		<div class="panel-head text-center">
			<h3><b>OYUNLAR</b></h3>
		</div>
		<div class="panel-body text-center">
			<a href="" class="btn btn-success">Keçid et</a>
		</div>
	</div>

	<div class="panel panel-default col-md-3">
		<div class="panel-head text-center">
			<h3><b>STATİSTİKA</b></h3>
		</div>
		<div class="panel-body text-center">
			<a href="" class="btn btn-default">Keçid et</a>
		</div>
	</div>

	<div class="panel panel-primary col-md-3 col-md-offset-1">
		<div class="panel-head text-center">
			<h3><b>HƏKİMLƏR</b></h3>
		</div>
		<div class="panel-body text-center">
			<a href="{{url('admin/hekimler')}}" class="btn btn-primary">Keçid et</a>
		</div>
	</div>
</div>
@endsection