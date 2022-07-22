<?php 
$query ="SELECT * FROM reference_code WHERE id > 15 ORDER BY name ASC";
    $result = $connection->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>