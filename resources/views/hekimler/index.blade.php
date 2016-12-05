@extends('layouts.hekim')
@section('content')
<style>
	.avatar{
		height: 200px;
		width: 200px;
		box-shadow:0px 0px 5px black;
	}
	.about{
		font-size: 17px;
	}
</style>
<div class="container">
	<div class="row">
		<a href="{{url('hekimler-meqale')}}" class="btn btn-success">
			<h4>Məqalələr</h4>
		</a>
		<a href="{{url('hekimler-newMeqale')}}" class="btn btn-warning">
			<h4>Məqalə Yaz</h4>
		</a>

		<a href="{{url('hekimler-settings',$hekim->id)}}" class="btn btn-default">
			<h4>Tənzimləmələr</h4>
		</a>

		<div class="col-md-12" style="margin-top: 50px">
			<div class="col-md-3">
				<img src="{{$hekim->avatar}}" class="avatar img-circle">
			</div>
			
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-7">
						<h2><b>{{$hekim->name.' '.$hekim->surname}}</b></h2>
					<p>Həkim/Psixoloq</p>

					<p class="about"><b>{{$hekim->haqqinda}}</b></p>
					</div>

					<div class="col-md-5">
						<h3><b>Ən son məqalə</b></h3>
						<h4><a href="{{url('hekim-show-meqale',$meqale->id)}}"><b>{{$meqale->title}}</b></a></h4>
						<p>{{substr($meqale->text,0,90).'...'}}</p>
						<img src="{{$meqale->picture}}" class="img" height="100px">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
@endsection