<?php
    require ('./connection/database.php');
    session_start();

    if(isset($_POST['login'])){
        $email = trim($_POST['logemail']);
        $password = trim($_POST['logpassword']);

        if (empty($email) || empty($password)){
            header("Location: ./login.php?error=Please fill up the email and/or password.");
        } else {
            $check_query = "SELECT * FROM users WHERE email = '$email'";
            $query_match = mysqli_query($connection, $check_query) OR
            trigger_error('QUERY FAILED! SQL: $check_query ERROR:'.
            mysqli_error($connection), E_USER_ERROR);

            $mysql_array = mysqli_fetch_array($query_match);
            $current_password = $mysql_array['password'];
            $current_email = $mysql_array['email'];

            if(mysqli_num_rows($query_match) == 0){
                header("Location: ./login.php?error=No records found. Sign up instead.");
                echo "<script>window.location.href = './login.php'</script>";
            }
            elseif (($password=== $current_password) || (mysqli_num_rows($query_match) > 0 && password_verify($password, $current_password))) {
                // $user_data = 'email='. $email; 
                $_SESSION['status'] = 'valid';
                $_SESSION['email'] = $mysql_array['email'];
                $_SESSION['role'] = $mysql_array['role'];
                $_SESSION['first_name'] = $mysql_array['first_name'];
                $_SESSION['password'] = $mysql_array['password'];
                $_SESSION['user_id'] = $mysql_array['user_id'];
                
                echo "<script>window.location.href = './home.php'</script>";
                // header("Location: ./home.php?$user_data");
                echo "<script>alert('Successful')</script>";
            }
             else {
                header("Location: ./login.php?error=Login failed. Wrong password.");
                echo "<script>window.location.href = './login.php'</script>";
            }
        }

    }
?>