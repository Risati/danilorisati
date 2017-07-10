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
	$('.scroll-down').bind('click', function(event) {
       var $anchor = $(this);
       $('html, body').stop().animate({
           scrollTop: $($anchor.attr('href')).offset().top - 15
       }, 800, 'jswing');
       event.preventDefault();
   });
}



function modalCloseActive() {
  $('.close-modal').hover(function() {
    $('.lr').toggleClass('lr-active');
  });
}

function sliderPorfolio() {
    $('.projects-container').slick({
        dots: true,
        infinite: true,
        autoplay: false,
        arrows: true,
        speed:500,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: false,
		  draggable: false,
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



$(function() {
	parallax();
	opacityHeaderScroll();
	scrollDown();
	sliderPorfolio();
});
