const regRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/i;
let email = document.getElementById("email");
let email_error = document.getElementById("email_error");
let password = document.getElementById("password");
let password_error = document.getElementById("password_error");

function validateEmail(){
if(email.value === ""){
    // email.style.border = "1px solid red";
    email_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide email.";
} else if(!regRegex.test(email.value)){
    // email.style.border = "1px solid red";
    email_error.innerHTML = "<i class='bi bi-exclamation-circle-fill' ></i> Invalid email format."
} else {
    // email.style.border = "1px solid rgb(246, 110, 35)";
    email_error.innerHTML = "";
}
}

function validatePassword(){
if(password.value === ""){
    // password.style.border = "2px solid red";
    password_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide password.";
} else if(password.value.length < 4 || password.value.length > 8 ){
    validatePasswordLength();
}   else {
    // password.style.border = "1px solid rgb(246, 110, 35)";
    password_error.innerHTML = "";
}
}

function validatePasswordLength() {
if (password.value.length < 4 ){
    // password.style.border = "2px solid red";
    password_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Password must be more than 3 characters.";
} else if (password.value.length > 8){
    // password.style.border = "2px solid red";
    password_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Password must not be more than 8 characters.";
} else {
    // password.style.border = "1px solid rgb(246, 110, 35)";
    password_error.innerHTML = "";
}
}