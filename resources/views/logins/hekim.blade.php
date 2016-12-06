<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{url('img/favicon.png')}}">
    <title>Hekimler Giriş</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap-theme.css')}}" rel="stylesheet">
    <link href="{{url('css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{url('css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    <link href="{{url('css/style-responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{url('https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css ')}}">
  </head>

<body class="login-img-body">
    <div class="container" >
      <form class="login-form"  method="POST" action="{{ url('/hekimler/checklogin') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <div class="login-wrap" >
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group" >

               <span class="input-group-addon"><i class="icon_profile"></i></span>

              <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-poçt" autofocus>

              </div>
              @if($errors->has('email'))
               <p style="color:red;text-align: left"><b>E-poçt ünvanınızı yazın.</b></p>
              @endif
              <div class="form-group">
              </div>
              <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Şifrə">
              </div>
              @if($errors->has('email'))
               <p style="color:red;text-align: left"><b>Şifrənizi yazın.</b></p>
              @endif
              @if ($message = Session::get('wrong'))
                   <b style="color:red">{{ $message }}</b>
              @endif
              <br><br>
               <a href="{{ url('hekimler/login') }}"><button  class="btn btn-success btn-lg btn-block" type="submit">GİRİŞ</button></a>
              </ul>
            </div>
          </form>
        </div>
      </body>
    </html>
