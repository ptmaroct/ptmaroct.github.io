$(document).ready(function() {
        // run test on initial page load
        checkSize();

        // Slide in elements on scroll
        $(window).scroll(function() {
          $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
              if (pos < winTop + 600) {
                $(this).addClass("slide");
              }
          });
        });

        $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function () {
                $('#back-to-top').tooltip('hide');
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
            
            $('#back-to-top').tooltip('show');
    });

    //Function to the css rule
    function checkSize(){
    	var width = $(window).width();

    	    if (width > 768) {
        //Do Something

        $(function(){
    	$(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    }
    }


     $(document).ready(function(){
      $('.slick-slider').slick({
          dots: false,
          infinite: true,
          speed: 900,
          slidesToShow: 1,
          centerMode: true,
          autoplay: true,
          autoplaySpeed: 500,
          variableWidth: true,
          arrows: false
      });
    });