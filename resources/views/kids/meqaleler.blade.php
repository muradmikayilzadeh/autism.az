@extends('layouts.index')
@section('content')
@php
use App\Hekimler;
@endphp
<section id="blog" class="col-md-12 col-sm-12 col-xs-12">
	<div class="container text-center">
		@foreach($meqaleler as $meqale)
		@php
			$hekim=Hekimler::where('id',$meqale->hekim_id)->first();
		@endphp
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="row">
				<div class="data col-md-3 col-sm-3 col-xs-3 text-center">
					<a href="{{url('hekim',$hekim->id)}}"><img src="{{$hekim->avatar}}" alt=""></a>
					<div class="date">
						<p>{{$meqale->created_at}}</p>
						
					</div>
					<div class="image date">
						<i class="fa fa-image"></i>
					</div>
				</div>
				<div class="textAndPhoto col-md-9 text-left col-sm-9 col-xs-9">
					<div class="row">
						<img src="{{$meqale->picture}}" class="img img-responsive">
						<a href="{{url('stat',$meqale->id)}}"><h3><b>{{$meqale->title}}</b></h3></a>
						<p>{{substr($meqale->text,0,350)}}</p>
						<a href="{{url('stat',$meqale->id)}}"><button >Ətraflı <i class="fa fa-chevron-right"></i></button></a>
					</div>
					
				</div>
			</div>
		</div>
		@endforeach
		
	</div>
	
</section>
@endsection