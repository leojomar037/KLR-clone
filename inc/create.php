<?php 
    require("./connection/database.php");
    

if(isset($_POST['create'])){
   
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $first_name = ucwords(validate($_POST['first_name']));
    $last_name = ucwords(validate($_POST['last_name']));
    $email = $_POST['regemail'];
    $password = password_hash($_POST['regpassword'],PASSWORD_DEFAULT);
    $original_password = $_POST['regpassword'];
    $confirm_password = $_POST['regconfirm_password'];
    $role = $_POST['role'];

    $user_data = 'first_name='. $first_name. '&last_name='. $last_name. '&regemail='. $email. '&role='. $role; 
  
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($role)) {
        header("Location: ./registration.php?errorReg=All fields required.&$user_data#");
    } else{
        $query_email_check = "SELECT * FROM users WHERE email = '$email'";
        $sql_email_check = mysqli_query($connection, $query_email_check) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
        if(mysqli_num_rows($sql_email_check) > 0){
            header("Location: ./registration.php?errorReg=Email already exists. Sign in instead&$user_data");
            exit();
        } else {
            if(strlen($original_password) < 4 || strlen($original_password) > 16) {
                header("Location: ./registration.php?errorReg=Password must be within 3-16 characters&$user_data");
                exit();
                } else {
                    if($original_password != $confirm_password){
                        header("Location: ./registration.php?errorReg=Passwords are not matched.&$user_data");
                    } else {
                        $query_create = "INSERT INTO users (first_name, last_name, email, password, role) 
                        VALUES('$first_name','$last_name','$email','$password','$role')";
                        $sql_create = mysqli_query($connection,$query_create) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
                        header("Location: ./registration.php?successReg=Successfully Registered!&$user_data");
                    }
                }   
            } 
        }

} 

    
?>