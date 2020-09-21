
$(document).ready(function () {

    $(".apply_wizard").hide();
    $("#apply").show();
    $(".apply_continue").click(function () {

        var valid = true;
        $("#" + $(this).attr("validationApplyDiv")).find("input").each(function () {
            if ($(this).val() == "") valid = false;
        });
        if (valid) {
            $(".apply_wizard").slideUp(800);
            $("#" + $(this).attr("data-next-id")).slideDown(800);
        }
    });

    $(".job_back_btn").click(function () {
        $(".apply_wizard").slideUp(800);
        $("#apply").slideDown(800);
    });



    var applyFiles = function () {
        if (this.files.length <= 0) {
            $('.choosen').html('No File Selected');
        } else {
            $('.choosen').empty();

            for (var i = 0; i < this.files.length; ++i) {
                $('.choosen').append($('<span>').html(this.files[i].name));
            }
        }
    }

    $('input[type="file"]')
        .each(function () {
            applyFiles.call(this);
        })
        .change(function () {
            applyFiles.call(this);
        });


});



