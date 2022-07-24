<?php 
    require('./inc/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLR</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">


    <!--CSS"">-->
    <link rel="stylesheet" href="css/nav.css?v=<?php echo time(); ?>">

    <!-- CSS for 3 role -->
    <link rel="stylesheet" href="css/studentDashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/tables.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/tutorsdash.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/admindashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/appointment.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/tutorDashboard.css?v=<?php echo time(); ?>">
    
    
     <!-- Modal -->
  <div class="modal fade" id="addReview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Review</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
<div class="review">
	<link rel="stylesheet" href="/css/addReview.css">
    <form action="../../inc/addReview.php" method="post">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="review">Review:</label>
        <textarea name="review" id="review" cols="30" rows="10"></textarea>

		<div class="stars">
			<input class="stars__checkbox" type="radio" id="first-star" name="rate" value="5">
			<label class="stars__star" for="first-star">
				<svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
				<polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
								10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 " />
				</svg>
			</label>
			<input class="stars__checkbox" type="radio" id="second-star" name="rate" value="4">
			<label class="stars__star" for="second-star">
				<svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
				<polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
								10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 " />
				</svg>
			</label>
			<input class="stars__checkbox" type="radio" id="third-star" name="rate" value="3">
			<label class="stars__star" for="third-star">
				<svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
				<polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
								10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 " />
				</svg>
			</label>
			<input class="stars__checkbox" type="radio" id="fourth-star" name="rate" value="2">
			<label class="stars__star" for="fourth-star">
				<svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
				<polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
								10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 " />
				</svg>
			</label>
			<input class="stars__checkbox" type="radio" id="fifth-star" name="rate" value="1">
			<label class="stars__star" for="fifth-star">
				<svg class="stars__star-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
				<polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 
								10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 " />
				</svg>
			</label>
			<input class="stars__checkbox" type="radio" id="fifth-star" name="rate" value="0" checked>
		</div>

		<button type="submit" name="addReview">Submit</button>
	</form>
</div>

        </div>
      </div>
    </div>
  </div>

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
<script src="js/createAppointment.js"></script>
<script src="js/appointment.js"></script>
<script src="js/app.js"></script>
<!-- <script src="js/edit.js"></script> -->

</html>