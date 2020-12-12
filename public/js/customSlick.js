$(document).ready(function () {


    // Members Slider
    $('.members-slider').slick({
        swipeToSlide: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        accessibility: false,
        responsive: [

            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    /* centerMode: true, */
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });

    // Testimonials Slider
    $('.testimonials-slider').slick({
        swipeToSlide: true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        accessibility: false,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    centerMode: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true
                }
            }

        ]
    });

});
