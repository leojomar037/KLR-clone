<?php
require('../connection/database.php');

if(isset($_POST['addReview'])){

    $name = $_POST['name'];
    $review = $_POST['review'];
    $rate = $_POST['rate'];

    $query_addReview = "INSERT INTO `klrtutorials`.`review` (`review`, `name`, `rate`) VALUES ('$name', '$review', '$rate')";
    $sql_addReview = mysqli_query($connection, $query_addReview);
       
}