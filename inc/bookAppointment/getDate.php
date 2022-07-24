<?php
require("../../connection/database.php");


if($_GET['tutor'] && $_GET['course'] && $_GET['program']){
    $query_date_tutors = "SELECT DISTINCT date
    FROM appointments 
    WHERE tutor_id = ".$_GET['tutor']." AND course_id = ".$_GET['course']." AND program_id = ".$_GET['program']." 
    AND status = '1' 
    AND date > CURDATE()
    ORDER BY date ASC"; 
    $sql_date_tutors = $connection->query($query_date_tutors);

    if($sql_date_tutors->num_rows > 0){
        echo '<option value = ""></option>';
        while($optionDate = $sql_date_tutors->fetch_assoc()){
            echo '<option value = "' .$optionDate['date'].'">'.$optionDate['date'].'</option>';
        }
    } else {
        echo '<option value = "z">Tutors not available</option>';
    }
}

?>