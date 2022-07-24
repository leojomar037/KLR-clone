<?php
require(__DIR__."/../connection/database.php");

if(isset($_POST['bookAppointment'])){
   
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $program = $_POST['program'];
    $course = $_POST['course'];
    $tutor = $_POST['tutor'];
    $date= $_POST['date'];
    $time= $_POST['time'];
    $price = $_POST['price'];
    $id =$_POST['id'];


    var_dump($id);

    if (empty($program) || empty($course) || empty($date) || empty($time) || empty($price)) {
        header("Location: ../home?errorBook=All fields are required.#bookAppointment");
        exit();
    } else {
        $query_update_appointment = "UPDATE appointments SET status = '2',student_id = '$id' WHERE program_id = '$program' AND course_id = '$course' AND tutor_id = '$tutor' AND date ='$date' AND time = '$time' AND price = '$price'";
        $sql_update_appointment = mysqli_query($connection,$query_update_appointment) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
        header("Location: ../home?successBook=Successfully booked.#bookAppointment");
        exit();
        }
}


?>