// >>>>>> MAP >>>>>>>
var countryElements = document.getElementById('Group_507').childNodes;
var countryCount = countryElements.length;
var countryName = document.querySelector(".countryName");

for (var i = 0; i < countryCount; i++) {
    countryElements[i].onmouseover = function () {
        countryName.innerHTML = this.getAttribute('data-country');
    }
    countryElements[i].onmouseout = function () {
        countryName.innerHTML = " ";
    }
}

    // >>>>>> MAP >>>>>>>


