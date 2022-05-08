(function ($) {

    $(document).ready(function () {

    	if(!$('.mod-office-locations').length) return;



        $('.slicky-mod-office-locations').slick({

            arrows: false,

            slidesToShow: 3,

            slidesToScroll: 1,

            infinite: true,

            centerMode: true,

            centerPadding: 0,

            focusOnSelect: true,

            dots:true,

            pauseOnFocus: true,

            autoplay: true,

            autoplaySpeed: 6000,
            responsive: [
        {
            breakpoint: 580,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
      }
    ] 

        });

    });

})(jQuery);



