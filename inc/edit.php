<?php
    require ('../connection/database.php');
    require ('session.php');

    if (isset($_POST['edit'])) {
        $email = $_POST['regemail'];

        $query_update = "SELECT * from users WHERE email = '$email'";

        $sql_update = mysqli_query($connection, $query_update) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);
        
        $row = mysqli_fetch_assoc($sql_update);
    };

    if (isset($_POST['update'])) {
        
        $first_name = ucwords(validate($_POST['first_name']));
        $last_name = ucwords(validate($_POST['last_name']));
        $email = $_POST['regemail'];
        $password = password_hash($_POST['regpassword'],PASSWORD_DEFAULT);
        $original_password = $_POST['regpassword'];
        $confirm_password = $_POST['regconfirm_password'];
        $role = $_POST['role'];

        $gender = $_POST['gender'];
        $nationality = $_POST['nationality'];
        $civil_status = $_POST['civil_status'];
        $mobile_number = $_POST ['mobile_number'];
        $address = $_POST['address'];
        $birthdate = $_POST['birthdate'];
       
        $adult_name = $_POST['adult_name'];
        $adult_number = $_POST['adult_number'];
        $adult_email = $_POST['adult_email'];
        $relation = $_POST['relation'];

        if (empty($first_name) || empty($last_name) || empty($password)) {
            header("Location: ../edit.php?errorReg=All fields required.&$user_data#");
        } else {
            //one element muna for practicing
            $query_update = "UPDATE users SET first_name = '$first_name' WHERE email = '$email'";
            $sql_update = mysqli_query($connection, $query_update) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);

            echo "<script>alert('Successfully updated!')</script>";
            echo "<script>window.location.href = '../index.php'</script>";
        }

        //not yet finished kasi need ko mapractice to na nakaconnect na sa home ng user.

    };
?>
