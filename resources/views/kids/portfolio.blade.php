@extends('layouts.index')
@section('content')
    <section id="PortfolioFour" >
        <div  class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-1" >
                    <h2><b>İnteraktiv Oyunlar</b></h2>
                </div>
                <div class="col-md-4  col-sm-6 col-xs-6" >
                    <h6><a href="#">Home </a>  &raquo  About Us</h6>
                </div>
            </div>
        </div>
    </section>
    {{-- <section id="HexagonToggle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-3  col-sm-12 col-xs-4 col-xs-offset-4" >
                    <button class="button1">All(12)</button>
                    <button class="button2">Arts(1)</button>
                    <button class="button3">Fun(4)</button>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="portfolioHexa" class="col-md-12 col-sm-12 col-xs-12 ">
        <div class="container  margin">
            <div class="hexagon one all fun ">
                <img src="assets/images/cartoon1.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon two all fun marginLeft">
                <img src="assets/images/cartoon2.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>

            <div class="hexagon three all arts fun marginLeft">
                <img src="assets/images/cartoon3.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon four all fun marginLeft">
                <img src="assets/images/cartoon4.jpg" class="img img-responsive">
                <i class="fa fa-link"></i>
            </div>
   
            <div class="hexagon two all margin">
                <img src="assets/images/cartoon1.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>
             <div class="hexagon one all marginLeft margin">
                <img src="assets/images/cartoon7.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>
             <div class="hexagon three all marginLeft margin">
                <img src="assets/images/cartoon6.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>
             <div class="hexagon four all  marginLeft margin">
                <img src="assets/images/cartoon5.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>

  
             <div class="hexagon two all margin">
                <img src="assets/images/cartoon4.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon one all marginLeft margin">
                <img src="assets/images/cartoon3.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon eight all marginLeft margin">
                <img src="assets/images/cartoon2.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>
            <div class="hexagon seven all marginLeft margin">
                <img src="assets/images/cartoon1.jpg" class="img img-responsive ">
                <i class="fa fa-link"></i>
            </div>
        </div>
        
        <script>
            $(document).ready(function() {
                $('button')
                .on('click',function(event) {
                    $('button').css('background', '#DF9B00');
                    $(this).css('background', '#CF571B');
                });

                $('.button1')
                .on('click',function(event) {
                    $('.hexagon').hide();
                    $('.all').show();
                });

                $('.button2')
                .on('click',function(event) {
                    $('.hexagon').hide();
                    $('.arts').show();
                });

                $('.button3')
                .on('click',function(event) {
                    $('.hexagon').hide();
                    $('.fun').show();
                });
            });
        </script>


        <script type="text/javascript">
        $("#portfolioHexa .hexagon")
        .on('mouseover',function(event) {
        $(this).find('img').css('opacity', '.3')
        $(this).find('i').css('opacity', '1');
        });
        $("#portfolioHexa .hexagon")
        .on('mouseleave',function(event) {
        $(this).find('img').css('opacity', '1')
        $(this).find('i').css('opacity', '0');
        });
        </script>
        <script type="text/javascript">
        $("#Arts1 .hexagon")
        .on('mouseover',function(event) {
        $(this).find('img').css('opacity', '.3')
        $(this).find('i').css('opacity', '1');
        });
        $("#Arts1 .hexagon")
        .on('mouseleave',function(event) {
        $(this).find('img').css('opacity', '1')
        $(this).find('i').css('opacity', '0');
        });
        </script>
        <script type="text/javascript">
        $("#Fun .hexagon")
        .on('mouseover',function(event) {
        $(this).find('img').css('opacity', '.3')
        $(this).find('i').css('opacity', '1');
        });
        $("#Fun .hexagon")
        .on('mouseleave',function(event) {
        $(this).find('img').css('opacity', '1')
        $(this).find('i').css('opacity', '0');
        });
        </script>
        @stop