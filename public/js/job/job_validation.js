window.onload = function () {
    document.job_apply.onsubmit = function () {
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

function surnameValidate() {
    var surname = document.getElementById('surname');
    if (surname.value == "") {
        surname.className = "form-control is-invalid";
        document
            .getElementById("surnameStatus")
            .innerHTML = "Surname field is required";
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

function cityValidate() {
    var city = document.getElementById('city');
    if (city.value == "") {
        city.className = "form-control is-invalid";
        document
            .getElementById("cityStatus")
            .innerHTML = "City field is required";
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
        document
            .getElementById("educationStatus")
            .innerHTML = "Education field is required";
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
        document
            .getElementById("companyStatus")
            .innerHTML = "Company field is required";
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
        document
            .getElementById("courseStatus")
            .innerHTML = "Course field is required";
        return false;
    } else {
        course.className = "form-control is-valid";
        return true;
    }
}

function cvValidate() {
    var cv = document.getElementById('cv');
    if (cv.value == "") {
        cv.className = "form-control is-invalid";
        document
            .getElementById("cvStatus")
            .innerHTML = "CV field is required";
        return false;
    } else {
        cv.className = "form-control is-valid";
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
    if (!surnameValidate())
        valid = false;
    if (!emailValidate())
        valid = false;
    if (!phoneValidate())
        valid = false;
    if (!cityValidate())
        valid = false;
    if (!companyValidate())
        valid = false;
    if (!educationValidate())
        valid = false;
    if (!cvValidate())
        valid = false;
    if (!courseValidate())
        valid = false;

    return valid;
}
