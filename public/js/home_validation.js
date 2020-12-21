window.onload = function () {
    document.contact_us.onsubmit = function () {
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

function messageValidate() {
    var message = document.getElementById('message');
    if (message.value == "") {
        message.className = "form-control is-invalid";
        if(locale == "en"){
            document.getElementById("messageStatus").innerHTML = "Message field is required";
        }else if(locale == "am"){
            document.getElementById("messageStatus").innerHTML = "Հաղորդագրության դաշտը պարտադիր է";
        }else if(locale == "ru"){
            document.getElementById("messageStatus").innerHTML = "Поле сообщения обязательно";
        }

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
