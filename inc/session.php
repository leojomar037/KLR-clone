<?php 
    session_start();

    if(empty($_SESSION['status']) || session_status() === PHP_SESSION_NONE || $_SESSION['status'] == 'invalid'){
        require('./logout.php');
    }
    
?>