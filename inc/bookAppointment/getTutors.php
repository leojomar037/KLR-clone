<?php
require("../../connection/database.php");


if($_GET['course'] && $_GET['program']){
    $query_tutors_courses = "SELECT DISTINCT tutor_id, CONCAT(first_name,' ', last_name, ', ', email) as tutor_info
    FROM appointments
    LEFT JOIN users 
    ON appointments.tutor_id = users.user_id
    WHERE course_id = ".$_GET['course']." AND program_id = ".$_GET['program']."
    AND status = '1' AND date > CURDATE()
    ORDER BY first_name ASC"; 
    $sql_tutors_courses = $connection->query($query_tutors_courses);

    if($sql_tutors_courses->num_rows > 0){
        echo '<option value = ""></option>';
        while($optionTutor = $sql_tutors_courses->fetch_assoc()){
            echo '<option value = "' .$optionTutor['tutor_id'].'">'.$optionTutor['tutor_info'].'</option>';
        }
    } else {
        echo '<option value = "">Tutors not available</option>';
    }
}

?>