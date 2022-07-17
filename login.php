
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
                // $_SESSION['status'] = 'invalid';
                echo "<script>alert('Log in failed! Wrong password!')</script>";
                echo "<script>window.location.href = './login.php'</script>";
            }
        }

        //     if (mysqli_num_rows($query_match) > 0 && password_verify($password, $current_password)) {
        //         // $_SESSION['status'] = 'valid';
        //         // $_SESSION['email'] = $mysql_array['email'];
        //         // $_SESSION['user_role'] = $mysql_array['user_role'];
        //         // echo "<script>window.location.href = '../index.php'</script>";
        //         echo "<script>alert('Successful')</script>";
        //     } else {
        //         $_SESSION['status'] = 'invalid';
        //         echo "<script>alert('Log in failed! Wrong password!')</script>";
        //         echo "<script>window.location.href = './login.php'</script>";
        //     }
        // }
    }
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
    </head>
    <body>
        
    <!-- Button trigger modal
    <button class="btn btn-login" id="btn-login" data-bs-toggle="modal" data-bs-target="#loginModal">
    Login
    </button>
     -->

    <!-- Modal -->
    <div class="modal fade mt-5" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="d-grid" action="./login.php" method="post">
                <?php
                    if (isset($_GET['error'])){?>
                        <p class = "error alert alert-danger" ><i class='bi bi-exclamation-circle-fill'></i> <?php echo $_GET['error']; ?></p>    
                    <?php }?>
                <?php
                    if (isset($_GET['success'])){?>
                        <p class = "success alert alert-success" ><i class="bi bi-check-circle-fill"></i> <?php echo $_GET['success']; ?></p>    
                <?php }?>
                <div class="modal-body">
                
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email" required>Email address<span class="text-danger">*</span></label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            onblur="validateEmail()"
                            class="form-control input-form" 
                            autocomplete="off" />
                        <span class="text-danger my-0 py-0" id="email_error"></span>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password" required>Password<span class="text-danger">*</span></label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password"  
                            oninput="validatePasswordLength()" 
                            onblur="validatePassword()" 
                            class="form-control input-form" />
                        <span class="text-danger my-0 py-0" id="password_error"></span>
                    </div>


                    <!-- Submit button -->
                    <div class="d-flex justify-content-center mt-4">
                        
                        </div>
                
                </div>
                <div class="modal-footer">
                    <input type="submit" name="login" class="btn btn-login " value="Login">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </form>
            </div>
        </div>
    </div>


        
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
    </script>
    </body>
</html>