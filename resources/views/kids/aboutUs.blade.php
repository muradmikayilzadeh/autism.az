@extends('layouts.index')
@section('content')

<section id="leisureTime" >
    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-1">
                <h2><b>About Us<b></h2>
            </div>
            <div class="col-md-4  col-sm-6 col-xs-6">
                <h6><a href="{{url('/about')}}">Home</a>  >>  About Us</h6> 
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
            <h2><b>Our Leisure Time<b></h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Lorem Ipsum available, but the majority have suffered alteration in some form. Vivamus adipiscing lobortis sagittis. Nullam tempus mauris dolor, ac malesuada arcu. Praesent dolor quam, tincidunt in sollicitudin sit amet, volutpat sed velit. Nullam non neque ipsum. Nullam tempus mauris dolor, ac malesuada arcu. Praesent dolor quam, tincidunt in sollicitudin sit amet, volutpat sed velit. Nullam non neque ipsum.</p>
            <button type="button" class="btn btn-md ">Read More <i class="glyphicon glyphicon-menu-right"></i>
            </button>
        </div>
        
    </div>
</div>
<div class="clearfix"></div>
</section>
<section id="ourFounder">
    <div class="container">
        <div class="col-md-6 col-xs-12 col-sm-12">
            <h2>Meet Our Founder</h2>
            <div class="founderImg  img-responsive">
                <img src="assets/images/founder.jpg">
            </div>
            <div class="boxx">
                <h5><b>James Bond<b></h5>
                <h6>Music Trainer, Specialist in <span><a href="#" style="  text-decoration:none;">Classical Music</a></span></h6>
                <span><a href="#" style="   text-decoration:none;">25 students</a></span>
            </div>
            <p>Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. Sed cursus ipsum vitae justo scelerisque, ac viverra tellus eleifend. Etiam interdum justo nunc, ac volutpat erat elementum id. Fusce dapibus mauris ac dictum porta. Sed pretium luctus elementum. In sollicitudin felis semper purus imperdiet lobortis. In odio tellus, rhoncus eget dolor in,</p>
        </div>
        <div class="col-md-6 col-xs-12" class="changeText">
            <h3><b>Some Words from Parents</b></h3>
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
        
        </section> 
        <section id="staffHexa" class="col-md-12">
            <div class="container text-center">
                <h2>Our teachers</h2>
                <img src="assets/images/green_title_bg.png">
                <div class="container text-center">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="hexa  ">
                            <div class="firstCol ">
                                <div class="hexagon one ">
                                    <img src="assets/images/obama.jpg">
                                    <i class="fa fa-link"></i>
                                </div>
                                <h4>Jack Daniels</h4>
                                <h6>Senior Supervisor</h6>
                                <p>Phasellus lorem augue, <br>
                                vulputate vel orci id, ultricies aliquet risus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="hexa ">
                            <div class="onetwoCol">
                                <div class="hexagon through ">
                                    <img src="assets/images/cenabPre.jpg">
                                    <i class="fa fa-link"></i>
                                </div>
                                <h4>Jack Daniels</h4>
                                <h6>Senior Supervisor</h6>
                                <p>Phasellus lorem augue, <br>
                                vulputate vel orci id, ultricies aliquet risus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="hexa">
                            <div class="secondCol  ">
                                <div class="hexagon two ">
                                    <img src="assets/images/mellim2.jpg">
                                    <i class="fa fa-link"></i>
                                </div>
                                <h4>Jack Daniels</h4>
                                <h6>Senior Supervisor</h6>
                                <p>Phasellus lorem augue, <br>
                                vulputate vel orci id, ultricies aliquet risus.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="hexa">
                            <div class="thirdCol  ">
                                <div class="hexagon three">
                                    <img src="assets/images/mellim.jpg">
                                    <i class="fa fa-link"></i>
                                </div>
                                <h4>Jack Daniels</h4>
                                <h6>Senior Supervisor</h6>
                                <p>Phasellus lorem augue, <br>
                                vulputate vel orci id, ultricies aliquet risus.</p>
                            </div>
                        </div>
                    </div>
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
        <marquee  id="sponsors" behavior="scroll" direction="right" style="float:left;">
    </marquee></div>
    <script type="text/javascript">
    var sponsor = ["<img src='assets/images/client-logo1.png'</img>","<img src='assets/images/client-logo2.png'</img>", "<img src='assets/images/client-logo3.png'</img>",
    "<img src='assets/images/client-logo4.png'</img>","<img src='assets/images/client-logo1.png'</img>", "<img src='assets/images/client-logo2.png'</img>"];
    var img = "";
    var i;
    for (i = 0; i < sponsor.length; i++) {
    img += sponsor[i] +"  ";
    }
    document.getElementById("sponsors").innerHTML = img;
    </script>
    @stop