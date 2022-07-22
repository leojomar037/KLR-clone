<?php
    require ('./connection/database.php');

    if ($_SESSION['id']) {
        $id = $_SESSION['id'];

        $query_update = "SELECT * from users WHERE user_id = '$id'";

        $sql_update = mysqli_query($connection, $query_update) OR trigger_error('Query FAILED! sql:$query_update ERROR: '.mysqli_error($connection), E_USER_ERROR);
        
        $row = mysqli_fetch_assoc($sql_update);
    };
?>
