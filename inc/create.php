<?php 
    require("../connection/database.php");
    // const EMAIL_EXISTS = "Email already exists. Sign in instead.";

if(isset($_POST['create'])){
   

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $first_name = validate($_POST['first_name']);
    $last_name = validate($_POST['last_name']);
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $birthdate = $_POST['birthdate'];
    $adult_name = $_POST['adult_name'];
    $adult_number = $_POST['adult_number'];
    $adult_email = $_POST['adult_email'];
    $relation = $_POST['relation'];
  

    $user_data = 'first_name='. $first_name. '&last_name='. $last_name. '&email='. $email; 

    
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($gender) || empty($role)|| empty($birthdate)) {
        header("Location: ../registration.php?error=All fields required.&$user_data");
    } else{
        $query_email_check = "SELECT * FROM users WHERE email = '$email'";
        $sql_email_check = mysqli_query($connection, $query_email_check) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
        if(mysqli_num_rows($sql_email_check) > 0){
            header("Location: ../registration.php?error=Email already exists. Sign in instead&$user_data");
            exit();
        } else {
            if (empty(!$adult_name) || empty(!$adult_number) || empty(!$adult_email) || empty(!$relation)){
                $query_create = "INSERT INTO users (first_name, last_name, email, password, gender, role, birthdate, adult_name, adult_number, adult_email, relation) 
            VALUES('$first_name','$last_name','$email','$password','$gender','$role','$birthdate','$adult_name', '$adult_number', '$adult_email','$relation')";
            $sql_create = mysqli_query($connection,$query_create) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
            header("Location: ../registration.php?success=Successfully Registered&$user_data");
            }  else {
            $query_create = "INSERT INTO users (first_name, last_name, email, password, gender, role, birthdate) 
            VALUES('$first_name','$last_name','$email','$password','$gender','$role','$birthdate')";
            $sql_create = mysqli_query($connection,$query_create) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
            header("Location: ../registration.php?success=Successfully Registered&$user_data");
            }
        }
    }


    // header('location: ../registration.php');
} else{
    echo "<script> alert('Error')</script>";
    
    // echo "<script>window.location.href = '../index.php'</script>";

}
    
?>
