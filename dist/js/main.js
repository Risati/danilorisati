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

function animateNavbar() {
	$(window).scroll(function() {
		if($(this).scrollTop() > 230){
			$('.navbar').addClass('active-navbar');
		}else{
			$('.navbar').removeClass('active-navbar');
		}
	});
}

function returnFilter() {
  $('.closing').click(function () {
    $('.main-item-portfolio').trigger('click');
  });
}

function modalCloseActive() {
  $('.close-modal').hover(function() {
    $('.lr').toggleClass('lr-active');
  });
}

function homeNavigation(){
	$('.navigation').on({
		 mouseenter: function() {
			 $(this).addClass('hover-in');
			 $('.navigation').addClass('hover-out');
			 if($(this).hasClass('hover-out')){
				 $(this).removeClass('hover-out');
			 }
		 },
		 mouseleave: function() {
			 $('.navigation').removeClass('hover-in hover-out');
		 }
	});
}

function homeInteractive(){
	$('.navigation').on({
		 mouseenter: function() {
			 var select = $(this);
			 $(this).click(function() {
		 		select.addClass('active-item-home');
				$('.navigation').addClass('no-active');
				if($(select).hasClass('active-item-home')){
					$(this).removeClass('no-active');
					$(this).addClass('parallax');
					$('html, body').addClass('open-page');
				}
		 	});
		 }
	});
}

function returnNavigation(){
	$('.close-btn').click(function() {
		$('html, body').removeClass('open-page');
		$('section').removeClass('active-item-home no-active');
		if($(this).hasClass('hover-in')){
			$(this).removeClass('hover-in');
		}
	});
}

function sliderAbout() {
    $('.skills-list').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        arrows: false,
        speed:1300,
        slidesToShow: 4,
        slidesToScroll: 1,
        variableWidth: false,
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
	$('#portfolio').mixItUp();
}


$(function() {
	parallax();
	portfolioFilter();
	animateNavbar();
	returnFilter();
	modalCloseActive();
	homeNavigation();
	homeInteractive();
	sliderAbout();
	returnNavigation();
});
