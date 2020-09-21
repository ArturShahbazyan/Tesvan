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
                            
                            <div class="form_col">
                                <h5 class="hue_blue text-center">Let’s discuss your project!</h5>
    
                             <div class="tesvan_form">

                             <p class="hue_blue">All fields are required</p>
                                <form autocomplete="off" id="form_contact_us" name="contact_us" novalidate>
                                    <div class="form-group custom_form_group">
                                        <label for="name">Name</label>
                                        <input
                                            type="text"
                                            class="name form-control custom_form_input"
                                            id="name" name="name" onblur="nameValidate()">
                                            <div id="nameStatus" class="invalid-feedback">Name field is required</div>
                                        </div>
                                        <div class="form-group custom_form_group">
                                            <label for="email">Email</label>
                                            <input
                                                type="email" name="email"
                                                class="form-control email custom_form_input"
                                                id="email" onblur="emailValidate()">
                                                <div id="emailStatus" class="invalid-feedback">Email field is required</div>
                                            </div>
                                            <div class="form-group custom_form_group">
                                                <label for="phone">Phone</label>
                                                <input
                                                    type="tel" name="tel"
                                                    class="phone form-control custom_form_input"
                                                    id="phone" onblur="phoneValidate()">
                                                    <div id="phoneStatus" class="invalid-feedback">Phone field is required</div>
                                                </div>
                                                <div class="form-group custom_form_group">
                                                    <label for="message">Message</label>
                                                    <textarea maxlength="250" name="message" class="form-control message custom_form_input" id="message" rows="6" onblur="messageValidate()"></textarea>
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




<script>

/* 
window.onload = function () {
    document.contact_us.onsubmit = function () { return checkForm(); }

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
    if (!emailValidate()) valid = false;
    if (!phoneValidate()) valid = false;
    if (!messageValidate()) valid = false;

    return valid;
}

</script> */
    
