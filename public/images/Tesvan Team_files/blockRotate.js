$(document).ready(function () {

    // change element position
    $(".square_d_aqua, .square_d_aqua ~ h5, .square_d_aqua ~ svg, .square_d_aqua ~ p").mouseover(function () {
        $(".square_d_aqua").css({
            "-moz - transform": "rotate(0deg)",
            "-webkit - transform": "rotate(0deg)",
            "-ms - transform": "rotate(0deg)",
            "transform": "rotate(0deg)"
        });
    });

    $(".square_d_aqua, .square_d_aqua ~ h5, .square_d_aqua ~ svg, .square_d_aqua ~ p").mouseout(function () {
        $(".square_d_aqua").css({
            "-moz - transform": "rotate(10deg)",
            "-webkit - transform": "rotate(10deg)",
            "-ms - transform": "rotate(10deg)",
            "transform": "rotate(10deg)"
        });

    });

});

