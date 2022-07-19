<?php 
    
        $_SESSION['status'] = 'invalid';
        unset($_SESSION['email']);
        unset($_SESSION['role']);
        echo "<script>window.location.href = '../index.php'</script>";
        mysqli_close($connection);
?>