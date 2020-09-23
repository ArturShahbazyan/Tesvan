<section id="courses_reg">
    <div class="container">
        <div class="text-center courses_reg_text_col">
            <h2 class="hue_blue">Free Registration</h2>
            <p class="hue_black">
                Our team is excited by the opportunity to set new standard of quality for your
                software on all levels of complexity
            </p>
        </div>
        <div class="courses_reg_form_row">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-12 clearfix">
                    <div class="row float-xl-right  float-lg-right">
                        <div class="courses_reg_form_contacts_col">
                            <h5 class="hue_blue">Free Courses</h5>
                            <p class="hue_black beginner_txt">
                                By participating in the course, you will
                                get acquainted with the basics of testing,
                                theoretical concepts and approaches to practical
                                work. You will have in-depth knowledge of testing,
                                learn Python programming language, work in Selenium
                                Framework master Automation QA.
                            </p>
                            <a href="" class="view_details">View Details</a>
                            <p class="hue_blue contact_you">
                                Our specialist will contact you to get
                                acquainted with the conditions
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
                            <h5 class="hue_blue text-center">Join our talented team</h5>
                            <div class="courses_reg_tesvan_form">
                                <p class="hue_blue">All fields are required</p>
                                <form method="post" action="{{ url('/courses') }}" autocomplete="off" id="form_courses_register" name="courses_register" novalidate>
                                    @csrf
                                    <!-- >>>>> Success message >>>>> -->
                                    @if(Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        {{Session::get('success')}}
                                    </div>
                                    @endif
                                    <!-- <<<<< Success message <<<<< -->
                                    <div id="register" class="register_wizard">
                                        <div class="pt-2"></div>
                                        <div class="form-group courses_reg_custom_form_group">
                                            <label for="name">Name</label>
                                            <input type="text" class="name form-control courses_reg_custom_form_input" maxlength="50" id="name" name="name" onblur="nameValidate()">
                                            <div id="nameStatus" class="invalid-feedback">Name field is required</div>
                                        </div>
                                        <div class="form-group courses_reg_custom_form_group">
                                            <label for="surname">Surname</label>
                                            <input type="text" class="surname form-control courses_reg_custom_form_input" maxlength="50" name="surname" id="surname" onblur="surnameValidate()">
                                            <div id="surnameStatus" class="invalid-feedback">Surname field is required</div>
                                        </div>
                                        <div class="form-group courses_reg_custom_form_group">
                                            <label for="email">Email</label>
                                            <input type="email" class="email form-control email courses_reg_custom_form_input" maxlength="50" name="email" id="email" onblur="emailValidate()">
                                            <div id="emailStatus" class="invalid-feedback">Email field is required</div>
                                        </div>
                                        <div class="form-group courses_reg_custom_form_group">
                                            <label for="phone">Phone</label>
                                            <input type="tel" class="phone form-control courses_reg_custom_form_input" maxlength="50" id="phone" name="phone" onblur="phoneValidate()">
                                            <div id="phoneStatus" class="invalid-feedback">Phone field is required</div>
                                        </div>
                                        <div class="form-group courses_reg_custom_form_group">
                                            <label for="city">City</label>
                                            <input type="text" class="city form-control courses_reg_custom_form_input" maxlength="50" name="city" id="city" onblur="cityValidate()">
                                            <div id="cityStatus" class="invalid-feedback">Phone field is required</div>
                                        </div>
                                        <button data-next-id="form_register" validationRegisterDiv="register" type="button" class="hue_blue register_next_btn reg_btn register_continue courses_reg_tesvan_form_btn">Next</button>
                                    </div>
                                    <div id="form_register" class="register_wizard">
                                        <div class="pt-2"></div>
                                        <div class="education form-group courses_reg_custom_form_group" name="education">
                                            <label for="education">Education</label>
                                            <input type="text" class="education form-control courses_reg_custom_form_input" maxlength="50" name="education" id="education" onblur="educationValidate()">
                                            <div id="educationStatus" class="invalid-feedback">Education field is required</div>
                                        </div>
                                        <div class="form-group register_custom_radio_group">
                                            <h6 class="en_level_txt">English level</h6>
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
                                            <label for="register_message">Message</label>
                                            <textarea maxlength="250" class="message form-control register_message custom_form_input" maxlength="1000" id="message" rows="7" name="message" onblur="messageValidate()"></textarea>
                                            <div id="messageStatus" class="invalid-feedback">Message field is required</div>
                                        </div>
                                        <div class="btn_group d-flex justify-content-between pt-3">
                                            <button class="reg_btn register_back_btn">Back</button>
                                            <button type="submit" class="reg_btn register_btn">Regsiter</button>
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

<script>
    window.onload = function() {
        document.courses_register.onsubmit = function() {
            return checkForm();
        }

    }


    function nameValidate() {
        var name = document.getElementById('name');
        if (name.value == "") {
            name.className = "form-control is-invalid";
            document.getElementById("nameStatus").innerHTML = "Name field is required";
            return false;
        } else {
            name.className = "form-control is-valid";
            return true;
        }
    }

    function surnameValidate() {
        var surname = document.getElementById('surname');
        if (surname.value == "") {
            surname.className = "form-control is-invalid";
            document.getElementById("surnameStatus").innerHTML = "Surname field is required";
            return false;
        } else {
            surname.className = "form-control is-valid";
            return true;
        }
    }


    function emailValidate() {

        var email = document.getElementById('email');

        if (email.value == "") {
            var a = validEmail(email.value);
            email.className = "form-control is-invalid";
            document.getElementById("emailStatus").innerHTML = "Email is requied";
            return false;
        } else if (!validEmail(email.value)) {
            document.getElementById("emailStatus").innerHTML = "Incorrect email adress";
            email.className = "form-control is-invalid";
            return false;
        } else {
            email.className = "form-control is-valid";
            return true;
        }
    }


    function phoneValidate() {

        var phone = document.getElementById('phone');

        if (phone.value == "") {
            var a = validPhone(phone.value);
            phone.className = "form-control is-invalid";
            document.getElementById("phoneStatus").innerHTML = "Phone is requied";
            return false;
        } else if (!validPhone(phone.value)) {
            document.getElementById("phoneStatus").innerHTML = "Incorrect phone number";
            phone.className = "form-control is-invalid";
            return false;
        } else {
            phone.className = "form-control is-valid";
            return true;
        }
    }


    function cityValidate() {
        var city = document.getElementById('city');
        if (city.value == "") {
            city.className = "form-control is-invalid";
            document.getElementById("cityStatus").innerHTML = "City field is required";
            return false;
        } else {
            city.className = "form-control is-valid";
            return true;
        }
    }

    function educationValidate() {
        var education = document.getElementById('education');
        if (education.value == "") {
            education.className = "form-control is-invalid";
            document.getElementById("educationStatus").innerHTML = "Education field is required";
            return false;
        } else {
            education.className = "form-control is-valid";
            return true;
        }
    }

    function companyValidate() {
        var company = document.getElementById('company');
        if (company.value == "") {
            company.className = "form-control is-invalid";
            document.getElementById("companyStatus").innerHTML = "Company field is required";
            return false;
        } else {
            company.className = "form-control is-valid";
            return true;
        }
    }

    function courseValidate() {
        var course = document.getElementById('course');
        if (course.value == "") {
            course.className = "form-control is-invalid";
            document.getElementById("courseStatus").innerHTML = "Course field is required";
            return false;
        } else {
            course.className = "form-control is-valid";
            return true;
        }
    }


    function messageValidate() {
        var message = document.getElementById('message');
        if (message.value == "") {
            message.className = "form-control is-invalid";
            document.getElementById("messageStatus").innerHTML = "Message field is required";
            return false;
        } else {
            message.className = "form-control is-valid";
            return true;
        }
    }


    function validEmail(email) {
        var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        return pattern.test(email);
    }

    function validPhone(phone) {
        var pattern = /^([+]?[\s0-9]+)?(\d{3}|[(]?[0-9]+[)])?([-]?[\s]?[0-9])+$/;
        return pattern.test(phone);
    }


    function checkForm() {

        var valid = true;

        if (!nameValidate()) valid = false;
        if (!surnameValidate()) valid = false;
        if (!emailValidate()) valid = false;
        if (!phoneValidate()) valid = false;
        if (!cityValidate()) valid = false;
        if (!companyValidate()) valid = false;
        if (!educationValidate()) valid = false;
        if (!cvValidate()) valid = false;
        if (!courseValidate()) valid = false;

        return valid;
    }

</script>
