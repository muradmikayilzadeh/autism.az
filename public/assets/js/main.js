

$(document).ready(function($) {
	$("#primary .col-md-3")
	.on('mouseover',function(event) {
		$(this).find('h4').css('color', '#008C99')
		$(this).find('.circle')
			.css({
				opacity: '.7',
				transform: 'scale(16)'
			});
		$(this).find('i').css('opacity', '1')
		$(this).find('img').css('border', '2px solid #008C99');
		});


	$("#primary .col-md-3")
	.on('mouseleave',function(event) {
		$(this).find('h4').css('color', '#333333')
		$(this).find('.circle')
			.css({
				opacity: '0',
				transform: 'scale(1)'
			});
		$(this).find('i').css('opacity', '0');
		$(this).find('img').css('border', '2px solid white');
	});


	// PORTFOLIO--------------------------------------
	$("#portfolio .hexagon")
	.on('mouseover',function(event) {
		$(this).find('img').css('opacity', '.3')
		$(this).find('i').css('opacity', '1');
	});
	$("#portfolio .hexagon")
	.on('mouseleave',function(event) {
		$(this).find('img').css('opacity', '1')
		$(this).find('i').css('opacity', '0');
	});


	// PRODUCTS--------------------------------------
	var width=$("#products .margin .row").width();
	$("#products .hover").width(width);

	$(window).resize(function(event) {
		var width=$("#products .margin .row").width();
		$("#products .hover").width(width);
	});

	$("#products .col-md-3")
	.on('mouseover', function(event) {
		$(this).find('.hover').css('opacity', '.5')
		$(this).find('button').css('opacity', '1')
		$(this).find('.name').css('color', '#27939F');
	});

	$("#products .col-md-3")
	.on('mouseleave', function(event) {
		$(this).find('.hover').css('opacity', '0')
		$(this).find('button').css('opacity', '0')
		$(this).find('.name').css('color', '#8F9393');
	});

	// SLIDER2--------------------------------------
	img=['assets/images/add1.jpg','assets/images/add2.jpg','assets/images/add1.jpg']

	$("#slider2 .circle1")
	.on('click',function(event) {
		$("#slider2 .tablet img").attr('src', img[0]);
	});
	$("#slider2 .circle2")
	.on('click',function(event) {
		$("#slider2 .tablet img").attr('src', img[1]);
	});
	$("#slider2 .circle3")
	.on('click',function(event) {
		$("#slider2 .tablet img").attr('src', img[2]);
	});

	// TOP-----------------------------------------------
	$(".top").hide(400);
	$(".top")
	.on('click',function(event) {
		$("html,body")
		.animate({scrollTop:0}, 600);
	});
	$(window).scroll(function(event) {
		var x=$(window).scrollTop();
		if (x<500) {
			$(".top").hide(400);
		}else{
			$(".top").show(400);
		}
	});
});
$(document).ready(function(){

$(window).bind('scroll', function () { //scroll
    if ($(window).scrollTop() > 50) {
        $('.mn').addClass('fixed').css({backgroundColor: 'white'});
    } else {
        $('.mn').removeClass('fixed');
    }
});


// //  // $('#header ul li a')
// //  // .hover(function(){
// //  // 	$(this).css({backgroundColor: 'blue', color: 'white'}).stop().slideToggle(400);
 
// //  // });

// //  $('#header ul li a')
// //  .hover(function(){
// //  	$(this).css({backgroundColor: 'blue', color: 'white'}).stop().slideToggle(600);
// //  },function(){
// //  	$(this).css({backgroundColor: 'white', color: 'blue'}).stop().slideToggle(600);
// //  });

});

//  * Leyla   contact Us  slideri    --------------------------------------

imgs = ['assets/images/activity1.jpg','assets/images/activity2.jpg','assets/images/activity3.jpg','assets/images/activity1.jpg','assets/images/activity2.jpg','assets/images/activity3.jpg']  
var sliderWidth=576; 
var sliderHeight=274; 
var count = 0; 

