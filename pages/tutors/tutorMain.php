<?php require('./inc/retrieve.php');?>
<?php require('./inc/loginRetrieve.php')?>


<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="images/sign-in.jpg" alt=" ">
        </div>

        <span class="logo_name ">KLR </span>
    </div>
    <div class="menu-items">
        <div>
            
            <li class="links-hover">
                <a href=" #dashboard" class="navigate-site" site="dashboard">
                    <i class="fa-solid fa-house-user"></i>
                    <span class="link-name ">Dashboard</span>
                </a>
            </li>
            <li class="links-hover">
                <a href="#profile">
                    <i class="fa-solid fa-user"></i>
                    <span class="link-name ">Profile</span>
                </a>
            </li>
            <li class="links-hover">
                <a href=" #students" class="navigate-site" site="students">
                    <i class="fa-solid fa-users"></i>
                    <span class="link-name ">Students</span>
                </a>
            </li> 
            <li class="links-hover">
                <a href=" #schedule" class="navigate-site" site="schedule">
                    <i class="fa-solid fa-users"></i>
                    <span class="link-name ">Schedules</span>
                </a>
            </li>
            <li class="links-hover">
                <a href=" #createAppointment" class="navigate-site" site="schedule">
                    <i class="fa-solid fa-users"></i>
                    <span class="link-name ">Create Appointment</span>
                </a>
            </li>
            
         
        </div>

        <div>
            <li class="logout-mode">
                <a href="logout">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="link-name">Logout</span>
                </a>
            </li>
        </div>       
    </div>
</nav>

<main class="main">
    
    <?php require('./pages/header.php')?>
    <div class="show-page"></div>
    
    <div id="dashboard" class="section">
        <?php require('./pages/tutors/tutorsDashboard.php')?>
    </div>

    <div id="profile" class="section">
        <?php require('./editProfile.php')?>
    </div>

    <div id="students" class="section">
        <?php require('./pages/tutors/tutorsStudentTable.php')?>

    </div>
    <div id="schedule" class="section">
        <?php require('./pages/tutors/schedule.php')?>
    </div>

    <div id="createAppointment" class="section">
        <?php require('./pages/tutors/createAppointment.php')?>
    </div>

    <div id="programs" class="section">
    </div>
</main>