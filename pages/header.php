<?php
    if($_SESSION['role'] == 1){
        $role = "Admin";
    }
    elseif($_SESSION['role'] == 2){
        $role = "Tutor";
    }
    elseif($_SESSION['role'] == 3){
        $role = "Student";
    }
?>

<div class="top">
    <i class="bi bi-filter-left sidebar-toggle"></i>
    <img src="images/profile/<?php echo $_SESSION['profile_pic'] ?>" alt="">
    <div class="details">
        <span class="name">Welcome <?php echo $_SESSION['first_name']?></span>
        <span class="role"><?php echo $role ;?></span>
    </div> 
</div>