function slider() {
	$('#slider') 
	.append('<div></div><div></div>')
	.css({
		width: sliderWidth+"px",
		height: sliderHeight+"px"
	});

	$('#slider div:nth-child(2)') 
	.addClass('frame')
	.next()

	.children()
	.css({
		position: 'relative',
		bottom:sliderHeight/2+25+'px',

		height:'50px',

	})

// contact Us slideri  bitdi -------------------------------------------------



	
	$(".frame") 
	.css({
		width: sliderWidth+"px",
		height: sliderHeight+"px",
		overflow:"hidden",
		background:"url("+imgs[0]+")",
		backgroundSize:"cover",
		backgroundRepeat: 'no-repeat',
		backgroundPosition:"center center"
	});

	$('.frame').append('<div id="btnGroup"><button id="left"><</button><button id="right">></button></div>');
	$('#btnGroup').css({
		marginTop: sliderHeight/2 +"px"
	});

	// left button =====================================

	$("#left")
	.css({

		fontSize:"1.5em",
		marginLeft: '20'+'px',
		background:"transparent",
		color:"white",
		fontWeight:"600",
		outline:"none",
		border:"none",
		boxShadow:"0px 0px 5px white"
	})
	.addClass('pull-left btn btn-primary')
	.on('click', function() {
		count--;
		if (count == 0) {
			
			count=imgs.length ;
		}
		$('.frame')
			.css({
				backgroundImage:"url("+imgs[count]+")" 
			});
	});
	

	// right button ---------------------------------------------------

	$("#right")
	.css({
		fontSize:"1.5em",
		marginRight: '20'+'px',
		background:"transparent",
		color:"white",
		fontWeight:"600",
		outline:"none",
		border:"none",
		boxShadow:"0px 0px 5px white"
	})
	.addClass('pull-right btn btn-primary')
	.on('click', function() {
		count++;
		if (count == imgs.length) {
			
			count=0;
		}
		$('.frame')
			.css({
				backgroundImage:"url("+imgs[count]+")" 
				
			});

	});
	


}

// -------------------------------------------------------------------------------------
(function($) {

  $.fn.extend({
    slider: function(options) {
        var defaultOptions = {
          scroll: 200,
          mode: "full"
        };
        options = $.extend(options, defaultOptions);

        this.each(function() {

          var $slider = $(this);
          var $items_wrap = $(this)
            .find('.items-wrap')
            .first();

          $(this)
            .find('.next-control')
            .click(next);
          $(this)
            .find('.prev-control')
            .click(prev);
  
          function next() {
            slideFixed(-options.scroll); //slide to left
          }

          function prev() {
            slideFixed(options.scroll); //slide to right
          }

          function slideFixed(delta) {
            if ($items_wrap.prop('scrollWidth') < $slider.width()) {
              return;
            }

            var maxMarginLeft = 0;
            var minMarginLeft = $slider.width() - $items_wrap.prop('scrollWidth');
            var newMarginLeft = parseInt($items_wrap.css('margin-left')) + delta;

            if (newMarginLeft > maxMarginLeft) {
              newMarginLeft = maxMarginLeft;
            } else if (newMarginLeft < minMarginLeft) {
              newMarginLeft = minMarginLeft;
            }

            $items_wrap.css('margin-left', newMarginLeft);
          }

          function slideFull() {
            
 
            if ($items_wrap.prop('scrollWidth') < $slider.width()) {
              return;
            }

            var maxMarginLeft = 0;
            var minMarginLeft = $slider.width() - $items_wrap.prop('scrollWidth');
            var newMarginLeft = parseInt($items_wrap.css('margin-left')) + delta;

            if (newMarginLeft > maxMarginLeft) {
              newMarginLeft = maxMarginLeft;
            } else if (newMarginLeft < minMarginLeft) {
              newMarginLeft = minMarginLeft;
            }

            $items_wrap.css('margin-left', newMarginLeft);
          }
          
        }); 
      } 
  }); 


  $(document).ready(function() {
    $('.slider').slider();
  });

})(jQuery); 


