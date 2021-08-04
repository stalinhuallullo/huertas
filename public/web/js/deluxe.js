$(document).ready(function() {
    if ($('.b24-ctn-slider').length && $('.b24-ctn-carousel').length) {
        $('.b24-ctn-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: false,
            infinite:false,
            fade: true,
            centerMode: true,
            draggable: true,
            asNavFor: '.b24-ctn-carousel'
        });
        $('.b24-ctn-carousel').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.b24-ctn-slider',
            dots: false,
            arrows: true,
            prevArrow: '<button class="slick-prev icon-arrow_left" aria-label="Previous" type="button"></button>',
            nextArrow: '<button class="slick-next icon-arrow_right" aria-label="Next" type="button"></button>',
            centerMode: true,
            infinite:false,
            centerMode: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                    }
                }
            ]
        });
    }
});
