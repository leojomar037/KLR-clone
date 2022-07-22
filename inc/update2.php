<?php 
require('../connection/database.php');

//edit profile
if (isset($_POST['update'])) {
    $id = $_POST['user_id'];
    $first_name = ucwords($_POST['first_name']);
    // $last_name = ucwords(validate($_POST['last_name']));
    // $email = $_POST['regemail'];
    // $password = password_hash($_POST['regpassword'],PASSWORD_DEFAULT);
    // $original_password = $_POST['regpassword'];
    // $confirm_password = $_POST['regconfirm_password'];
    // $role = $_POST['role'];

    // $gender = $_POST['gender'];
    // $nationality = $_POST['nationality'];
    // $civil_status = $_POST['civil_status'];
    // $mobile_number = $_POST ['mobile_number'];
    // $address = $_POST['address'];
    // $birthdate = $_POST['birthdate'];
   
    // $adult_name = $_POST['adult_name'];
    // $adult_number = $_POST['adult_number'];
    // $adult_email = $_POST['adult_email'];
    // $relation = $_POST['relation'];

    if (empty($first_name)) {
        header("Location: ../edit.php?errorReg=All fields required.&$user_data#");
    } else {
        //one element muna for practicing
        $query_update = "UPDATE users SET first_name = '$first_name' WHERE user_id = '$id'";
        $sql_update = mysqli_query($connection, $query_update) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);

        echo "<script>alert('Successfully updated!')</script>";
        echo "<script>window.location.href = '../index.php'</script>";
    }

    //not yet finished kasi need ko mapractice to na nakaconnect na sa home ng user.

};


if(isset($_POST['cancel'])){
    $id = $_POST['id'];
    $table = $_POST['table'];
    $query_update_status = "UPDATE appointments SET status = '3' WHERE student_id = '$id'";
    $sql_update_status = mysqli_query($connection, $query_update_status) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);

    echo "<script>alert('Successfully updated!')</script>";
    echo "<script>window.location.href = '../home#$table'</script>";
}
if(isset($_POST['approve'])){
    $id = $_POST['id'];
    $table = $_POST['table'];
    $query_update_status = "UPDATE appointments SET status = '2' WHERE student_id = '$id'";
    $sql_update_status = mysqli_query($connection, $query_update_status) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);

    echo "<script>alert('Successfully updated!')</script>";
    echo "<script>window.location.href = '../home#$table'</script>";
}

?>