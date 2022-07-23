
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

        // echo "<script> alert('Record Deleted!')</script>";
        header("Location: ../home?successDelStudent=Data successfully deleted.#students");
        echo "<script>window.location.href = '../home#students'</script>";
    } 

    if(isset($_POST['closeView'])){
        $id = $_POST['id'];
        $table = $_POST['table'];
        echo "<script>window.location.href = '../home#students'</script>";
    }


?>

<?php if(isset($_POST['view'])){

$id = $_POST['id'];

$query_view = "SELECT * FROM users WHERE user_id = '$id'";
$sql_get_view = $connection->query($query_view);
if($sql_get_view->num_rows> 0){
  $views= mysqli_fetch_all($sql_get_view, MYSQLI_ASSOC);
}


require("../viewProfile.php");

} ?>