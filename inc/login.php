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
            elseif (($password=== $current_password) || (mysqli_num_rows($query_match) > 0 && password_verify($password, $current_password))) {
                $_SESSION['status'] = 'valid';
                $_SESSION['email'] = $mysql_array['email'];
                $_SESSION['role'] = $mysql_array['role'];
                $_SESSION['first_name'] = $mysql_array['first_name'];
                $_SESSION['password'] = $mysql_array['password'];
                $_SESSION['user_id'] = $mysql_array['user_id'];
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