
<?php require('./inc/login.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style-2.css"> -->
    <link rel="stylesheet" href="css/sign-in.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <?php
                        require('./pages/forms/loginForm.php');

                        require('./pages/forms/registrationForm.php');

                    ?>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="images/img-log-1.jpg" class="image img-1 show" alt="">
                        <img src="images/img-log-2.jpg" class="image img-2" alt="">
                        <img src="images/img-log-3.jpg" class="image img-3" alt="">

                    </div>
                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Create your own courses</h2>
                                <h2>Customize as you like</h2>
                                <h2>Invite students to your class</h2>
                            </div>
                        </div>
                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>


    <!-- Javascript -->
    <script src="js/app.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
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
    </script>
</body>

</html>