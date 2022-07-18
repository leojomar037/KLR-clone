<?php
    require ('./connection/database.php');
    session_start();

    if(isset($_POST['login'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

    

        if (empty($email) || empty($password)){
            echo "<script>alert('Please fill up the email and password')</script>";
            // header("Location: login.php?error=Please fill up the email and/or password");
        } else {
            $check_query = "SELECT * FROM users WHERE email = '$email'";
            $query_match = mysqli_query($connection, $check_query) OR
            trigger_error('QUERY FAILED! SQL: $check_query ERROR:'.
            mysqli_error($connection), E_USER_ERROR);

            $mysql_array = mysqli_fetch_array($query_match);
            $current_password = $mysql_array['password'];
            $current_email = $mysql_array['email'];

            if(mysqli_num_rows($query_match) == 0){
                echo "<script>alert('No records found. Sign up instead.')</script>";
                echo "<script>window.location.href = './login.php'</script>";
            }
            elseif (($password=== $current_password)) {
                $_SESSION['status'] = 'valid';
                $_SESSION['email'] = $mysql_array['email'];
                $_SESSION['role'] = $mysql_array['role'];
                echo "<script>window.location.href = './home.php'</script>";
                echo "<script>alert('Successful')</script>";
            }
            elseif (mysqli_num_rows($query_match) > 0 && password_verify($password, $current_password)) {
                $_SESSION['status'] = 'valid';
                $_SESSION['email'] = $mysql_array['email'];
                $_SESSION['role'] = $mysql_array['role'];
                echo "<script>window.location.href = './home.php'</script>";
                echo "<script>alert('Successful')</script>";
            }
             else {
                echo "<script>alert('Log in failed! Wrong password!')</script>";
                echo "<script>window.location.href = './login.php'</script>";
            }
        }

    }
?>

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
                    <form action="./login.php" class="sign-in-form" method="post">
                    <?php
                    if (isset($_GET['error'])){?>
                        <p class = "error alert alert-danger" ><i class='bi bi-exclamation-circle-fill'></i> <?php echo $_GET['error']; ?></p>    
                    <?php }?>
                        <?php
                    if (isset($_GET['success'])){?>
                        <p class = "success alert alert-success" ><i class="bi bi-check-circle-fill"></i> <?php echo $_GET['success']; ?></p>    
                        <?php }?>
                    
                        <div class="logo">
                            <img src="Images/sign-in.jpg" alt="">
                            <h4>KLR Tutorials</h4>
                        </div>
                        <div class="heading">
                            <h2>Welcome back</h2>
                            <h6>Not registered yet?</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">   
                                <input type="text" minlength="4" name="email" id="email"  class="input-field" autocomplete="off" onblur="validateEmail()" required>
                                <label>Email</label>
                                <div class="error" id="email_error"></div>
                            </div>
                        
                            <div class="input-wrap">
                                <input type="password"  name="password" id="password"  class="input-field" autocomplete="off" oninput="validatePasswordLength()"  onblur="validatePassword()" required>
                                <label>Password</label>
                                <div class="error" id="password_error"></div>
                            </div>
                            <input type="submit" name="login"   value="Login" class="sign-btn">

                            <p class="text">
                                Forgotten your password or you login details ?
                                <a href="">Get Help</a> Signing in
                            </p>
                        </div>

                    </form>
                    <form action="" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="Images/sign-in.jpg" alt="">
                            <h4>KLR Tutorials</h4>
                        </div>
                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account ?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>

                        <div class="actual-form">
                            <div>
                                <div class="input-wrap">
                                    <input type="text" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>First Name</label>
                                </div>
                                <div class="input-wrap">
                                    <input type="text" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>Last Name</label>
                                </div>
                                <div class="input-wrap">
                                    <input type="password" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>Password</label>
                                </div>
                                <div class="input-wrap">
                                    <input type="password" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>Confirm Password</label>
                                </div>
                            </div>

                            <div>
                                <div class="input-wrap">
                                    <input type="text" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>Email</label>
                                </div>
                                <div class="input-wrap">

                                    <select name="gender" class="input-field" id="gender">
                                        <option value="" ></option>
                                        <option value="4">Male</option>
                                        <option value="5">Female</option>
                                       
                                    </select>
                                    <label>Gender Upon Birth</label>
                                </div>
                                <div class="input-wrap">

                                    <select name="role" class="input-field" id="role" onblur="validateRole()">
                                        <option value="" ></option>
                                        <option value="2">Student</option>
                                        <option value="3">Tutor</option>
                                    </select>
                                    <label>Role</label>
                                </div>
                                <div class="input-wrap bday">
                                    <input type="date" name="birthdate" id="birthdate" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>Birthday</label>

                                </div>
                            </div>


                            <input type="submit" value="Sign In" class="sign-btn" name="" id="">
                            <!-- <p class="text">
                                By signing up, I agree to the <a href="#">Terms of service</a> and <a href="#">Privacy policy</a>
                            </p> -->
                        </div>

                    </form>
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