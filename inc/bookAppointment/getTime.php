<?php
require("../../connection/database.php");


if($_GET['date'] && $_GET['tutor'] && $_GET['course'] && $_GET['program']){
    $input = $_GET['date'];
    $string_date = strtotime($input);
    $date = date('Y-m-d',$string_date);

    $query_time_date = "SELECT DISTINCT date,time FROM appointments
    WHERE date = '$date' AND tutor_id = ".$_GET['tutor']." AND course_id = ".$_GET['course']." AND program_id = ".$_GET['program']." 
    AND status = '1' AND date > CURDATE() ORDER BY date ASC"; 
    

    $sql_time_date = $connection->query($query_time_date);

    if($sql_time_date->num_rows > 0){
        echo '<option value = ""></option>';
        while($optionTime = $sql_time_date->fetch_assoc()){
            echo '<option value = "' .$optionTime['time'].'">'.$optionTime['time'].'</option>';
        }
    } else {
        echo '<option value = "z">No available time</option>';
    }
}

?>