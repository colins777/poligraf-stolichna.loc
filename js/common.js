$(document).ready(function () {

    let sandwich = function() {
        $(document).on('click', '.mobile-btn-wrap', function () {
            $('.sandwich').toggleClass('sandwich--active');

            if (!($('.header-bottom').hasClass('header-bottom-show'))) {
                $('.header-bottom').addClass('header-bottom-show');
                $('body').css({'overflow-y' : 'hidden'});
            }
            else {
                $('.header-bottom').removeClass('header-bottom-show');
                $('body').css({'overflow-y' : 'auto'});

            }
            //$('.mobile-btn-wrap').css({'width' : '290px'});

        });
    };

    $('.header-slider').slick({
        dots: true,
        infinite: false,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 2000,
        prevArrow: '<div class="nav-wrap nav-wrap-prev"><div class="nav-arrow prev-arrow"></div></div>',
        nextArrow: '<div class="nav-wrap nav-wrap-next"><div class="nav-arrow next-arrow"></div></div>'
    });

//Scroll Anchor
	$('body').on('click', '[href*="#anchor"]', function(e){
		let fixed_offset = 100;
		$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
		e.preventDefault();
	});


	/*Popup*/

	$("a[href='#callback']").magnificPopup({
		mainClass: 'my-mfp-zoom-in',
		removalDelay: 300,
		type: 'inline'
	});

    sandwich();
});

