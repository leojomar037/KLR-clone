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
        header("Location: ./registration?errorReg=All fields required.&$user_data#");
    } else{
        $query_email_check = "SELECT * FROM users WHERE email = '$email'";
        $sql_email_check = mysqli_query($connection, $query_email_check) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
        if(mysqli_num_rows($sql_email_check) > 0){
            header("Location: ./registration?errorReg=Email already exists. Sign in instead&$user_data");
            exit();
        } else {
            if(strlen($original_password) < 4 || strlen($original_password) > 16) {
                header("Location: ./registration.php?errorReg=Password must be within 3-16 characters&$user_data");
                exit();
                } else {
                    if($original_password != $confirm_password){
                        header("Location: ./registration?errorReg=Passwords are not matched.&$user_data");
                    } else {
                        $query_create = "INSERT INTO users (first_name, last_name, email, password, role) 
                        VALUES('$first_name','$last_name','$email','$password','$role')";
                        $sql_create = mysqli_query($connection,$query_create) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
                        header("Location: ./registration?successReg=Successfully Registered&$user_data");
                    }
                }   
            } 
        }

} 



if(isset($_POST['createAppointment'])){
   
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $program = $_POST['program'];
    $course = $_POST['course'];
    $course_others = ucwords($_POST['course_others']);
    $tutor = $_POST['tutor_id'];
    $date= $_POST['date'];
    $time= $_POST['time'];
    $price = $_POST['price'];

    if (empty($program) || empty($course) || empty($date) || empty($time) || empty($price) ) {
    // if (empty($program) || empty($course) || empty($date) || empty($time) || empty($price)) {
        header("Location: ./createAppointment.php?errorCreate=All fields are required.");
        exit();
    } else {
        if($course == "others") {
            if (empty($course_others)){
                header("Location: ./createAppointment.php?errorCreate=Specify course name.");
            }  else {
                if(empty(!$course_others)){
                    $query_existing = "SELECT * FROM reference_code WHERE name = '$course_others'";
                    $sql_retrieve = mysqli_query($connection,$query_existing) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
                        if(mysqli_num_rows($sql_retrieve) > 0){
                        header("Location: ./createAppointment.php?errorCreate=Course already exists. Choose from the dropdown below.");
                        exit();
                    } else {
                        $query_last_rank = "SELECT name_rank FROM reference_code WHERE id = (SELECT MAX(id) FROM reference_code);";
                        $sql_retrieve = mysqli_query($connection,$query_last_rank) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
                        $retrieve_name_rank = mysqli_fetch_array($sql_retrieve);
                        $last_name_rank = (int)$retrieve_name_rank['name_rank'];
                        $new_name_rank = $last_name_rank + 1;

                        $query_new_course = "INSERT INTO reference_code (name, name_rank, group_name) VALUES ('$course_others','$new_name_rank','Course')";
                        $sql_insert = mysqli_query($connection,$query_new_course) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
                        $query_search_course = "SELECT id from reference_code WHERE id = (SELECT MAX(id) FROM reference_code);";
                        $sql_search = mysqli_query($connection,$query_search_course) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
                        $retrieve_new_course = mysqli_fetch_array($sql_search);

                        $new_course_id = (int)$retrieve_new_course['id'];

                        $query_insert = "INSERT INTO appointments (program_id, course_id, date, time, price) VALUES ('$program','$new_course_id','$date','$time','$price')";
                        $sql_insert = mysqli_query($connection,$query_insert) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
                        header("Location: ./createAppointment.php?successCreate=Successfully created.");
                    }
                    
                }
            }
        }else {
            $query_insert = "INSERT INTO appointments (program_id, course_id, date, time, price, status) VALUES ('$program','$course','$date','$time','$price', 1)";
            $sql_insert = mysqli_query($connection,$query_insert) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
            header("Location: ./createAppointment.php?successCreate=Successfully created.");
        } 

    }

} 

    
?>

    
