        //KLR
   

   //registration variables
   let first_name = document.getElementById("first_name");
   let first_name_error = document.getElementById("first_name_error");
   let last_name = document.getElementById("last_name");
   let last_name_error = document.getElementById("last_name_error");
   const regRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/i;
   let regemail = document.getElementById("regemail");
   let regemail_error = document.getElementById("regemail_error");
   let regpassword = document.getElementById("regpassword");
   let regpassword_error = document.getElementById("regpassword_error");
   let regconfirm_password = document.getElementById("regconfirm_password");
   let regconfirm_password_error = document.getElementById("regconfirm_password_error");
   let role = document.getElementById("role");
   let role_error = document.getElementById("role_error");

  //end of variables


     //Start of Registration functions
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

  

   function validateFirstName(){
       checkRequired(first_name, first_name_error, "first name");    
   }

   function validateLastName(){
       checkRequired(last_name, last_name_error, "last name");
   }

  

   function validateRegEmail(){
       if(regemail.value === ""){
           regemail.style.borderBottom = "2px solid red";
           regemail_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide email.";
       } else if(!regRegex.test(regemail.value)){
           regemail.style.borderBottom = "2px solid red";
           regemail_error.innerHTML = "<i class='bi bi-exclamation-circle-fill' ></i> Invalid email format."
       } else {
           regemail.style.borderBottom = "1px solid rgb(246, 110, 35)";
           regemail_error.innerHTML = "";
       }
      }

   function validateRegPassword(){
       if(regpassword.value === ""){
           regpassword.style.borderBottom = "2px solid red";
           regpassword_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide password.";
       } else if(regpassword.value.length < 4 || regpassword.value.length > 8 ){
           validateRegPasswordLength();
       }   else {
           regpassword.style.borderBottom = "1px solid rgb(246, 110, 35)";
           regpassword_error.innerHTML = "";
       }
   }

   function validateRegPasswordLength() {
       if (regpassword.value.length < 4 ){
           regpassword.style.borderBottom = "2px solid red";
           regpassword_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Password must be more than 3 characters.";
       } else if (regpassword.value.length > 16){
           regpassword.style.borderBottom = "2px solid red";
           regpassword_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Password must not be more than 16 characters.";
       } else {
           regpassword.style.borderBottom = "1px solid rgb(246, 110, 35)";
           regpassword_error.innerHTML = "";
       }
   }

   
   function validateRegConfirmPassword(){
       if(regconfirm_password.value === ""){
           regconfirm_password.style.borderBottom = "2px solid red";
           regconfirm_password_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please confirm password.";
       } else if (regconfirm_password.value !== regpassword.value) {
           matchPassword();
       } else {
           regconfirm_password.style.borderBottom = "1px solid rgb(246, 110, 35)";
           regconfirm_password_error.innerHTML = "";
       }
   }

   function matchPassword(){
       if(regpassword.value !== regconfirm_password.value){
           regconfirm_password.style.borderBottom = "2px solid red";
           regconfirm_password_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Passwords did not match.";
       } else {
           regconfirm_password.style.borderBottom = "1px solid rgb(246, 110, 35)";
           regconfirm_password_error.innerHTML = "";
       }
   }

   function validateRole(){
       checkRequired(role, role_error, "role");
   }

//validation by mnrichae@gmail.com