var firstName = document.forms["vform"]["txtfirname"];
var lastName = document.forms["vform"]["txtlasname"];
var phone = document.forms["vform"]["numphone"];
var userName = document.forms["vform"]["txtusername"];
var Email = document.forms["vform"]["txtemail"];
var password = document.forms["vform"]["numpassword"];
var confirmPassword = document.forms["vform"]["confpassword"];

//getting all error display objects...

var firstName_error = document.getElementById("firstName_error");
var lasttName_error = document.getElementById("lastName_error");
var phone_error = document.getElementById("phone_error");
var userName_error = document.getElementById("userName_error");
var Email_error = document.getElementById("Email_error");
var password_error = document.getElementById("password_error");
var confpassword_error = document.getElementById("confirmPassword_error");


//validation function...


document.getElementById("btn").addEventListener("click", function (e) {

    if (firstName.value == "") {
        firstName.style.border = "1px solid red";
        firstName_error.textContent = "First name is required";
        firstName.focus();
        e.preventDefault();
    } else {
        firstName.style.border = "1px solid #2f89fc";
        firstName_error.textContent = "";

    }

    if (lastName.value == "") {
        lastName.style.border = "1px solid red";
        lastName_error.textContent = "First name is required";
        lastName.focus();
        e.preventDefault();
    }
    else {
        lastName.style.border = "1px solid #2f89fc";
        lastName_error.textContent = "";

    }
    if (phone.value == "") {
        phone.style.border = "1px solid red";
        phone_error.textContent = "Phone is required";
        phone.focus();
        e.preventDefault();
    }
    else {
        phone.style.border = "1px solid #2f89fc";
        phone_error.textContent = "";

    }
    if (userName.value == "") {
        userName.style.border = "1px solid red";
        userName_error.textContent = "user name is required";
        userName.focus();
        e.preventDefault();
    }
    else {
        userName.style.border = "1px solid #2f89fc";
        userName_error.textContent = "";

    }
    if (Email.value == "") {
        Email.style.border = "1px solid red";
        Email_error.textContent = "Email is required";
        Email.focus();
        e.preventDefault();
    }
    else {
        Email.style.border = "1px solid #2f89fc";
        Email_error.textContent = "";

    }
    if (password.value == "") {
        password.style.border = "1px solid red";
        password_error.textContent = "Password is required";
        password.focus();
        e.preventDefault();
    }
    else {
        password.style.border = "1px solid #2f89fc";
        password_error.textContent = "";

    }
    if (confirmPassword.value == "") {
        confirmPassword.style.border = "1px solid red";
        confpassword_error.textContent = "confirm password is required";
        confirmPassword.focus();
        e.preventDefault();
    }
    else {
        confirmPassword.style.border = "1px solid #2f89fc";
        confpassword_error.textContent = "";

    }

    if (password.value != confirmPassword.value) {
        confirmPassword.style.border = "1px solid red";
        confpassword_error.textContent = "confirm password do not equal password";
        e.preventDefault();
    }



})




