//login variables
let logemail = document.getElementById("logemail");
let logemail_error = document.getElementById("logemail_error");
let logpassword = document.getElementById("logpassword");
let logpassword_error = document.getElementById("logpassword_error");

function checkRequired(inputDiv, errorDiv, fieldEntry) {
    if(inputDiv.value === ""){
        inputDiv.style.borderBottom = "2px solid red";
        errorDiv.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i>" + ` Please provide ${fieldEntry}.`
    } 
    else {
        inputDiv.style.borderBottom = "1px solid rgb(246, 110, 35)";
        errorDiv.innerHTML = "";
        }
    }


 //Start of Login Functions
 function validateLogEmail(){
    if(logemail.value === ""){
        logemail.style.borderBottom = "2px solid red";
        logemail_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide email.";
    } else if(!regRegex.test(logemail.value)){
        logemail.style.borderBottom = "2px solid red";
        logemail_error.innerHTML = "<i class='bi bi-exclamation-circle-fill' ></i> Invalid email format."
    } else {
        logemail.style.borderBottom = "1px solid rgb(246, 110, 35)";
        logemail_error.innerHTML = "";
    }
   }

function validateLogPassword(){
    if(logpassword.value === ""){
        logpassword.style.borderBottom = "2px solid red";
        logpassword_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide password.";
    } else if(logpassword.value.length < 4 || logpasswordvalue.length > 16 ){
        validateLogPasswordLength();
    }   else {
        logpassword.style.borderBottom = "1px solid rgb(246, 110, 35)";
        logpassword_error.innerHTML = "";
    }
}

function validateLogPasswordLength() {
    if (logpassword.value.length < 4 ){
        logpassword.style.borderBottom = "2px solid red";
        logpassword_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Password must be more than 3 characters.";
    } else if (logpassword.value.length > 16){
        logpassword.style.borderBottom = "2px solid red";
        logpassword_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Password must not be more than 16 characters.";
    } else {
        logpassword.style.borderBottom = "1px solid rgb(246, 110, 35)";
        logpassword_error.innerHTML = "";
    }
}
//End of Login functions