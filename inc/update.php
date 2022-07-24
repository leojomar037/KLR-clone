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
    // $nationality = $_POST['nationality'];
    $civil_status = $_POST['civil_status'];
    $mobile_number = $_POST ['mobile_number'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
   
    $adult_name = $_POST['adult_name'];
    $adult_email = $_POST['adult_email'];

    if($_FILES['profile']){
        $img = $_FILES['profile']['name'];
        $img_tmp_name = $_FILES['profile']['tmp_name'];
    
        $img_ex = pathinfo($img,PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img = uniqid("IMG-",true).'.'.$img_ex_lc;
        $img_upload_path = '../images/profile/'.$new_img;
        $profile = $new_img;
    
    }
   
    if (empty($first_name) || empty($last_name)) {
        header("Location: ../home.php?errorUpdate=All fields required.#profile");
    } else {
        if (empty(!$adult_name) || empty(!$adult_email)){
            if($gender == ""){
                $gender = 6; 
            }
    
            if($civil_status == ""){
                $civil_status = 6;
            }
    
            if($birthdate == ""){
                $birthdate = '0000-00-00';
            }
            $query_update = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', gender = '$gender', civil_status = '$civil_status', 
            mobile_number = '$mobile_number', address = '$address', birthdate = '$birthdate',profile_pic = '$profile' WHERE user_id = '$id'";
            $sql_update = mysqli_query($connection, $query_update) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);
            move_uploaded_file($img_tmp_name,$img_upload_path);
            

            $query_update_user_info = "select * from users where user_id = '$id'";
            $sql_update_user_info = mysqli_query($connection,$query_update_user_info);
            $mysql_array = mysqli_fetch_array($sql_update_user_info);
        
            $_SESSION['first_name'] = $mysql_array['first_name'];
            $_SESSION['profile_pic'] =  $mysql_array['profile_pic'];

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
            $query_update = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', gender = '$gender', civil_status = '$civil_status', 
            mobile_number = '$mobile_number', address = '$address', birthdate = '$birthdate',profile_pic = '$profile' WHERE user_id = '$id'";
            $sql_update = mysqli_query($connection, $query_update) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);
            move_uploaded_file($img_tmp_name,$img_upload_path);

            $query_update_user_info = "select * from users where user_id = '$id'";
            $sql_update_user_info = mysqli_query($connection,$query_update_user_info);
            $mysql_array = mysqli_fetch_array($sql_update_user_info);
        
            $_SESSION['first_name'] = $mysql_array['first_name'];
            $_SESSION['profile_pic'] =  $mysql_array['profile_pic'];
            
            header("Location: ../home.php?successUpdate=Successfully updated.#profile");
        }
        
       
    }

   

};


if(isset($_POST['cancel'])){
    $id = $_POST['id'];
    $table = $_POST['table'];
    $query_update_status = "UPDATE appointments SET status = '4' WHERE appointment_id = '$id'";
    $sql_update_status = mysqli_query($connection, $query_update_status) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);

    header("Location: ../home.php?successCancel=Successfully cancelled.#students");
    echo "<script>window.location.href = '../home#$table'</script>";
}
if(isset($_POST['approve'])){
    $id = $_POST['id'];
    $table = $_POST['table'];
    $query_update_status = "UPDATE appointments SET status = '3' WHERE appointment_id = '$id'";
    $sql_update_status = mysqli_query($connection, $query_update_status) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);

    header("Location: ../home.php?successApprove=Approved!#students");
    echo "<script>window.location.href = '../home#$table'</script>";
}
if(isset($_POST['completed'])){
    $id = $_POST['id'];
    $table = $_POST['table'];
    $query_update_status = "UPDATE appointments SET status = '5' WHERE appointment_id = '$id'";
    $sql_update_status = mysqli_query($connection, $query_update_status) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);

    header("Location: ../home.php?successComplete=Successfully completed.#history");
    echo "<script>window.location.href = '../home#$table'</script>";
}
?>