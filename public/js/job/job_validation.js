window.onload = function () {
    document.job_apply.onsubmit = function () {
        return checkForm();
    }
}

var locale = document.getElementsByTagName("html")[0].getAttribute("lang");

function nameValidate() {

    var name = document.getElementById('name');
    if (name.value == "") {
        name.className = "form-control is-invalid";
        if(locale == "en"){
            document.getElementById("nameStatus").innerHTML = "Name field is required";
        }else if(locale == "am"){
            document.getElementById("nameStatus").innerHTML = "Անվան դաշտը պարտադիր է";
        }else if(locale == "ru"){
            document.getElementById("nameStatus").innerHTML = "Поле имени обязательно для заполнения";
        }
    
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
        if(locale == "en"){
            document.getElementById("surnameStatus").innerHTML = "Surname field is required";
        }else if(locale == "am"){
            document.getElementById("surnameStatus").innerHTML = "Ազգանունի դաշտը պարտադիր է";
        }else if(locale == "ru"){
            document.getElementById("surnameStatus").innerHTML = "Фамилия обязательна";
        }
        return false;
    } else {
        surname.className = "form-control is-valid";
        return true;
    }
}

function emailValidate() {

    var email = document.getElementById('email');

    if (email.value == "") {
        email.className = "form-control is-invalid";
        if(locale == "en"){
            document.getElementById("emailStatus").innerHTML = "Email field is requied";
        }else if(locale == "am"){
            document.getElementById("emailStatus").innerHTML = "Էլեկտրոնային փոստը պարտադիր է";
        }else if(locale == "ru"){
            document.getElementById("emailStatus").innerHTML = "Электронная почта обязательна";
        }
        return false;
    } else if (!validEmail(email.value)) {
            if(locale == "en"){
                document.getElementById("emailStatus").innerHTML = "Incorrect email adress";
            }else if(locale == "am"){
                document.getElementById("emailStatus").innerHTML = "Սխալ էլեկտրոնային հասցե";
            }else if(locale == "ru"){
                document.getElementById("emailStatus").innerHTML = "Неверный адрес электронной почты";
            }
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
        phone.className = "form-control is-invalid";
        if(locale == "en"){
            document.getElementById("phoneStatus").innerHTML = "Phone field is requied";
        }else if(locale == "am"){
            document.getElementById("phoneStatus").innerHTML = "Հեռախոսահամարը պարտադիր է";
        }else if(locale == "ru"){
            document.getElementById("phoneStatus").innerHTML = "Требуется телефон";
        }
        return false;
    } else if (!validPhone(phone.value)) {
        if(locale == "en"){
            document.getElementById("phoneStatus").innerHTML = "Incorrect phone number";
        }else if(locale == "am"){
            document.getElementById("phoneStatus").innerHTML = "Սխալ հեռախոսահամար";
        }else if(locale == "ru"){
            document.getElementById("phoneStatus").innerHTML = "Неверный номер телефона";
        }
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
            if(locale == "en"){
                document.getElementById("cityStatus").innerHTML = "City field is required";
            }else if(locale == "am"){
                document.getElementById("cityStatus").innerHTML = "Քաղաքը պարտադիր է";
            }else if(locale == "ru"){
                document.getElementById("cityStatus").innerHTML = "Поле города обязательно для заполнения";
            }
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
            if(locale == "en"){
                document.getElementById("educationStatus").innerHTML = "Education field is required";
            }else if(locale == "am"){
                document.getElementById("educationStatus").innerHTML = "Կրթության ոլորտը պարտադիր է";
            }else if(locale == "ru"){
                document.getElementById("educationStatus").innerHTML = "Обязательное поле образования";
            }
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
            if(locale == "en"){
                document.getElementById("companyStatus").innerHTML = "Company field is required";
            }else if(locale == "am"){
                document.getElementById("companyStatus").innerHTML = "Ընկերության դաշտը պարտադիր է";
            }else if(locale == "ru"){
                document.getElementById("companyStatus").innerHTML = "Поле компании обязательно для заполнения";
            }
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
            if(locale == "en"){
                document.getElementById("courseStatus").innerHTML = "Course field is required";
            }else if(locale == "am"){
                document.getElementById("courseStatus").innerHTML = "Դասընթացի դաշտը պարտադիր է";
            }else if(locale == "ru"){
                document.getElementById("courseStatus").innerHTML = "Поле курса обязательно для заполнения";
            }
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
            if(locale == "en"){
                document.getElementById("cvStatus").innerHTML = "CV field is required";
            }else if(locale == "am"){
                document.getElementById("cvStatus").innerHTML = "CV-ն պարտադիր է";
            }else if(locale == "ru"){
                document.getElementById("cvStatus").innerHTML = "Поле CV обязательно для заполнения";
            }
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
