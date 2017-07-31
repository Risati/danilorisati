function parallax() {
	$('.parallax').each(function() {
		 var $obj = $(this);
		 $(window).scroll(function() {
			  var offset = $obj.offset();
			  var yPos = -($(window).scrollTop() - offset.top) / $obj.data('speed');
			  var bgpos = '50% ' + (yPos * 2) + 'px';
			  $obj.css('background-position', bgpos);

		 });
	});
}

function opacityHeaderScroll(){
	var name = $('.name');
	$(window).scroll(function(){
		var percentTop = $(window).scrollTop() / 500;
		 name.css('opacity', 1 - percentTop);
	});
}

function scrollDown() {
	var navigate = $('.scroll-down, .navbar-nav a, #side-nav a');
	$(navigate).bind('click', function(event) {
       var $anchor = $(this);
       $('html, body').stop().animate({
           scrollTop: $($anchor.attr('href')).offset().top - 30
       }, 1200, 'easeInOutExpo');
       event.preventDefault();
   });
}



function modalCloseActive() {
  $('.close-modal').hover(function() {
    $('.lr').toggleClass('lr-active');
  });
}

function sliderPortfolio() {
    $('.projects-container').slick({
        dots: true,
        infinite: true,
        autoplay: false,
        arrows: true,
        speed:250,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: false,
		  draggable: true,
		  nextArrow: '<i class="fa fa-angle-right"></i>',
			prevArrow: '<i class="fa fa-angle-left"></i>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
}

function aos(){
	AOS.init({
		once: true
	});
}

function portfolioFilter(){
	$('#portfolio-list').mixItUp();
}

function activeNavbar(){
	$('.navbar-toggle').click(function () {
		$('.navbar-toggle, main').toggleClass('open');
		$('.navbar-nav').toggleClass('active-navbar');
	});
}

function navigateNavbar(){
	var anchor = $('.navbar-nav a');
	anchor.click(function(){
		$('.navbar-toggle').trigger('click');
	});
}

function parallaxImage(){
	$('.parallax-image').each(function(){
		var $objImage = $(this);
		$(window).scroll(function(){
			var scrolled = $(window).scrollTop();
			$('.parallax-image').css('top', (100-(scrolled * $objImage.data('speed'))) + 'px');
		});
	});
}

function formValidate(){
	var input = $('.form input, .form textarea');
	input.blur(function(){
		if($(this).val()){
			$(this).addClass('form-filled');
		}else{
			$(this).removeClass('form-filled');
		}
	});

	$('.form button').click(function(){
		$('.input-submit').trigger('click');
	});
}

$(function() {
	activeNavbar();
	parallax();
	parallaxImage();
	opacityHeaderScroll();
	scrollDown();
	formValidate();
	navigateNavbar();
	//sliderPortfolio();
});
