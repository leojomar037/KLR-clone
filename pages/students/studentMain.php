<?php require('./inc/retrieve.php')?>

<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="images/logo.png" alt=" ">
        </div>

        <span class="logo_name "> </span>
        
    </div>
    

    <div class="menu-items">
        <div>
            <li class="links-hover">
                <a href=" #dashboard">
                    <i class="fa-solid fa-house-user"></i>
                    <span class="link-name ">Dashboard</span>
                </a>
            </li>
            <li class="links-hover">
                <a href=" #profile">
                    <i class="fa-solid fa-user"></i>
                    <span class="link-name ">Profile</span>
                    
                </a>
            </li>
            <li class="links-hover">
                <a href=" #bookAppointment">
                    <i class="fa-solid fa-calendar"></i>
                    <span class="link-name ">Appointment</span>
                </a>
            </li>
            <li class="links-hover">
                <a href=" #history">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span class="link-name ">History</span>
                    
                </a>
            </li> 
            <li class="links-hover">
                <a type="button" data-bs-toggle="modal" data-bs-target="#addReview">
                    <i class="fa-solid fa-pen"></i>
                    <span class="link-name ">Add Review</span>
                </a>
            </li>
            
        </div>
            <div>
        
                <li class="logout-mode">
                    <a href="logout.php">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>
            </div>
    </div>

</nav>



<main class="main">
<?php require('./pages/header.php')?>

    <div class="section" id="dashboard">
        <?php require('./pages/students/studentDashboard.php')?>
    </div> 
    <div class="section" id="profile">
        <?php require('./editProfile.php')?>
    </div>
    
    <div class="section" id="bookAppointment">
        <?php require('./pages/students/bookAppointment.php')?>
    </div>

    <div class="section" id="history">
        <?php require('./pages/students/history.php')?>
    </div>

</main>

