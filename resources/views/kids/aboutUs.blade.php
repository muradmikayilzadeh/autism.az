@extends('layouts.index')
@section('content')

<section id="leisureTime" >
    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-1">
                <h2><b>Haqqımızda<b></h2>
            </div>
            <div class="col-md-4  col-sm-6 col-xs-6">
                <h6><a href="{{url('/about')}}">Ana səhifə</a>  >>  Haqqımızda</h6> 
            </div>
        </div>
    </div>
    <div id="sliderLeisure" >
        <div  class="col-md-6 col-sm-12 col-xs-12">
            <div id="slider" style="margin-top: 9px; ">
                <script>
                slider()
                </script>
            </div>
        </div>
        
        <div class="col-md-5 col-xs-12" >
            <h2><b>Biz kimik?<b></h2>
            <p>autism.az portalı tamamilə xeyriyyə məqsədi ilə yaradılmış portaldır. Bu portalda 1943-cü ildə araşdırmalar sayəsində fərq edilən sindrom olan "Autizm" sindromu barəsindədir. Portalın əsas məqasədi psixoloqlar və autizm sindromlu olan insanların əlaqəsini yartamaqdır. Portalda təmamilə psixoloqların məsləhəti ilə yaradılmış interaktiv oyunlar autizm sindromlu insanlara xidmət göstərir. Portal daxilində psixoloqlarla birbaşa əlaqə həmçinin onların məqalələrini oxumaq başqa bur xüsusiyyətimizdir. Paylaşılacaq videolar isə sizi bu sahədə daha da maarifləndirəcək! Gələcəkdə portalda olacaq yeniliklər və funksionallıqlar isə surpriz olaraq qalsın. Bizimlə olmağa davam edin! Hörmətlə, autism.az komandası!</p>
        </div>
        
    </div>
</div>
<div class="clearfix"></div>
</section>
<section id="ourFounder">
    <div class="container">
        
        <div class="row">
            <div class="col-md-6 col-xs-12" class="changeText">
            <h3><b>Valideyn Düşüncələri</b></h3>
            <div id="contentContainer">
                <div id="wrapper">
                    <div id="itemOne"  id="items" class="content">
                        
                        <p><i class="fa fa-quote-left fa-2x" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type standard dummy text ever since the 1500s, when an unknown printer took.<i class="fa fa-quote-right fa-2x" aria-hidden="true"></i></p>
                    </div>
                    <div id="itemTwo"  id="items" class="content">
                        
                        <p><i class="fa fa-quote-left fa-2x" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make  printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.specimen book. It has survived not only five centuries.<i class="fa fa-quote-right fa-2x" aria-hidden="true"></i></p>
                    </div>
                    <div id="itemThree"  id="items" class="content">
                        
                        <p><i class="fa fa-quote-left fa-2x" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.specimen book.<i class="fa fa-quote-right fa-2x" aria-hidden="true"></i></p>
                    </div>
                    <div id="itemFour"  id="items" class="content">
                        
                        <p><i class="fa fa-quote-left fa-2x" aria-hidden="true"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley text ever since the 1500s,  a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.specimen book. It has survived not only five centuries.<i class="fa fa-quote-right fa-2x" aria-hidden="true"></i></p>
                    </div>
                    
                </div>
            </div>
            
            <div id="navLinks">
                <ul>
                    <li class="itemLinks" data-pos="0px"></li>
                    <li class="itemLinks" data-pos="-550px"></li>
                    <li class="itemLinks" data-pos="-1100px"></li>
                    <li class="itemLinks" data-pos="-1650px"></li>
                </ul>
            </div>
        </div>
            
        </div>
        
        </section> 
        <section id="staffHexa" class="col-md-12">
             <div class="container text-center">
                        <h2>Komandamız</h2>
                        <img src="assets/images/gt.png" class="line" style="margin-bottom: 30px">
                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <img src="assets/images/team1.jpg" alt="">
                            <h4>Murad Mikayilzadə</h4>
                            <span>Web Developer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus tenetur atque officiis, doloribus nam aliquam consectetur ipsum eum molestiae sed, quis, voluptatibus. Eum ad, officiis, ullam dignissimos maxime illum!</p>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <img src="assets/images/team2.jpg" alt="">
                            <h4>Murad Mikayilzadə</h4>
                            <span>Web Developer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo praesentium possimus velit ad maiores doloremque facilis, nemo reiciendis quo pariatur eius sint, earum, modi provident quasi totam amet deleniti explicabo.</p>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <img src="assets/images/team3.jpg" alt="">
                            <h4>Leyla Abbasova</h4>
                            <span>Web Developer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam iste numquam assumenda praesentium maxime esse, voluptates vel nemo eius ea aliquid enim optio ad nisi ut pariatur animi, deleniti sunt.</p>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <img src="assets/images/team4.jpg" alt="">
                            <h4>Leyla Abbasova</h4>
                            <span>Web Developer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam iste numquam assumenda praesentium maxime esse, voluptates vel nemo eius ea aliquid enim optio ad nisi ut pariatur animi, deleniti sunt.</p>
                        </div>
                    </div>
        </section>
        <script type="text/javascript">
        $("#staffHexa .hexagon")
        .on('mouseover',function(event) {
        $(this).find('img').css('opacity', '.3')
        $(this).find('i').css('opacity', '1');
        });
        $("#staffHexa .hexagon")
        .on('mouseleave',function(event) {
        $(this).find('img').css('opacity', '1')
        $(this).find('i').css('opacity', '0');
        });
        </script>
        
    @stop