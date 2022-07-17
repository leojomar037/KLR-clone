<?php 
    session_start();
    if($_SESSION['status']=='invalid'|| empty($_SESSION['status'])){
        require('./inc/logout.php');
    }
?>