
//login validation.....

var userName = document.forms['vform']['txtemailuser'];
var password = document.forms['vform']['numpassword'];

var userName_error = document.getElementById("userName_error");
var password_error = document.getElementById("password_error");


document.getElementById("btnl").addEventListener("click", function (e) {


    if (userName.value == "") {
        userName.style.border = "1px solid red";
        userName_error.textContent = "Enter Username or Email";
        userName.focus();
        e.preventDefault();
    } else {
        userName.style.border = "1px solid #2f89fc";
        userName_error.textContent = "";

    }

    if (password.value == "") {
        password.style.border = "1px solid red";
        password_error.textContent = "Enter Password";
        password.focus();
        e.preventDefault();
    } else {
        password.style.border = "1px solid #2f89fc";
        password_error.textContent = "";

    }


})