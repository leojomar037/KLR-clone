<?php

require("../../connection/database.php");

if($_GET['program']){
    $query_course_programs = "SELECT DISTINCT course_id, name
    FROM appointments
    LEFT JOIN reference_code 
    ON appointments.course_id = reference_code.id
    WHERE program_id = ".$_GET['program']." 
    AND status = '1' AND date > CURDATE() ORDER BY name ASC"; 
    $sql_course_programs = $connection->query($query_course_programs);

    if($sql_course_programs->num_rows > 0){
        echo '<option value = ""></option>';
        while($option = $sql_course_programs->fetch_assoc()){
            echo "<option value = " .$option['course_id']. ">".$option['name']."</option>";
        }
    } else {
        echo '<option value = "">Course not available</option>';
    }
} 


?>