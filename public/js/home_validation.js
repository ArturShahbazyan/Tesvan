window.onload = function () {
    document.contact_us.onsubmit = function () {
        return checkForm();
    }

}

function nameValidate() {
    var name = document.getElementById('name');
    if (name.value == "") {
        name.className = "form-control is-invalid";
        document
            .getElementById("nameStatus")
            .innerHTML = "Name field is required";
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
        document
            .getElementById("emailStatus")
            .innerHTML = "Email is requied";
        return false;
    } else if (!validEmail(email.value)) {
        document
            .getElementById("emailStatus")
            .innerHTML = "Incorrect email adress";
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
        document
            .getElementById("phoneStatus")
            .innerHTML = "Phone is requied";
        return false;
    } else if (!validPhone(phone.value)) {
        document
            .getElementById("phoneStatus")
            .innerHTML = "Incorrect phone number";
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
        document
            .getElementById("messageStatus")
            .innerHTML = "Message field is required";
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

    if (!nameValidate())
        valid = false;
    if (!emailValidate())
        valid = false;
    if (!phoneValidate())
        valid = false;
    if (!messageValidate())
        valid = false;

    return valid;
}
