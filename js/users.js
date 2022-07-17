let first_name = document.getElementById("first_name");
    let first_name_error = document.getElementById("first_name_error");
    let last_name = document.getElementById("last_name");
    let last_name_error = document.getElementById("last_name_error");
    const regRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/i;
    let email = document.getElementById("email");
    let email_error = document.getElementById("email_error");
    let password = document.getElementById("password");
    let password_error = document.getElementById("password_error");
    let confirm_password = document.getElementById("confirm_password");
    let confirm_password_error = document.getElementById("confirm_password_error");
    let gender = document.getElementById("gender");
    let gender_error = document.getElementById("gender_error");
    let role = document.getElementById("role");
    let role_error = document.getElementById("role_error");
    let birthdate = document.getElementById("birthdate");
    let birthdate_error = document.getElementById("birthdate_error");
    let minAge = 18;
    let x = document.getElementById("adult_info");

    let adult_name = document.getElementById("adult_name");
    let adult_name_error = document.getElementById("adult_name_error");
    let adult_number = document.getElementById("adult_number");
    let adult_number_regex = /^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/i;
    let adult_number_error = document.getElementById("adult_number_error");
    let adult_email = document.getElementById("adult_email");
    let adult_email_error = document.getElementById("adult_email_error");
    let adult_relation = document.getElementById("relation");
    let adult_relation_error = document.getElementById("relation_error");


    function checkRequired(inputDiv, errorDiv, fieldEntry) {
        if(inputDiv.value === ""){
            inputDiv.style.border = "2px solid red";
            errorDiv.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i>" + ` Please provide ${fieldEntry}.`
        } 
        else {
            inputDiv.style.border = "1px solid rgb(246, 110, 35)";
            errorDiv.innerHTML = "";
            }
        }
 
    function validateFirstName(){
        checkRequired(first_name, first_name_error, "first name");    
    }

    function validateLastName(){
        checkRequired(last_name, last_name_error, "last name");
    }

    function validateEmail(){
        if(email.value === ""){
            email.style.border = "2px solid red";
            email_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide email.";
        } else if(!regRegex.test(email.value)){
            email.style.border = "2px solid red";
            email_error.innerHTML = "<i class='bi bi-exclamation-circle-fill' ></i> Invalid email format."
        } else {
            email.style.border = "1px solid rgb(246, 110, 35)";
            email_error.innerHTML = "";
        }
       }

    function validatePassword(){
        if(password.value === ""){
            password.style.border = "2px solid red";
            password_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide password.";
        } else if(password.value.length < 4 || password.value.length > 8 ){
            validatePasswordLength();
        }   else {
            password.style.border = "1px solid rgb(246, 110, 35)";
            password_error.innerHTML = "";
        }
    }

    function validatePasswordLength() {
        if (password.value.length < 4 ){
            password.style.border = "2px solid red";
            password_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Password must be more than 3 characters.";
        } else if (password.value.length > 8){
            password.style.border = "2px solid red";
            password_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Password must not be more than 8 characters.";
        } else {
            password.style.border = "1px solid rgb(246, 110, 35)";
            password_error.innerHTML = "";
        }
    }

    
    function validateconfirmPassword(){
        if(confirm_password.value === ""){
            confirm_password.style.border = "2px solid red";
            confirm_password_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please confirm password.";
        } else if (confirm_password.value !== password.value) {
            matchPassword();
        } else {
            confirm_password.style.border = "1px solid rgb(246, 110, 35)";
            confirm_password_error.innerHTML = "";
        }
    }

    function matchPassword(){
        if(password.value !== confirm_password.value){
            confirm_password.style.border = "2px solid red";
            confirm_password_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Passwords did not match.";
        } else {
            confirm_password.style.border = "1px solid rgb(246, 110, 35)";
            confirm_password_error.innerHTML = "";
        }
    }

    function validateGender(){
        checkRequired(gender, gender_error, "gender");
    }

    function validateRole(){
        checkRequired(role, role_error, "role");
    }

    function validateBirthdate(){
        checkRequired(birthdate, birthdate_error, "birthdate");
    }

     //https://stackoverflow.com/questions/21085398/calculate-age-from-date-html-element
  
    function _calcAge() {
        let date = new Date(document.getElementById("birthdate").value);
        let today = new Date();

        let timeDiff = Math.abs(today.getTime() - date.getTime());
        let age1 = Math.ceil(timeDiff / (1000 * 3600 * 24)) / 365;
            return age1;
    }
    function _setAge() {
        //https://www.dofactory.com/html/div/hidden
        let age = _calcAge();
        if (age < minAge) {
            x.removeAttribute("hidden");
        } else
            x.setAttribute("hidden","hidden");
    }

    function validateAdultName(){
        checkRequired(adult_name, adult_name_error, "adult's name");    
    }

    function validateAdultNumber(){
        if(adult_number.value === ""){
            adult_number.style.border = "2px solid red";
            adult_number_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide adult's number.";
        } else if(!adult_number_regex.test(adult_number.value)){
            adult_number.style.border = "2px solid red";
            adult_number_error.innerHTML = "<i class='bi bi-exclamation-circle-fill' ></i> Invalid number format."
        } else {
            adult_number.style.border = "1px solid rgb(246, 110, 35)";
            adult_number_error.innerHTML = "";
        }
    }

    function validateAdultEmail(){
        if(adult_email.value === ""){
            adult_email.style.border = "2px solid red";
            adult_email_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide adult's email.";
        } else if(!regRegex.test(email.value)){
            adult_email.style.border = "2px solid red";
            adult_email_error.innerHTML = "<i class='bi bi-exclamation-circle-fill' ></i> Invalid email format."
        } else {
            adult_email.style.border = "1px solid rgb(246, 110, 35)";
            adult_email_error.innerHTML = "";
        }
       }

    function validateRelation(){
        checkRequired(adult_relation, adult_relation_error, "your relation with the adult")
    }