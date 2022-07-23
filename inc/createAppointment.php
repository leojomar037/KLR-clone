<?php 
    require("../connection/database.php");
    

if(isset($_POST['createAppointment'])){
    $id = $_POST['id'];


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
        header("Location: ../home?errorCreate=All fields are required.#createAppointment");
        exit();
    } else {
        if($course == "others") {
            if (empty($course_others)){
                header("Location: ../home?errorCreate=Specify course name.#createAppointment");
            }  else {
                if(empty(!$course_others)){
                    $query_existing = "SELECT * FROM reference_code WHERE name = '$course_others'";
                    $sql_retrieve = mysqli_query($connection,$query_existing) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
                        if(mysqli_num_rows($sql_retrieve) > 0){
                        header("Location: ../home?errorCreate=Course already exists. Choose from the dropdown below.#createAppointment");
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

                        $query_insert = "INSERT INTO appointments (program_id, course_id, date, time, price,status,tutor_id) VALUES ('$program','$new_course_id','$date','$time','$price',1,'$id')";
                        $sql_insert = mysqli_query($connection,$query_insert) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
                        header("Location: ../home?successCreate=Successfully created.#createAppointment");

                        $_SESSION['successCreate'] = "Successfully created.";
                    }
                    
                }
            }
        }else {
            $query_insert = "INSERT INTO appointments (program_id, course_id, date, time, price, status,tutor_id) VALUES ('$program','$course','$date','$time','$price',1,'$id')";
            $sql_insert = mysqli_query($connection,$query_insert) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
            header("Location: ../home?successCreate=Successfully created.#createAppointment");
        } 

    }

} 

    
?>