function goTo() {
    $('.goTo').click(function () {
        $('html,body').animate({
            scrollTop: $('.portfolio').offset().top -83}, 'slow');
    });
}
function affix() {
    $('#navbar-primary').affix({
        offset: {
            top: 50
        }
    })
}
function adjustMenuScroll() {
    if($('body').hasClass('blog-page') || $('body').hasClass('single-page')){
      $('.navbar').addClass('animateMenu');
    }else{
      $(window).scroll(function () {
          var height = $(window).scrollTop();
          if(height > 0){
              $('.navbar').addClass('animateMenu');
              $('.toTop').fadeIn();
          } else if(height < 200){
            $('.navbar').removeClass('animateMenu');
            $('.toTop').fadeOut();
          }
      });
    }
}
function portfolioFilter() {
    $('.categories a').click(function(e){
        $('.categories ul li').removeClass('active');
        $(this).parent('li').addClass('active');
        var itemSelected = $(this).attr('data-filter');
        $('.portfolio-item').each(function(){
            if (itemSelected == '*'){
                $(this).removeClass('filtered').removeClass('selected');
                return;
            } else if($(this).is(itemSelected)){
                $(this).removeClass('filtered').addClass('selected');
            } else{
                $(this).removeClass('selected').addClass('filtered');
            }
        });
    });
}
function preLoader() {
    $(window).load(function() {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350);
    })
}
function sliderAbout() {
    $('.skills').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        arrows: false,
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 2,
        variableWidth: true,
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
function scrollTop() {
    $('.toTop').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 600);
        return false;
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

$(function () {
    goTo();
    affix();
    adjustMenuScroll();
    preLoader();
    sliderAbout();
    scrollTop();
    returnFilter();
    $('#portfolio').mixItUp();
    modalCloseActive();

});
