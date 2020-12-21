// >>>>>> MAP >>>>>>>
var countryElements = document.getElementById('Group_507').childNodes;
var countryCount = countryElements.length;
var countryName = document.querySelector(".countryName");

var locale = document.getElementsByTagName("html")[0].getAttribute("lang");

for (var i = 0; i < countryCount; i++) {
    countryElements[i].onmouseover = function () {
var locale = document.getElementsByTagName("html")[0].getAttribute("lang");
        if(locale == "en"){
            countryName.innerHTML = this.getAttribute('data-country');
        }else if(locale == "am"){
            countryName.innerHTML = this.getAttribute('data-country-am');
        }else if(locale == "ru"){
            countryName.innerHTML = this.getAttribute('data-country-ru');
        }
        
    }
    countryElements[i].onmouseout = function () {
        countryName.innerHTML = " ";
    }
}

    // >>>>>> MAP >>>>>>>


