<?php require('./inc/retrieve.php');
    
?>

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
                <a href="#tutors" class="navigate-site" site="tutors">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <span class="link-name ">Tutors</span>
                </a>
            </li>
            <li class="links-hover">
                <a href=" #subjects">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span class="link-name ">History</span>
                </a>
            </li>
            <li class="links-hover">
                <a href=" #programs">
                    <i class="fa-solid fa-sheet-plastic"></i>
                    <span class="link-name ">Programs</span>
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
        <?php require('./pages/admin/adminDashboard.php')?>
    </div>

    <div id="profile" class="section">
        <?php require('./editProfile.php')?>
    </div>

    <div id="students" class="section">
        <?php require('./pages/admin/adminStudentsTable.php')?>
    </div>

    <div id="tutors" class="section">
        <?php require('./pages/admin/adminTutorsTable.php')?>
    </div>

    <div id="subjects" class="section">
        <?php //require('./pages/admin/subjectsTable.php')?>
        <?php require('./pages/admin/transactionHistory.php')?>
    </div>

    <div id="programs" class="section">
        <?php require('./pages/admin/programsTable.php')?>
    </div>
</main>