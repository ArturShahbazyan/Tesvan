<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tesvan Team</title>

        <link rel="icon" href="uploads/2020/05/logo.png" sizes="192x192">
        <!-- <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"> -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrapCss/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/css/slick.css">
        <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/header.css">
        <link rel="stylesheet" type="text/css" href="/css/banner.css">
        <link rel="stylesheet" type="text/css" href="/css/qa.css">
        <link rel="stylesheet" type="text/css" href="/css/co-workers.css">
        <link rel="stylesheet" type="text/css" href="/css/customers.css">
        <link rel="stylesheet" type="text/css" href="/css/team.css">
        <link rel="stylesheet" type="text/css" href="/css/testiomanials.css">
        <link rel="stylesheet" type="text/css" href="/css/partners.css">
        <link rel="stylesheet" type="text/css" href="/css/contact_us.css">
        <link rel="stylesheet" type="text/css" href="/css/footer.css">
    </head>
<body>


<div id="cover">
    <div class="pb-3">
    <span > Tesvan </span>
    </div>
    
    <div>
        <div class="loader_col">
            <img src="images/logo.png" class="logo" alt="Logo">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    class="loader_svg"
                    width="200px"
                    height="200px"
                    viewBox="0 0 100 100"
                    preserveAspectRatio="xMidYMid">
                    <path
                        d="M10 50A40 40 0 0 0 90 50A40 42 0 0 1 10 50"
                        fill="#f4b41a"
                        stroke="none">
                        <animateTransform
                            attributeName="transform"
                            type="rotate"
                            dur="1s"
                            repeatCount="indefinite"
                            keyTimes="0;1"
                            values="0 50 51;360 50 51"></animateTransform>
                    </path>
                </svg>
            </div>
        </div>
    </div>

<header class="header">
        @yield('header')
</header>

     <div id="wrapp">

        <section id="banner">
           @yield('banner')
        </section>
      
        <section id="QA">
           @yield('qa')
        </section>

        <section id="co_workers">
           @yield('co-workers')
        </section>


        <section id="partners">
        @yield('partners')
        </section>

        <section id="customers">
            @yield('customers')
        </section>

        <section id="team">
        @yield('team')
        </section>

        <section id="testiomanials">
        @yield('testiomanials')
        </section>

        <section id="contact_us">
        @yield('contact_us')
        </section>

        



            
            

<!--                 <section id="automate">
                    <div class="container">
                        <div class="text-center title-padd">
                            <h2>We Automate</h2>
                            <p>We know not all testing can be automated but we posses the expertise to do it
                                when automation make the most sense</p>
                        </div>
                        <div class="automate-rows">
                            <div class="automate-single">
                                <div class="d-flex align-items-center">
                                    <div class="automate-dot automate-dot-1"></div>
                                    <div class="number num-bg-1">
                                        <p>01</p>
                                    </div>
                                    <p>We analyze the scope of automation, choose the most suitable tools and make
                                        duration estimates</p>
                                    <div class="image-circle">
                                        <img src="uploads/2020/05/automate-1.png" alt=""></div>
                                </div>
                            </div>
                            <div class="automate-single">
                                <div class="d-flex align-items-center">
                                    <div class="automate-dot automate-dot-2"></div>
                                    <div class="number num-bg-2">
                                        <p>02</p>
                                    </div>
                                    <p>We take into our hands and lead the development and implementation of
                                        Automated Testing to further enhance your product’s growth and shorten your
                                        deliver cycles</p>
                                    <div class="image-circle">
                                        <img src="uploads/2020/05/automate-22.png" alt=""></div>
                                </div>
                            </div>
                            <div class="automate-single">
                                <div class="d-flex align-items-center">
                                    <div class="automate-dot automate-dot-3"></div>
                                    <div class="number num-bg-3">
                                        <p>03</p>
                                    </div>
                                    <p>We gather feedback, do the necessary tweaks, calibrate and move forward by
                                        increasing the test coverage.</p>
                                    <div class="image-circle">
                                        <img src="uploads/2020/05/automate-3.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
 -->


<!--                 <section id="skills">
                    <div class="container">
                        <div class="text-center">
                            <h2>Our Skills</h2>
                            <p>Some of the prominent skills our team members possess</p>
                        </div>
                        <div class="skills-rows">
                            <div class="row flex-wrap justify-content-center">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-1.png" alt="">
                                        <p>Multi-browser multi-OS testing</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-2.png" alt="">
                                        <p>Setting up and configuring CI/CD systems</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-4.png" alt="">
                                        <p>Java, Python, JS</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-5.png" alt="">
                                        <p>Selenium, Cypress, Maven, Mocha</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-6.png" alt="">
                                        <p>TDD/BDD, Gherkin/Cucumber</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-7.png" alt="">
                                        <p>API testing</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-8.png" alt="">
                                        <p>SQL knowledge</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-10.png" alt="">
                                        <p>Working in a geographically distributed team</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-11.png" alt="">
                                        <p>Agile processes (Scrum, Kanban)</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-12.png" alt="">
                                        <p>Excellent verbal and written communication</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-13.png" alt="">
                                        <p>Handling multiple projects with changing priorities and meeting concurrent
                                            deadlines</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="skills-single text-center">
                                        <img src="images/skill-14.png" alt="">
                                        <p>Excellent analytical and problem solving skills</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->



