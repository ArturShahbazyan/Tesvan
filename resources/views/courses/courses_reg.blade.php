<section id="courses_reg">
    <div class="container">
        <div class="text-center courses_reg_text_col">
            <h2 class="hue_blue">{{__("Free Registration")}}</h2>
            <p class="hue_black">
                {{__("We give you the opportunity to become a leading specialist, to join our team")}}
            </p>
        </div>
        <div class="courses_reg_form_row">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-12 clearfix">
                    <div class="row float-xl-right  float-lg-right">
                        <div class="courses_reg_form_contacts_col">
                            <h5 class="hue_blue">{{__("Free Courses ")}}</h5>
                            <p class="hue_black beginner_txt">
                                {{__("By participating in the course, you will get acquainted with the basics of testing, theoretical concepts and approaches to practical work. You will have in-depth knowledge of testing, learn Python programming language, work in Selenium Framework master Automation QA.")}}
                            </p>
                            <a href="" class="view_details">{{__("View Details")}}</a>
                            <p class="hue_blue contact_you">
                                {{__("Our specialist will contact you to get acquainted with the conditions")}}
                            </p>
                            <div class="pointer_svg d-flex justify-content-end">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <rect width="40" height="40" fill="url(#patternPointer)" />
                                    <defs>
                                        <pattern id="patternPointer" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#imagePointer" transform="scale(0.0111111)" />
                                        </pattern>
                                        <image id="imagePointer" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAACO0lEQVR4nO3aMWtTURiH8f+baGJyAgpu4uDQzU/hIqQipI5WHBwcBEEHwUXIrkgRV0V0kSKoFJI6+UWK+A10SG5axbwOxpjQ3DTxnqR6+/y25BwOh4cMJ+deCQAAAAAAAAAAAAAAAACQE3bYG/hX+ObZSqfqGya/Jqkn1/NQrD6w1Z29GOsXYiySB4PINyVVJZ2W6V73R++tt1bKMdYntCR3WUF+dd+AeT1WbEJLMpO75JMH48Qm9JA9Sx/KHpvQA6FQuS+3duqEjLEJPWCrO3uhd6oh01b6JK93+8l7/3juxNzrZ9pdDvnm+VI3fHkj1+Up0z6EUGrYhc+7s65L6AkWEZvQKWLHJvQUMWMT+gCxYhN6BjFiE3pGWWMTeg5ZYo+F9q0z1cT00KV1SScXsdkjwa0dasevjMYe+2fYMX/s0i0RORvzeqf77cnoV8PQ3lTBZNeXv6t8Mmndm3/6ctexJMPQ1lTf5S8PczN54vJX1lT/9+exX3QtKd416amkr0vfWa54qxbKd0a/4Xg3hxmPd9shlNamHu+QLktkidAzyRpZIvSBYkSWCD1VrMgSoVPFjCwReiIeZS0BD2eXYFGRJamYcW+54a2VcrfYeSfpUvoka4ditWEXP839humxLJvLk6SfPJKpnjrBrR2KlbW/fY2X2zv9uiJ26Ub6hGyRJUKPmtwiQuT0xY+YwXXm630DkSJLhB5Kku+3Jb2QtGtSR7KNWJExgTtHXgAAAAAAAAAAAAAAAAD/q59HAi48M2110AAAAABJRU5ErkJggg==" />
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="row">
                        <div class="courses_reg_form_col" id="courses-register">
                            <h5 class="hue_blue text-center">{{__("Join our talented team ")}}</h5>
                            <div class="courses_reg_tesvan_form">
                                <p class="hue_blue">{{__("All fields are required")}}</p>
                                <form method="post" action="{{ url('/courses') }}" autocomplete="off" id="form_courses_register" name="courses_register" novalidate>
                                    @csrf
                                    <div id="register" class="register_wizard">
                                        <div class="pt-2"></div>
                                        <div class="form-group courses_reg_custom_form_group">
                                            <label for="name">{{__("Name")}}</label>
                                            <input type="text" class="name form-control courses_reg_custom_form_input" maxlength="50" id="name" name="name" onblur="nameValidate()">
                                            <div id="nameStatus" class="invalid-feedback">{{__("Name field is required")}}</div>
                                        </div>
                                        <div class="form-group courses_reg_custom_form_group">
                                            <label for="surname">{{__("Surname")}}</label>
                                            <input type="text" class="surname form-control courses_reg_custom_form_input" maxlength="50" name="surname" id="surname" onblur="surnameValidate()">
                                            <div id="surnameStatus" class="invalid-feedback">{{__("Surname field is required")}}</div>
                                        </div>
                                        <div class="form-group courses_reg_custom_form_group">
                                            <label for="email">{{__("Email")}}</label>
                                            <input type="email" class="email form-control email courses_reg_custom_form_input" maxlength="50" name="email" id="email" onblur="emailValidate()">
                                            <div id="emailStatus" class="invalid-feedback">{{__("Email field is required")}}</div>
                                        </div>
                                        <div class="form-group courses_reg_custom_form_group">
                                            <label for="phone">{{__("Phone")}}</label>
                                            <input type="tel" class="phone form-control courses_reg_custom_form_input" maxlength="50" id="phone" name="phone" onblur="phoneValidate()">
                                            <div id="phoneStatus" class="invalid-feedback">{{__("Phone field is required")}}</div>
                                        </div>
                                        <div class="form-group courses_reg_custom_form_group">
                                            <label for="city">{{__("City")}}</label>
                                            <input type="text" class="city form-control courses_reg_custom_form_input" maxlength="50" name="city" id="city" onblur="cityValidate()">
                                            <div id="cityStatus" class="invalid-feedback">{{__("City field is required")}}</div>
                                        </div>
                                        <button data-next-id="form_register" validationRegisterDiv="register" type="button" class="hue_blue register_next_btn reg_btn register_continue courses_reg_tesvan_form_btn">{{__("Next")}}</button>
                                    </div>
                                    <div id="form_register" class="register_wizard">
                                        <div class="pt-2"></div>
                                        <div class="education form-group courses_reg_custom_form_group" name="education">
                                            <label for="education">{{__("Education")}}</label>
                                            <input type="text" class="education form-control courses_reg_custom_form_input" maxlength="50" name="education" id="education" onblur="educationValidate()">
                                            <div id="educationStatus" class="invalid-feedback">{{__("Education field is required")}}</div>
                                        </div>
                                        <div class="form-group register_custom_radio_group">
                                            <h6 class="en_level_txt">{{__("English level")}}</h6>
                                            <div class="radio_group d-flex justify-content-between">
                                                <div class="single_radio_group">
                                                    <label class="radio_label">
                                                        <input type="radio" name="level" value="A1" checked />
                                                        <span class="radio_txt">A1</span>
                                                    </label>
                                                    <label class="radio_label">
                                                        <input type="radio" name="level" value="A2" />
                                                        <span class="radio_txt">A2</span>
                                                    </label>
                                                </div>
                                                <div class="single_radio_group">
                                                    <label class="radio_label">
                                                        <input type="radio" name="level" value="B1" />
                                                        <span class="radio_txt">B1</span>
                                                    </label>
                                                    <label radio_label>
                                                        <input type="radio" name="level" value="B2" />
                                                        <span class="radio_txt">B2</span>
                                                    </label>
                                                </div>
                                                <div class="single_radio_group">
                                                    <label class="radio_label">
                                                        <input type="radio" name="level" value="C1" />
                                                        <span class="radio_txt">C1</span>
                                                    </label>
                                                    <label radio_label>
                                                        <input type="radio" name="level" value="C2" />
                                                        <span class="radio_txt">C2</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group courses_reg_custom_form_group">
                                            <label for="register_message">{{__("Message")}}</label>
                                            <textarea maxlength="250" class="message form-control register_message custom_form_input" maxlength="1000" id="message" rows="7" name="message" onblur="messageValidate()"></textarea>
                                            <div id="messageStatus" class="invalid-feedback">{{__("Message field is required")}}</div>
                                        </div>
                                        <div class="btn_group d-flex justify-content-between pt-3">
                                            <button type="button" class="reg_btn register_back_btn">{{__("Back")}}</button>
                                            <button type="submit" class="reg_btn register_btn">{{__("Register")}}</button>
                                        </div>
                                    </div>
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
                    <h5 class="hue_black">{{__("Your message was sent successfully.")}}</h5>
                    <p class="hue_black">{{__("Thank You!")}}</p>
                </div>
            </div>
            <div class="success_btn">
                <button type="button" class="btn hue_bg_b" data-dismiss="modal">{{__("OK")}}</button>
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
