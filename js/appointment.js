
        let program = document.getElementById("program");
        let program_error = document.getElementById("program_error");
        let course = document.getElementById("course");
        let course_error = document.getElementById("course_error");
        let date = document.getElementById("date");
        let date_error = document.getElementById("date_error");
        let time = document.getElementById("time");
        let time_error = document.getElementById("time_error");
        let price = document.getElementById("price");
        let price_error = document.getElementById("price_error");

        let btn = document.getElementById("createAppointment");
        
        let course_others = document.getElementById("course_others");

        const showCourseOthers = () => {
            if (course.value === "others"){
                // alert("Others!");
                course_others_div.removeAttribute("hidden");
            } else {
                course_others_div.setAttribute("hidden","hidden");
            }
            
        }
        
        
       
        const checkRequired = (inputDiv, errorDiv, fieldEntry) => {
            if(inputDiv.value === ""){
                inputDiv.style.borderBottom = "2px solid red";
                errorDiv.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i>" + ` Please provide ${fieldEntry}.`
                return false;
            } else {
                inputDiv.style.borderBottom = "1px solid rgb(246, 110, 35)";
                errorDiv.innerHTML = "";
                return true;
            }
        };        

            let validateProgram = () => {
                checkRequired(program, program_error, "program");
            }

            let validateCourse = () => {
                checkRequired(course, course_error, "course");
            }

            let validateDate = () => {
                let chosenDate = new Date(date.value);
                let today = new Date();
                console.log(today);
                if(date.value === ""){
                date.style.borderBottom = "2px solid red";
                date_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i>" + ` Please provide date.`
                return false;
            } else if (chosenDate < today ) {
                date.style.borderBottom = "2px solid red";
                date_error.innerHTML = "<i class='bi bi-exclamation-circle-fill'></i>" + ` Please select date later than today.`
                return false
            } else {
                date.style.borderBottom = "1px solid rgb(246, 110, 35)";
                date_error.innerHTML = "";
                return true;
            }
            }

            let validateTime = () => {
                checkRequired(time, time_error, "time");
            }

            let validatePrice = () => {
                checkRequired(price, price_error, "price");
            }


        
        