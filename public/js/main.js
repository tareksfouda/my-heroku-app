
(function () {
   'use strict';
   
  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 900);
            return false;
          }
        }
      });

	
  	// Portfolio isotope filter
    $(window).load(function() {
        var $container = $('.portfolio-items');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });
	


}());


$(document).ready(function(){

    var amountScrolled = 300;

    $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
            $('a.sf-back-to-top').fadeIn('slow');
        } else {
            $('a.sf-back-to-top').fadeOut('slow');
        }
    });

    $('a.sf-back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        },850);
        return false;
    });

    //Skill
    $('.skillbar').each(function() {
        $(this).appear(function() {
            $(this).find('.count-bar').animate({
                width:$(this).attr('data-percent')
            },3000);
            var percent = $(this).attr('data-percent');
            $(this).find('.count').html('<span>' + percent + '</span>');
        });
    });


});