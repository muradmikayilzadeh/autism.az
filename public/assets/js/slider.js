// CircleSet-----------------------------------------------
$(document).ready(function($) {
	$("#slider .frame1,.frame2,.frame3").hide(1);

	$("#slider .frame1").show(800);

	$("#slider .first")
	.on('click',function(event) {
		$("#slider .circle").css('background', 'transparent');
		$(this).css('background', 'gray');

		// ACTIONS
		$("#slider .frame1").show(600);
		$("#slider .frame3").hide(600);
		$("#slider .frame2").hide(600);


	});


	$("#slider .second")
	.on('click',function(event) {
		$("#slider .circle").css('background', 'transparent');
		$(this).css('background', 'gray');


		// ACTIONS
		$("#slider .frame1").hide(600);
		$("#slider .frame3").hide(600);
		$("#slider .frame2").show(600);


	});


	$("#slider .third")
	.on('click',function(event) {
		$("#slider .circle").css('background', 'transparent');
		$(this).css('background', 'gray');

		// ACTIONS
		$("#slider .frame1").hide(600);
		$("#slider .frame3").show(600);
		$("#slider .frame2").hide(600);
	});



		$("#slider")
		.on('mousemove',function(event) {
			var x=event.pageX
			var y=event.pageY;

				// FRAME1
				if(x++){
					$("#slider .girl1").css('marginLeft', -x/30+'px');
					$("#slider .girl2").css('marginLeft', x/25+'px');
					$("#slider .boy1").css('marginLeft', -x/35+'px');

					$("#slider .fun").css('marginLeft', x/40+'px');
					$("#slider .two").css('marginLeft', x/40+'px');
					$("#slider .cup").css('marginLeft', x/40+'px');
					$("#slider .bring").css('marginLeft', -x/60+'px');
					$("#slider .life").css('marginLeft', -x/60+'px');
					$("#slider .trendy").css('marginLeft',-x/60+'px');

					$("#slider .boy2").css('marginLeft',-x/35+'px');
					$("#slider .boy3").css('marginLeft',-x/40+'px');
				}

				if(y++){
					$("#slider .girl1").css('marginTop', -y/15+'px');
					$("#slider .girl2").css('marginTop', y/25+'px');

					$("#slider .fun").css('marginTop', y/40+'px');
					$("#slider .two").css('marginTop', y/40+'px');
					$("#slider .cup").css('marginTop', y/40+'px');
					$("#slider .bring").css('marginTop', -y/60+'px');
					$("#slider .life").css('marginTop', -y/60+'px');
					$("#slider .trendy").css('marginTop',-y/60+'px');

					$("#slider .boy2").css('marginTop',-y/35+'px');
					$("#slider .boy3").css('marginTop',-y/40+'px');
				}

				// FRAME2

				if(x++){
					$("#slider .game, .cloud, .cloud2, .bulb").css('marginLeft', -x/40+'px');
					$("#slider .glass").css('marginLeft', x/40+'px');
				}
				if(y++){
					$("#slider .game, .cloud, .cloud2, .bulb").css('marginTop', -y/40+'px');
					$("#slider .glass").css('marginTop', y/40+'px');
				}

				// frame3

				if(x++){
					$("#slider .a,.apple,.swirl2,.parallax,.cd,.mm,.swirl4,.cs3,.cs4,.cs,.cs2").css('marginLeft', -x/40+'px');
					$("#slider .boom,.csa1").css('marginLeft', -x/90+'px');
					$("#slider .cap,.ag,.star,.csa2,.csa3,.csa4,.swirl3").css('marginLeft', x/40+'px');
				}
				if(y++){
					$("#slider .a,.apple,.swirl2,.parallax,.cd,.mm,.swirl4,.cs3,.cs4,.cs,.cs2,.boom,.csa1").css('marginTop', -y/50+'px');
					$("#slider .cap,.ag,.star,.csa2,.csa3,.csa4,.swirl3").css('marginTop', y/50+'px');
				}
				
		});
});
	


