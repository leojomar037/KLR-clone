<?php
    require("../connection/database.php");
    require('./session.php');




    if(isset($_POST['delete'])){
        
        $id = $_POST['id'];
        $table = $_POST['table'];

        $query_remove_check = "SET FOREIGN_KEY_CHECKS = 0";
        $query_remove_safe_update = "SET SQL_SAFE_UPDATES = 0";
        $sql_remove_check = mysqli_multi_query($connection,$query_remove_check);
        $sql_remove_safe_update = mysqli_multi_query($connection,$query_remove_safe_update);
    

        
        $query_delete = "DELETE FROM appointments WHERE student_id = '$id' OR tutor_id = '$id'";
        $query_delete = "DELETE FROM users WHERE user_id = '$id'";

        $sql_delete = mysqli_multi_query($connection,$query_delete) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );

        echo "<script> alert('Record Deleted!')</script>";
        echo "<script>window.location.href = '../home#$table'</script>";
    }


    

?>