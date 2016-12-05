@extends('layouts.app')

@section('content')
<div class="container">
    <body class="login-img2-body">
    <div class="container" >
      <form class="login-form"  method="POST" action="{{ url('/user-check') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <div class="login-wrap" >
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">

               <span class="input-group-addon"><i class="icon_profile"></i></span>

              <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-poçt" autofocus>
              </div>
               @if($errors->has('email'))
                  <p style="color:red;text-align: left"><b>E-poçt ünvanızı yazın.</b></p>
                @endif
              <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Şifrə">           
               
              </div>
              
               
                @if($errors->has('password'))
                  <p style="color:red;text-align: left"><b>Şifrənizi yazın.</b></p>
                @endif  
            
              @if ($message = Session::get('wrong'))
                   <b style="color:red">{{ $message }}</b>
              @endif
                  <br>
                 <br>
              <ul>
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}"><button class="btn btn-primary btn-lg btn-block" type="submit">Giriş</button></a></li>
                <span class="pull-right"> <a href="{{url('hekimler/login')}}">Həkimsiniz?</a></span>
                @else

                <li class="dropdown">
                  
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Çıxış</a></li>
                  </ul>
                </li>
                @endif
              </ul>
            </div>
          </form>
        </div>
@endsection