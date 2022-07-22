<?php
    require(__DIR__.'/../getenv.php');


    $host = $_ENV['DBHOST'];
    $user =  $_ENV['DBUSER'];
    $password = $_ENV['DBPASSWORD'];
    $database = $_ENV['DATABASE'];
    $port = $_ENV['DBPORT'];

    $connection = mysqli_connect($host,$user,$password,$database,$port);

    if(mysqli_connect_error()){
        echo "Error: Unable to connect to MySql Database".mysqli_connect_error();
    }
?>