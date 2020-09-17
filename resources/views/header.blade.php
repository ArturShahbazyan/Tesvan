<div class="container">
@php $locale = session()->get('locale'); @endphp
<nav class="navbar navbar-expand-lg navbar-light p-0">

   <div class="d-flex">
      <a href="http://127.0.0.1:8000">
      <img src="images/logo.png" class="logo" alt="Logo"></a>
      <div class="w-100 text-right">
         <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#myNavbar">
         <span class="navbar-toggler-icon"></span>
         </button>
      </div>
   </div>
   <div class="nav-item dropdown d-lg-none _flag_row">
         <a
            id="navbarDropdown"
            class="_flag"
            href="#"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            v-pre="v-pre">
         @switch($locale) @case('am')
         <img src="{{asset('images/am.png')}}" width="33px" height="22px">
         @break @case('pk')
         <img src="{{asset('images/ru.png')}}" width="33px" height="22px">
         @break @default
         <img src="{{asset('images/us.png')}}" width="33px" height="22px">
         @endswitch
         <span class="arrow_img">
         <img alt="arrow" src="{{asset('images/arrow.png')}}"/>
         </span>
         </a>
         <div class="dropdown-menu dropdown-menu-right flags_dropdown_menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item hue_blue" href="lang/es">
            <img src="{{asset('images/us.png')}}" width="33px" height="23px">
            English</a>
            <a class="dropdown-item hue_blue" href="lang/am">
            <img src="{{asset('images/am.png')}}" width="33px" height="23px">
            Armenian</a>
            <a class="dropdown-item hue_blue" href="lang/ru">
            <img src="{{asset('images/ru.png')}}" width="33px" height="23px">
            Russian</a>
         </div>
      </div>

   <div
      class="collapse navbar-collapse flex-row-reverse text-center"
      id="myNavbar">
      <div class="menu-menu-container">
         <ul id="menu-menu" class="navigation navbar-nav ml-auto flex-nowrap custom_menu">
            <li
               id="menu-item-1"
               class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                     <a
                        class="hue_blue"
                        id="navbarDropdown"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        v-pre="v-pre">
                       Services
                     </a>
                     <div class="dropdown-menu dropdown-menu-right services_dropdown_menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item hue_blue" href="{{ url('courses') }}">Apply for Courses </a>
                        <a class="dropdown-item hue_blue" href="{{ url('job') }}">Apply for a job</a>
                     </div>
                  </li>
               </ul>
            </li>
            <li
               id="menu-item-2"
               class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2">
               <a href="{{ url('#QA') }}" class="hue_blue">Quality</a>
            </li>
            <li
               id="menu-item-3"
               class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3">
               <a href="{{ url('/#we-do') }}" class="hue_blue">Courses</a>
            </li>
            <li
               id="menu-item-4"
               class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4">
               <a href="{{ url('/#co_workers') }}" class="hue_blue">Co-Workers</a>
            </li>
            <li
               id="menu-item-15"
               class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15">
               <a href="#skills" class="hue_blue">Customers</a>
            </li>
            <li
               id="menu-item-16"
               class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16">
               <a href="{{ url('/#testimonials') }}" class="hue_blue">Testimonials</a>
            </li>
            <li
               id="menu-item-17"
               class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17">
               <a href="{{ url('/#team') }}" class="hue_blue">Team</a>
            </li>
            <li
               class="menu-btn menu-item menu-item-type-custom menu-item-object-custom
               menu-item-18"
               id="menu-item-18">
               <a href="#contact" class="hue_blue">Requeast Demo</a>
            </li>
            <!-- Localizaton start-->
            <li
               id="menu-item-19"
               class="flag menu-item menu-item-type-custom menu-item-object-custom menu-item-19">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                     <a
                        id="navbarDropdown"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        v-pre="v-pre">
                     @switch($locale) @case('am')
                     <img src="{{asset('images/am.png')}}" width="33px" height="22px">
                     @break @case('pk')
                     <img src="{{asset('images/ru.png')}}" width="33px" height="22px">
                     @break @default
                     <img src="{{asset('images/us.png')}}" width="33px" height="22px">
                     @endswitch
                     <span class="arrow_img">
                     <img alt="arrow" src="{{asset('images/arrow.png')}}"/>
                     </span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right flags_dropdown_menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item hue_blue" href="lang/es">
                        <img src="{{asset('images/us.png')}}" width="33px" height="23px">
                        English</a>
                        <a class="dropdown-item hue_blue" href="lang/am">
                        <img src="{{asset('images/am.png')}}" width="33px" height="23px">
                        Armenian</a>
                        <a class="dropdown-item hue_blue" href="lang/ru">
                        <img src="{{asset('images/ru.png')}}" width="33px" height="23px">
                        Russian</a>
                     </div>
                  </li>
               </ul>
            </li>
            <!-- Localizaton end-->
         </ul>
      </div>
</nav>
</div>