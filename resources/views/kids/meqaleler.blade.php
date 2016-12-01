@extends('layouts.index')
@section('content')
<?php
use App\Meqale;
$parts=Meqale::all();
?>
<section id="blog" class="col-md-12 col-sm-12 col-xs-12">
	<div class="container text-center">
		@foreach($parts as $part)
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="row">
				<div class="data col-md-3 col-sm-3 col-xs-3 text-center">
					<a href="{{url('hekimler/find',$part->id)}}"><img src="{{url('assets/images/service1.jpg')}}" alt=""></a>
					<div class="date">
						<p>{{$part->created_at->diffForHumans()}}</p>
						
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
						<img src="{{$part->picture}}" class="img img-responsive">
						<a href="{{url('stat',$part->id)}}"><h3><b>{{$part->title}}</b></h3></a>
						<p>{{substr($part->text,0,350)}}</p>
					</div>
					<a href="{{url('stat',$part->id)}}"><button >Ətraflı <i class="fa fa-chevron-right"></i></button></a>
				</div>
			</div>
		</div>
		@endforeach
		
	</div>
	
</section>
@endsection