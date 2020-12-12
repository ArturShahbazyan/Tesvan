<div class="container">
    @php $locale = session()->get('locale'); @endphp
    <nav class="navbar navbar-expand-lg navbar-light p-0">

        <div class="d-flex">
            <a href="{{ url('/') }}">
                <img src="images/logo.png" class="logo" alt="Logo"></a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="nav-item dropdown d-lg-none _flag_row">
            <a id="navbarDropdown" class="_flag" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre="v-pre">
                @switch($locale)
                @case('am')
                <img src="{{asset('images/am.png')}}" width="33px" height="22px">
                @break
                @case('ru')
                <img src="{{asset('images/ru.png')}}" width="33px" height="22px">
                @break
                @default
                <img src="{{asset('images/us.png')}}" width="33px" height="22px">
                @endswitch
                <span class="arrow_img">
                    <img alt="arrow" src="{{asset('images/arrow.png')}}" />
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right flags_dropdown_menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item hue_blue" href="lang/es">
                    <img src="{{asset('images/us.png')}}" width="33px" height="23px">
                    {{ __("English")}}</a>
                <a class="dropdown-item hue_blue" href="lang/am">
                    <img src="{{asset('images/am.png')}}" width="33px" height="23px">
                    {{ __("Armenian")}}</a>
                <a class="dropdown-item hue_blue" href="lang/ru">
                    <img src="{{asset('images/ru.png')}}" width="33px" height="23px">
                    {{ __("Russian")}}</a>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-row-reverse text-center" id="myNavbar">
            <div class="menu-menu-container">
                <ul id="menu-menu" class="navigation navbar-nav ml-auto flex-nowrap custom_menu">
                    <li id="menu-item-1" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1">
                        <a href="{{ url('/#QA') }}" class="hue_blue">{{ __("About Us")}}</a>
                    </li>
                    <li id="menu-item-2" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2">
                        <a class="hue_blue" href="{{ url('job') }}">{{ __("Job")}}</a>
                    </li>
                    <li id="menu-item-3" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3">
                        <a class="hue_blue" href="{{ url('courses') }}">{{ __("Courses")}} </a>
                    </li>
                    <li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4">
                        <a href="{{ url('/#banner') }}" class="hue_blue">{{ __("Quality")}}</a>
                    </li>
                    <li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5">
                        <a href="{{ url('/#co_workers') }}" class="hue_blue">{{ __("Co-Workers")}}</a>
                    </li>
                    <li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6">
                        <a href="{{ url('/#testimonials') }}" class="hue_blue">{{ __("Customers")}}</a>
                    </li>
                    <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7">
                        <a href="{{ url('/#team') }}" class="hue_blue">{{ __("Team")}}</a>
                    </li>
                    <li class="menu-btn menu-item menu-item-type-custom menu-item-object-custom
               menu-item-8" id="menu-item-8">
                        <a href="{{ url('/#contact_us') }}" class="hue_blue">{{ __("Request Demo")}}</a>
                    </li>
                    <!-- Localizaton start-->
                    <li id="menu-item-9" class="flag menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre="v-pre">
                                    @switch($locale) @case('am')
                                    <img src="{{asset('images/am.png')}}" width="33px" height="22px">
                                    @break @case('ru')
                                    <img src="{{asset('images/ru.png')}}" width="33px" height="22px">
                                    @break @default
                                    <img src="{{asset('images/us.png')}}" width="33px" height="22px">
                                    @endswitch
                                    <span class="arrow_img">
                                        <img alt="arrow" src="{{asset('images/arrow.png')}}" />
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right flags_dropdown_menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item hue_blue" href="lang/es">
                                        <img src="{{asset('images/us.png')}}" width="33px" height="23px">
                                        {{ __("English")}}</a>
                                    <a class="dropdown-item hue_blue" href="lang/am">
                                        <img src="{{asset('images/am.png')}}" width="33px" height="23px">
                                        {{ __("Armenian")}}</a>
                                    <a class="dropdown-item hue_blue" href="lang/ru">
                                        <img src="{{asset('images/ru.png')}}" width="33px" height="23px">
                                        {{ __("Russian")}}</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Localizaton end-->
                </ul>
            </div>
    </nav>
</div>
