
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

        if ($table === 'students'){
            header("Location: ../home?successDelStudent=Data successfully deleted.#students");
        } else {
            header("Location: ../home?successDel=Data successfully deleted.#tutors");
        }

        echo "<script>window.location.href = '../home#$table'</script>";
    } 

    if(isset($_POST['closeView'])){
<<<<<<< HEAD:inc/actionStudent.php
        echo "<script>window.location.href = '../home#students'</script>";
=======
        $id = $_POST['id'];
        $role = $_POST['role'];
        if ($role == 2){
            echo "<script>window.location.href = '../home#tutors'</script>";
        } else {
            echo "<script>window.location.href = '../home#students'</script>";
        }
        
>>>>>>> 2ee01243a57cf2d4a959480c827a20288badcceb:inc/action.php
    }


if(isset($_POST['view'])){

    $id = $_POST['id'];


    $query_view = "SELECT * FROM users WHERE user_id = '$id'";
    $sql_get_view = $connection->query($query_view);
    if($sql_get_view->num_rows> 0){
    $views= mysqli_fetch_all($sql_get_view, MYSQLI_ASSOC);
    }

    require("../viewProfile.php");

    } 
?>