<section id="partners">
    <div class="container">
        <div class="text-center partners_heder_txt_col">
            <h2 class="hue_blue">Partners and Clients</h2>
            <p class="hue_blue">We are not only providing our service to global companies
                but also work for them within cross-team development on remote
            </p>
        </div>
        <div class="logos_row">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="logos_col severalnines_col" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
                        <img src="images/logo_black/severalnines.svg" data-col="g" class="img-responsive logo_imgs">
                        <img src="images/logo_colorfull/severalnines.svg" style="display:none" data-col="b" class="img-responsive logo_imgs">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="logos_col custo_col" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
                        <img src="images/logo_black/custo.svg" data-col="g" class="img-responsive logo_imgs">
                        <img src="images/logo_colorfull/custo.svg" style="display:none" data-col="b" class="img-responsive logo_imgs">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="logos_col luseen_col" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
                        <img src="images/logo_black/luseen.svg" data-col="g" class="img-responsive logo_imgs">
                        <img src="images/logo_colorfull/luseen.svg" style="display:none" data-col="b" class="img-responsive logo_imgs">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="logos_col sgames_col" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
                        <img src="images/logo_black/sgames.svg" data-col="g" class="img-responsive logo_imgs">
                        <img src="images/logo_colorfull/sgames.svg" style="display:none" data-col="b" class="img-responsive logo_imgs">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="logos_col spreenatuen_col" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
                        <img src="images/logo_black/spreenatuen.svg" data-col="g" class="img-responsive logo_imgs">
                        <img src="images/logo_colorfull/spreenatuen.svg" style="display:none" data-col="b" class="img-responsive logo_imgs">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="logos_col big_bang_col" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
                        <img src="images/logo_black/BB.svg" data-col="g" class="img-responsive logo_imgs">
                        <img src="images/logo_colorfull/BB.svg" style="display:none" data-col="b" class="img-responsive logo_imgs">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    function hvr(dom, action) {
        if (action == 'in') {
            $(dom).find("[data-col=g]").css("display", "none");
            $(dom).find("[data-col=b]").css("display", "inline-block");
        } else {
            $(dom).find("[data-col=b]").css("display", "none");
            $(dom).find("[data-col=g]").css("display", "inline-block");
        }
    }

</script>