<!--                 <section id="testimonials">
                    <div class="container">
                        <div class="text-center title-padd">
                            <h2>Testimonials</h2>
                            <p>This is where testimonials will go once awesome clients like you write them!</p>
                        </div>
                        <div class="testimonials-bg mb-4">
                            <div class="testimonials-slider">
                                <div class="d-flex align-items-start testimonials-single">
                                    <img src="uploads/2020/05/janett.png" alt="" class="img-fluid">
                                    <div class="d-block slide-desc">
                                        <h4>Janell Pechacek</h4>
                                        <span>https://www.tailwindapp.com/</span>
                                        <p>“Davit helped us setup a full-blown automated testing framework for our web
                                            marketing automation product that keeps the mission-critical functionality
                                            always under the control. Highly appreciate it!”</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start testimonials-single">
                                    <img src="uploads/2020/05/james-1.jpg" alt="" class="img-fluid">
                                    <div class="d-block slide-desc">
                                        <h4>James MacGregor</h4>
                                        <span>PO at gsmsds.com
                                        </span>
                                        <p>Davit has done an excellent job here at Global Safety Management. He
                                            established a sound testing strategy which raised our software quality
                                            considerably. Very satisfied with our cooperation</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start testimonials-single">
                                    <img src="uploads/2020/05/ray_circled-1.png" alt="" class="img-fluid">
                                    <div class="d-block slide-desc">
                                        <h4>Raymond Huang</h4>
                                        <span>Cofounder at legalatoms.com</span>
                                        <p>“Tesvan has some remarkable knowledge of Cypess e2e automation. They filled
                                            the gaps in our automated tests and added new tests. Glad I chose them.”</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start testimonials-single">
                                    <img src="uploads/2020/07/arto.png" alt="" class="img-fluid">
                                    <div class="d-block slide-desc">
                                        <h4>Arto Minassian</h4>
                                        <span>Founder @ 10Web.io</span>
                                        <p>Well, we needed to test our application before a major release but didn't
                                            want to hire a dedicated team member for that. Tesvan guys filled the gap
                                            perfectly and provided the thorough testing we needed at this time. Kudos for
                                            the awesome work!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->


<!--                 <section id="contact">
                    <div class="container">
                        <div class="text-center title-padd">
                            <h2>Request Demo</h2>
                            <p>Contact us with any questions or requests. We'll be happy to discuss your
                                testing needs and see how we can help with it</p>
                        </div>
                        <div class="form text-center">
                            <div role="form" class="wpcf7" id="wpcf7-f107-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response" aria-live="polite"></div>
                                <form
                                    action="index.html#wpcf7-f107-o1"
                                    method="post"
                                    class="wpcf7-form"
                                    novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="107"/>
                                        <input type="hidden" name="_wpcf7_version" value="5.1.9"/>
                                        <input type="hidden" name="_wpcf7_locale" value="en_US"/>
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f107-o1"/>
                                        <input type="hidden" name="_wpcf7_container_post" value="0"/></div>
                                    <div class="home-form">
                                        <div class="d-flex flex-wrap">
                                            <div class="col-12">
                                                <img src="uploads/2020/05/name.png">
                                                <span class="wpcf7-form-control-wrap your-name"><input
                                                    type="text"
                                                    name="your-name"
                                                    value=""
                                                    size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true"
                                                    aria-invalid="false"
                                                    placeholder="Name"/></span></div>
                                            <div class="col-12">
                                                <img src="uploads/2020/05/email.png">
                                                <span class="wpcf7-form-control-wrap your-email"><input
                                                    type="email"
                                                    name="your-email"
                                                    value=""
                                                    size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                    aria-required="true"
                                                    aria-invalid="false"
                                                    placeholder="Email"/></span></div>
                                            <div class="col-12">
                                                <img src="uploads/2020/05/company.png">
                                                <span class="wpcf7-form-control-wrap your-company"><input
                                                    type="text"
                                                    name="your-company"
                                                    value=""
                                                    size="40"
                                                    class="wpcf7-form-control wpcf7-text"
                                                    aria-invalid="false"
                                                    placeholder="Company"/></span></div>
                                            <div class="col-12">
                                                <img src="uploads/2020/05/message.png">
                                                <span class="wpcf7-form-control-wrap your-message">
                                                    <textarea
                                                        name="your-message"
                                                        cols="40"
                                                        rows="10"
                                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                        aria-required="true"
                                                        aria-invalid="false"
                                                        placeholder="Message"></textarea></span></div>
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"/></div>
                                </div>
                                <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section> -->
            <a href="javascript:" id="return-to-top">
                <div class="icon-chevron-up">
                    <img src="uploads/2020/05/top-arrow.png" alt="">
                </div>
            </a>
        </div>

        <footer class="hue_bg_grey">
        @yield('footer')
    </footer>

    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="js/custom.js"></script>
    <script src="js/slick.js"></script>
    <!-- <script src="js/slick.min.js"></script> -->

    <script>

    // change element position
    $(document).ready(function () {
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



    </script>

</body>
</html>