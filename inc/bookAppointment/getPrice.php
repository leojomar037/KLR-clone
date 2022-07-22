<?php
require("../../connection/database.php");


if($_GET['time'] && $_GET['date'] && $_GET['tutor'] && $_GET['course'] && $_GET['program']){
    $input = $_GET['date'];
    $string_date = strtotime($input);
    $date = date('Y-m-d',$string_date);

    $inputTime = $_GET['time'];
    $string_time = strtotime($inputTime);
    $time = date('H:i:s',$string_time);
    echo $time;

    $query_price_time = "SELECT DISTINCT price
    FROM appointments
    WHERE time = '$time' AND date = '$date' AND tutor_id = ".$_GET['tutor']." AND course_id = ".$_GET['course']." AND program_id = ".$_GET['program']." 
    AND status = '1' AND date > CURDATE() 
    ORDER BY date ASC"; 

    echo $query_price_time;
   
    $sql_price_time = $connection->query($query_price_time);

    if($sql_price_time ->num_rows > 0){
        echo '<option value = ""></option>';
        while($optionPrice = $sql_price_time->fetch_assoc()){
            echo '<option value = "' .$optionPrice['price'].'">'.$optionPrice['price'].'</option>';
        }
    } else {
        echo '<option value = "">No available time</option>';
    }
}

?>