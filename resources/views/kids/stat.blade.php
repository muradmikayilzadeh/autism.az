@extends('layouts.index')
@section('content')
<section id="blog" class="col-md-12 col-sm-12 col-sm-12 col-xs-12">
	<div class="container text-center">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="data col-md-3 col-sm-3 col-xs-3 text-center">
					<a href="{{url('hekim',$hekim->id)}}">
						<img src="../{{$hekim->avatar}}" alt="">
					</a>
					<div class="date">
						<p>{{$meqale->created_at->diffForHumans()}}</p>
					</div>
					<div class="comments date">
						<span>12</span>
						<p><i class="fa fa-comment"></i></p>
					</div>
					<div class="image date">
						<i class="fa fa-image"></i>
					</div>
				</div>
				<div class="textAndPhoto col-md-9 text-left col-sm-9 col-xs-9">
					<div class="row">
						<img src="../{{$meqale->picture}}" class="img img-responsive">
						<a><h3><b>{{$meqale->title}}</b></h3></a>
						<p>{{$meqale->text}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection