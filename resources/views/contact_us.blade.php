<section id="contact_us">
    <div class="container">
        <div class="text-center contact_us_heder_txt_col">
            <h2 class="hue_blue">Contact Us</h2>
            <p class="hue_blue">Contact us with any questions or requests. We'll be happy to
                discuss your testing needs and see how we can help with it</p>
        </div>
        <div class="form_row">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-12 clearfix">
                    <div class="row float-xl-right  float-lg-right">
                        <div class="form_contacts_col">
                            <div class="row">
                                <div class="col-x1-4 col-lg-5 col-md-5 col-6">
                                    <div class="form_contacts_txt_row">
                                        <h4 class="hue_black">Contacts</h4>
                                        <div class="address_row">
                                            <h5>Address</h5>
                                            <p>Armenia, Sevan</p>
                                        </div>
                                        <div class="email_row">
                                            <h5>Email</h5>
                                            <p>info@tesvan.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-x1-4 col-lg-5 col-md-5 col-6 offset-xl-2 offset-lg-1">
                                    <div class="icons_phone_col">
                                        <div class="phone_row">
                                            <h5>Phone Number</h5>
                                            <p>+(374) 96 88 23 08</p>
                                        </div>
                                        <div class="icons_row">
                                            <div class="single-icon">
                                                <a href="https://www.facebook.com/tesvanllc" target="_blank">
                                                    <div class="icon-bg">
                                                        <img src="images/social_icons/facebook.svg"></div>
                                                </a>
                                                <a href="https://www.upwork.com/o/companies/~01e834c1caa24e2f82/" target="_blank">
                                                    <div class="icon-bg">
                                                        <img src="images/social_icons/upwork.svg"></div>
                                                </a>
                                                <a href="https://www.linkedin.com/company/tesvan/" target="_blank">
                                                    <div class="icon-bg">
                                                        <img src="images/social_icons/linkedin.svg"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="row">
                        <div class="form_col" id="contact-us">
                            <h5 class="hue_blue text-center">Let’s discuss your project!</h5>
                            <div class="tesvan_form">
                                <p class="hue_blue">All fields are required</p>
                                <form method="post" action="{{ url('/#contact-us') }}" autocomplete="off" id="form_contact_us" name="contact_us" novalidate="novalidate">
                                    @csrf
                                    <!-- >>>>> Success message >>>>> -->
                                    {{-- @if(Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        {{Session::get('success')}}
                            </div>
                            @endif --}}

                            <!-- <<<<< Success message <<<<< -->

                            <div class="form-group custom_form_group">
                                <label for="name">Name</label>
                                <input type="text" class="name form-control custom_form_input" maxlength="50" id="name" name="name" onblur="nameValidate()">
                                <div id="nameStatus" class="invalid-feedback">Name field is required</div>
                            </div>
                            <div class="form-group custom_form_group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control email custom_form_input" maxlength="50" id="email" onblur="emailValidate()">
                                <div id="emailStatus" class="invalid-feedback">Email field is required</div>
                            </div>
                            <div class="form-group custom_form_group">
                                <label for="phone">Phone</label>
                                <input type="tel" name="phone" class="phone form-control custom_form_input" maxlength="50" id="phone" onblur="phoneValidate()">
                                <div id="phoneStatus" class="invalid-feedback">Phone field is required</div>
                            </div>
                            <div class="form-group custom_form_group">
                                <label for="message">Message</label>
                                <textarea maxlength="250" name="message" class="message form-control message custom_form_input" maxlength="1000" id="message" rows="7" onblur="messageValidate()"></textarea>
                                <div id="messageStatus" class="invalid-feedback">Message field is required</div>
                            </div>

                            <button type="submit" class="hue_blue tesvan_form_btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="modal animated bounceInDown" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="success_img">
                    <svg xmlns="http://www.w3.org/2000/svg" class="successs_svg" width="138" height="138" viewBox="0 0 138 138" fill="none">
                        <path d="M68.5781 137.156C30.7633 137.156 0 106.393 0 68.5781C0 30.7633 30.7633 0 68.5781 0C106.393 0 137.156 30.7633 137.156 68.5781C137.156 106.393 106.393 137.156 68.5781 137.156ZM68.5781 20.17C41.8851 20.17 20.17 41.8851 20.17 68.5781C20.17 95.2712 41.8851 116.986 68.5781 116.986C95.2712 116.986 116.986 95.2712 116.986 68.5781C116.986 41.8851 95.2712 20.17 68.5781 20.17Z" fill="#F0BC5E" />
                        <path d="M93.9644 41.5222L52.4424 83.0443L43.1924 73.7943L37.4883 79.4984L52.4424 94.4524L99.6685 47.2263L93.9644 41.5222Z" fill="black" />
                        <path d="M68.5781 112.952C44.1118 112.952 24.204 93.0442 24.204 68.5779C24.204 58.1096 27.9355 47.9439 34.7086 39.9445L28.5567 34.7285C20.5492 44.1842 16.136 56.2056 16.136 68.5779C16.136 97.4937 39.6623 121.02 68.5781 121.02C80.9504 121.02 92.9717 116.607 102.427 108.599L97.2115 102.447C89.212 109.221 79.0463 112.952 68.5781 112.952Z" fill="black" />
                        <path d="M68.5779 16.136C56.2056 16.136 44.1842 20.5492 34.7285 28.5567L39.9445 34.7086C47.9439 27.9355 58.1096 24.204 68.5779 24.204C93.0441 24.204 112.952 44.1118 112.952 68.5781C112.952 79.0463 109.221 89.212 102.447 97.2115L108.599 102.427C116.607 92.9717 121.02 80.9504 121.02 68.5781C121.02 39.6623 97.4936 16.136 68.5779 16.136Z" fill="black" />
                    </svg>
                </div>
                <div class="success_txt">
                    <h5 class="hue_black">Your message was sent successfully.</h5>
                    <p class="hue_black">Thank You!</p>
                </div>
            </div>
            <div class="success_btn">
                <button type="button" class="btn hue_bg_b" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    @if(Session::has('success'))

    setTimeout(() => {
        $('#myModal').modal('toggle');
    }, 300);

    @endif

</script>
