$(document).ready(function(){
	$('.scrollDown').on('click', function(e){
		var target = $(this).attr("href");
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $(target).offset().top - 100
		}, 1000);
	});


	$('.ourWork-slide .slideshow').slick({
		slidesToShow: 2,
		arrows: false,
		responsive:[
			{
				breakpoint: 1030,
				settings:{
					slidesToShow: 1
				}
			},
		]
	});
	$('.ourWork-slide .slide-nav .next').on('click',function(e){
		e.preventDefault();
		$('.ourWork-slide .slideshow').slick('slickNext');
	});
	$('.ourWork-slide .slide-nav .prev').on('click',function(e){
		e.preventDefault();
		$('.ourWork-slide .slideshow').slick('slickPrev');
	});

	$(window).on('scroll',function() {    
		var scroll = $(window).scrollTop();
		if (scroll >= 100 && $("#header").hasClass('home')) {
			$("#header").addClass('scroll');
		} else{
			$("#header").removeClass('scroll');
		}
	});
});