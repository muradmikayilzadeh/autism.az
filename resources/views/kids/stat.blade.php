@php
use App\Comment;
use App\User;

@endphp
@extends('layouts.index')
@section('content')
<link rel="stylesheet" href="{{url('assets/css/meqale.css')}}">
<section id="blog" class="col-md-12 col-sm-12 col-sm-12 col-xs-12">
	<div class="row">
		<div class="header">
			<div class="container">
				<h1><b>{{$meqale->title}}</b></h1>
			</div>
		</div>
		<div class="container text-center">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="row">
				
					<div class="data col-md-3 col-sm-3 col-xs-3 text-center" >
						<a href="{{url('hekim',$hekim->id)}}">
							<img style="float:left;border:3px solid #008C99; margin-top: 5px" src="../{{$hekim->avatar}}" alt="">
						</a>
						<div class="date2 date">
							<p>{{$meqale->created_at}}</p>
						</div>
						<div class="comments2 comments date">
							<span>{{count($comments)}}</span>
							<p><i class="fa fa-comment"></i></p>
						</div>
						<div class="image2 image date">
							<i class="fa fa-image"></i>
						</div>

					</div>
					<div class="photo col-md-9">
						<img style="border:3px solid #008C99; border-radius: none;display: inline-block; margin-left: -220px;" src="../{{$meqale->picture}}" class="img img-responsive">
					</div>
					<div class="textAndPhoto col-md-12 text-left col-sm-12 col-xs-12">
						<div class="row">
							
							<a><h3><b>{{$meqale->title}}</b></h3></a>
							
							<p style="color:#878888">{{$meqale->text}}</p>
							<a href="{{url('like-article',$meqale->id)}}" style="color:green">
								<i class="fa fa-thumbs-o-up"></i>
							</a>
							<p style="color:#878888;display: inline-block;">{{count($rates)}} dəfə bəyənildi.</p>
						</div>

					</div>
				</div>
				
			</div>
		</div>


		<div class="serhler">
				<div class="container">
						
						<div class="row">
							<h1><b>Şərhlər</b></h1>
							@foreach($comments as $comment)
								@php
									$user=User::where('id',$comment->user_id)->first();
								@endphp
								<div class="comment col-md-12">
									<div class="row">
										<div class="photo col-md-2">
											<div class="row">
												<img src="../{{$user->avatar}}" alt="">
											</div>
										</div>
										<div class="datas col-md-10">
											<div class="row">
												@if($_SESSION['userId']==$comment->user_id)
													<p class="commenter" style="background: #008C99;color:white;border-radius: 10px"><b>{{$user->name.' '.$user->surname}}</b></p>
													@else
													
													<p class="commenter"><b>{{$user->name.' '.$user->surname}}</b></p>
												@endif
												<p class="time">{{$comment->created_at}}<p>
												<p class="text">
													{{$comment->text}}
												</p>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							<h1><b>Fikrini bildir</b></h1>	
	
							<form action="{{url('/comment-save')}}" method="post" style="margin-bottom: 30px" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<br>
								<input required type="text" name="text" class="form-control"><br>
								<input type="text" name="id" value="{{$meqale->id}}" class="hidden">
								<input type="submit" class="btn btn-primary" value="Göndər">
							</form>
						</div>
					
				</div>		
		</div>
	</div>
</section>
@endsection