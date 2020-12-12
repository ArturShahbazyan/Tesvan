$(window).on('load', function () {
    $("#cover").fadeOut(1000);

});


/* document.addEventListener("DOMContentLoaded", function (event) {
    $("#cover").fadeOut(1000);
}); */



$(document).ready(function () {


    //Smooth Scroll

    // Select all links with hashes
    $('a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            var target = $(this.hash);

            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 150
                }, 2000, function () {

                });
            }
        });


    /* $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href'))
                .offset()
                .top - 150
        }, 800);
    }); */


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
                $("nav ul li a[href='https://www.tesvan.com/#" + elemId + "']").addClass('current');
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
    });


});
