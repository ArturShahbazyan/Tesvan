
$(window).on('load', function () {
    $("#cover").fadeOut(1000);
});

$(document).ready(function () {

    // change element position
    /*  $(document).ready(function () {
         $(".square_d").mouseover(function () {
             alert("hello");
             $("square_d_aqua > h5 ").css({
                 "position": "absolute",
                 "-moz - transform": "rotate(-10deg)",
                 "-webkit - transform": "rotate(-10deg)",
                 "-ms - transform": "rotate(-10deg)",
                 "transform": "rotate(-10deg)"
             }),
                 $(".square_d_aqua > svg ").css({
                     "position": "absolute",
                     "-moz - transform": "rotate(-10deg)",
                     "-webkit - transform": "rotate(-10deg)",
                     "-ms - transform": "rotate(-10deg)",
                     "transform": "rotate(-10deg)"
                 })
             $(".square_d_aqua > p ").css({
                 "position": "absolute",
                 "-moz - transform": "rotate(-10deg)",
                 "-webkit - transform": "rotate(-10deg)",
                 "-ms - transform": "rotate(-10deg)",
                 "transform": "rotate(-10deg)"
             });
         });
     }); */


    // >>>>>> MAP >>>>>>>
    var countryElements = document.getElementById('Group_507').childNodes;
    var countryCount = countryElements.length;
    var countryName = document.querySelector(".countryName");

    for (var i = 0; i < countryCount; i++) {
        countryElements[i].onmouseover = function () {
            countryName.innerHTML = this.getAttribute('data-country');
        }
        countryElements[i].onmouseout = function () {
            countryName.innerHTML = " ";
        }
    }

    // >>>>>> MAP >>>>>>>

    //Smooth Scroll
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href'))
                .offset()
                .top - 150
        }, 800);
    });

    $(function () {

        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 50) {
                $(".header").addClass("active");
            } else {
                // remove the background property so it comes transparent again (defined in your
                // css)
                $(".header").removeClass("active");
            }
        });
    });

    // Select Active Link on Active Section
    var addClassOnScroll = function () {
        var windowTop = $(window).scrollTop();
        $('section[id]').each(function (index, elem) {
            var offsetTop = $(elem)
                .offset()
                .top - 160;
            var outerHeight = $(this).outerHeight(true);

            if (windowTop > (offsetTop - 50) && windowTop < (offsetTop + outerHeight)) {
                var elemId = $(elem).attr('id');
                $("nav ul li a.current").removeClass('current');
                $("nav ul li a[href='#" + elemId + "']").addClass('current');
            }
        });

    };

    var addFadeOnScroll = function () {
        var windowBottom = $(this).scrollTop() + $(this).innerHeight();
        // windowBottom = windowBottom + 80;

        $(".fade-in").each(function () {
            /* Check the location of each desired element */
            var objectBottom = $(this)
                .offset()
                .top + $(this).outerHeight();
            /* If the element is completely within bounds of the window, fade it in */
            if (objectBottom < windowBottom) { //object comes into view (scrolling down)
                if ($(this).css("opacity") == 0) {
                    $(this).fadeTo(1000, 1);
                }
            } else { //object goes out of view (scrolling up)
                if ($(this).css("opacity") == 1) {
                    $(this).fadeTo(1000, 0);
                }
            }
        });
    };

    $(function () {
        $(window).on('scroll', function () {
            addClassOnScroll();
            addFadeOnScroll();
        });

        // Back to Top Icon
        $(window).scroll(function () {
            if ($(this).scrollTop() >= 50) {
                $('#return-to-top').fadeIn(200);
            } else {
                $('#return-to-top').fadeOut(200);
            }
        });
        $('#return-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        });


        // Members Slider
        $('.members-slider').slick({
            swipeToSlide: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            autoplay: true, /* this is the new line */
            autoplaySpeed: 2000,
            infinite: true,
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
            responsive: [
                {
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

    /* ------------------------- flags start ------------------------- */


    /* ------------------------- flags end ------------------------- */

});

