<?php
require('../connection/database.php');
if (isset($_POST['update'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = $_POST['user_id'];
    $first_name = ucwords(validate($_POST['first_name']));
    $last_name = ucwords(validate($_POST['last_name']));
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

    if (empty($first_name) || empty($last_name)) {
        header("Location: ../home.php?errorUpdate=All fields required.#profile");
    } else {
        if (empty(!$adult_name) || empty(!$adult_number) || empty(!$adult_email) || empty(!$relation)){
            if($gender == ""){
                $gender = 6; 
            }
    
            if($civil_status == ""){
                $civil_status = 6;
            }
    
            if($birthdate == ""){
                $birthdate = '0000-00-00';
            }
            $query_update = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', gender = '$gender', nationality = '$nationality', civil_status = '$civil_status', 
            mobile_number = '$mobile_number', address = '$address', birthdate = '$birthdate' WHERE user_id = '$id'";
            $sql_update = mysqli_query($connection, $query_update) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);
    
            header("Location: ../home.php?successUpdate=Successfully updated.#profile");
        } else {
            if($gender == ""){
                $gender = 6; 
            }
    
            if($civil_status == ""){
                $civil_status = 6; 
            }
    
            if($birthdate == ""){
                $birthdate = '0000-00-00';
            }
            $query_update = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', gender = '$gender', nationality = '$nationality', civil_status = '$civil_status', 
            mobile_number = '$mobile_number', address = '$address', birthdate = '$birthdate' WHERE user_id = '$id'";
            $sql_update = mysqli_query($connection, $query_update) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);
    
            header("Location: ../home.php?successUpdate=Successfully updated.#profile");
        }
        
       
    }

};


if(isset($_POST['cancel'])){
    $id = $_POST['id'];
    $table = $_POST['table'];
    $query_update_status = "UPDATE appointments SET status = '4' WHERE appointment_id = '$id'";
    $sql_update_status = mysqli_query($connection, $query_update_status) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);

    echo "<script>alert('Successfully updated!')</script>";
    echo "<script>window.location.href = '../home#$table'</script>";
}
if(isset($_POST['approve'])){
    $id = $_POST['id'];
    $table = $_POST['table'];
    $query_update_status = "UPDATE appointments SET status = '3' WHERE appointment_id = '$id'";
    $sql_update_status = mysqli_query($connection, $query_update_status) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);

    echo "<script>alert('Successfully updated!')</script>";
    echo "<script>window.location.href = '../home#$table'</script>";
}
?>