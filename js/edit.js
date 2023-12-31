        //KLR
   

   //edit variables

   let birthdate = document.getElementById("birthdate");
   let birthdate_error = document.getElementById("birthdate_error");

   let minAge = 18;
   let maxAgeBday = 150; //source: https://www.brookings.edu/blog/future-development/2015/12/14/the-physiological-limits-of-life-will-humans-one-day-live-to-the-age-of-150-years/#:~:text=Yes%2C%20there%20is%20a%20physiological,stands%20at%20about%2097%20years.
   let minAgeBday = 1;
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


  //end of variables


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
       if (age > maxAgeBday || age < minAgeBday) {
            birthdate.style.borderBottom = "2px solid red";
            birthdate_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide correct birthdate.";
    } else {
        if (age < minAge && age > minAgeBday) {
            x.removeAttribute("hidden");
            birthdate.style.borderBottom = "";
            birthdate_error.innerHTML = "";
        } else
            x.setAttribute("hidden","hidden");
            birthdate.style.borderBottom = "";
            birthdate_error.innerHTML = "";
        }
    }

   function validateAdultName(){
       checkRequired(adult_name, adult_name_error, "adult's name");    
   }

   function validateAdultNumber(){
       if(adult_number.value === ""){
           adult_number.style.borderBottom = "2px solid red";
           adult_number_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide adult's number.";
       } else if(!adult_number_regex.test(adult_number.value)){
           adult_number.style.borderBottom = "2px solid red";
           adult_number_error.innerHTML = "<i class='bi bi-exclamation-circle-fill' ></i> Invalid number format."
       } else {
           adult_number.style.borderBottom = "1px solid rgb(246, 110, 35)";
           adult_number_error.innerHTML = "";
       }
   }

   function validateAdultEmail(){
       if(adult_email.value === ""){
           adult_email.style.borderBottom = "2px solid red";
           adult_email_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i> Please provide adult's email.";
       } else if(!regRegex.test(adult_email.value)){
           adult_email.style.borderBottom = "2px solid red";
           adult_email_error.innerHTML = "<i class='bi bi-exclamation-circle-fill' ></i> Invalid email format."
       } else {
           adult_email.style.borderBottom = "1px solid rgb(246, 110, 35)";
           adult_email_error.innerHTML = "";
       }
      }

   function validateRelation(){
       checkRequired(adult_relation, adult_relation_error, "your relation with the adult")
   }


//validation by mnrichae@gmail.com