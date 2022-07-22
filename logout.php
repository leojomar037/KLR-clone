<?php 

        if (session_status() === PHP_SESSION_NONE) {
                session_start();
        }
        include("./connection/database.php");
        $_SESSION['status'] = 'invalid';
        unset($_SESSION['email']);
        unset($_SESSION['role']);
        mysqli_close($connection);

        echo "<script>window.location.href = './'</script>";

?>


