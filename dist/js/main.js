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
	var items = $('.name, .logo');
	$(window).scroll(function(){
		var percentTop = $(window).scrollTop() / 500;
		 items.css('opacity', 1 - percentTop);
	});
}

function scrollDown() {
	var navigate = $('.scroll-down, .navbar-nav a');
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
	var items = $('article .image, article .description');
	$('#portfolio-list').on('init', function(event, slick) {
		items.addClass('in');
	});
    $('#portfolio-list').slick({
        dots: true,
        infinite: true,
        autoplay: false,
        arrows: true,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: false,
		  draggable: true,
		  fade: true,
		  cssEase: 'ease-out',
		  lazyLoad: 'ondemand',
		  nextArrow: '<i class="fa fa-angle-right"></i>',
		  prevArrow: '<i class="fa fa-angle-left"></i>'
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
		 	items.addClass('out').removeClass('in');
	 }).on('afterChange', function(event, slick, currentSlide, nextSlide){
			items.addClass('in').removeClass('out');
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
	$("a").removeAttr("title");
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
	sliderPortfolio();
});
