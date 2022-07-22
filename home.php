<?php 
    require('./inc/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--CSS"">-->
    <link rel="stylesheet" href="css/nav.css?v=<?php echo time(); ?>">

    <!-- CSS for 3 role -->
    <link rel="stylesheet" href="css/studentDashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/tables.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/tutorsdash.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/admindashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">

    <!-- Fontawesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Bootrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
   
    <!-- JQUERY  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
</head>

<!--check role-->
<?php

    if( $_SESSION['role']==1){
        require('./pages/admin/adminMain.php');
    }
    elseif( $_SESSION['role']==2){
        require('./pages/tutors/tutorMain.php');
    }
    elseif( $_SESSION['role']==3){
        require('./pages/students/studentMain.php');
    }
    else{
        echo "error";
    }
?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!--nav script -->
<!-- <script src="js/nav.js"></script> -->
<!-- script for all role -->
<script src="js/admin.js"></script>
</html>