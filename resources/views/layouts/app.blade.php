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
        <link rel="stylesheet" type="text/css" href="/css/job_hire.css">
        <link rel="stylesheet" type="text/css" href="/css/job_apply.css">
        <link rel="stylesheet" type="text/css" href="/css/courses_qa_courses.css">
        <link rel="stylesheet" type="text/css" href="/css/courses_reg.css">
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
      @include('header')
</header>


     <div id="wrapp">

     @yield('content')


            <a href="javascript:" id="return-to-top">
                <div class="icon-chevron-up">
                    <img src="uploads/2020/05/top-arrow.png" alt="">
                </div>
            </a>
        </div>

        <footer class="hue_bg_grey">
        @include('footer')
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
    <script src="js/slick.min.js"></script>


    @yield('scripts')


</body>
</html>