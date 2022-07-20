<?php 
    session_start();

    if($_SESSION['status'] =='valid'){
        echo "<script>window.location.href = './home.php'</script>";
    }
   
?>