<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{url('assets/awesome/css/font-awesome.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">
       
        <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ url('assets/awesome/css/font-awesome.css') }}">
        <link href="{{url('https://fonts.googleapis.com/css?family=Lato" rel="stylesheet')}}">
        <link rel="stylesheet" href="{{ url('https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous')}}">
        <script src="{{ url('assets/js/jquery-3.1.0.js')}}"></script>
        <script src="{{ url('assets/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{ url('assets/js/main.js')}}"></script>
        <script src="{{ url('assets/js/slider.js')}}"></script>
    </head>
    <style>
#header img {
    height:100px;
     width: 230px;
      position: relative;
       left: 500px;
        top: 40px;
}

@media screen and (min-width: 480px) {
#header img {
  

}
}
</style>
    <body>
        <section id='header' >
            <div class="container">
                <img src="{{url('images/logo.png')}}" >
                
                <ul class="pull-right ep">
                    <li class="email">
                        <span>office@autism.az</span> <i class="fa fa-envelope"></i>
                    </li>
                    <li>
                        <i>+994 55 448 23 20</i> <i class="fa fa-phone"></i>
                    </li>
                </ul>

                <ul class="menu col-md-12 col-sm-6 col-xs-12">
                    <li class="red"><a href="{{url('/')}}">Ana Səhifə</a></li>
                    <li class="orange"><a href="{{url('/about')}}">Haqqımızda</a></li>
                    <li class="green"><a href="{{url('/portfolio')}}">Oyunlar</a></li>
                    <li class="darkblue"><a href="{{url('/meqale')}}">Məqalələr</a></li>


                    @if(!isset($_SESSION['userSistemde']))
                        <li class="purple pull-right" ><a href="{{url('/login')}}">Daxil ol</a></li>
                         <li class="purplesecond pull-right"><a href="{{url('/register')}}">Qeydiyyatdan keç</a></li>

                         @else
                         <li class="purple pull-right" ><a href="{{url('/logout')}}">Çıxış et</a></li>
                         <li class="purplesecond pull-right"><a href="{{url('/profile')}}">Profilim</a></li>
                    @endif
                    
                </ul>
            </div>
            
        </section>
    @yield('content')
    
    <img src="{{url('assets/images/top.png')}}" title="Go To Top" class="top">
        <section id="about">
            <div class="container">
                <div class="col-md-3 kidsLife">
                   <div class="row">
                        <h4>autism.az Haqqında</h4>
                        <img src="{{url('images/red_sketch.png')}}" alt="">
                        <p style="font-size: 13px">autism.az portalı tamamilə xeyriyyə məqsədi ilə yaradılmış portaldır. Bu portalda 1943-cü ildə araşdırmalar sayəsində fərq edilən sindrom olan "Autizm" sindromu barəsindədir. Portalın əsas məqasədi psixoloqlar və autizm sindromlu olan insanların əlaqəsini yartamaqdır. </p>
                        <ul>
                            <li>
                                <i class="fa fa-check">Psixoloq məsləhəti</i>
                            </li>
                            <li>
                                <i class="fa fa-check">Psixoloq Məqalələri</i>
                            </li>
                            <li>
                                <i class="fa fa-check">Psixoloq&Pasient əlaqəsi</i>
                            </li>
                            <li>
                                <i class="fa fa-check">İnteraktiv oyunlar</i>
                            </li>
                            <li>
                                <i class="fa fa-check">Maarifləndirici videolar</i>
                            </li>
                        </ul>
                   </div>
                </div>
                <div class="col-md-3">
                    <div class="row kidsLife">
                        <h4>Son Hadisələr</h4>
                        <img src="{{url('images/green_sketch.png')}}" alt="">
                        <ul style="font-size: 13px">
                            <li>
                                <i class="fa fa-circle-o">English Grammer Class</i> <br>
                              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </li>
                            <li>
                                <i class="fa fa-circle-o">Music Class</i>

                               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                               
                               
                            </li>
                            <li>
                                <i class="fa fa-circle-o">Design news</i>
                               
                               cillum dolore eu fugiat nulla pariatur.
                               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </li>
                            </ul>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row kidsLife">
                        <h4>Sosial Media</h4>
                        <img src="{{url('images/yellow_sketch.png')}}" alt="">
                        <ul style="font-size: 13px">
                            <li>
                                
                            <p></p>
                        <i class="fa fa-twitter">&nbsp&nbsp23 11 2016</i><a href="http://autism.az/" target="_blank">@autism.az</a><br>
                        <i class="fa fa-twitter">&nbsp&nbsp27 11 2016</i>Unique News Autism<br>
                        <i class="fa fa-twitter">&nbsp&nbsp30 11 2016</i>Greetings from Baku
                    </div>
                            </li>
                        </ul>
                </div>
                <div class="col-md-3">
                    <div class="row kidsLife">
                        <h4>Əlaqə</h4>
                        <img src="{{url('images/steelblue_sketch.png')}}" alt="">
                        <ul style="font-size: 13px">
                            <li>
                            <i class="fa fa-map-marker"></i>
                                Azərbycan,Bakı şəh.
                            </li>
                            <li>
                                <i class="fa fa fa-phone"></i>(+994) 55 448 23 20
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>office@autism.az
                            </li>
                            <p></p>
                          <div class="form-group">
                              <input class="form-control" id="focusedInput" placeholder="Email adresiniz"  type="text">
                              <input type="submit" value="bizi izlə" style="position: relative; top: -35px" class="btn btn primary pull-right" name="">
                            </div>
               

                           
                        </ul>

                      

                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="container">
                <b>@ 2016 AUTISM.AZ</b>
            </div>
        </section>
        </body>
    </html>
</html>
<script src="assets/js/main.js"></script>