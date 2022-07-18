<?php require('./inc/retrieve.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body >

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
                    <a href=" #dashboard">
                        <i class="fa-solid fa-house-user"></i>
                        <span class="link-name ">Dashboard</span>
                    </a>
                </li>
                <li class="links-hover">
                    <a href=" #">
                        <i class="fa-solid fa-user"></i>
                        <span class="link-name ">Profile</span>
                    </a>
                </li>
                <li class="links-hover">
                    <a href=" #students">
                        <i class="fa-solid fa-users"></i>
                        <span class="link-name ">Students</span>
                    </a>
                </li>
                <li class="links-hover">
                    <a href=" #">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span class="link-name ">Tutors</span>
                    </a>
                </li>
                <li class="links-hover">
                    <a href=" #">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <span class="link-name ">History</span>
                    </a>
                </li>
                <li class="links-hover">
                    <a href=" #">
                        <i class="fa-solid fa-sheet-plastic"></i>
                        <span class="link-name ">Programs</span>
                    </a>
                </li>
                </div>
                <div>
            
                <li class="logout-mode">
                    <a href="inc/logout.php">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>
                </div>
               
            
        </div>

    </nav>
    
    <main> 
        <div class="section dashboard" id="dashboard">
            <?php require('./pages/admin/dashboard.php')?>
        </div>
        <div class="section profile" id="profile">
            
        </div>
        <div class="section students" id="students">
            <?php require('./pages/admin/studentsTable.php')?>
        </div>
        <div class="section tutors" id="tutors">
            <?php require('./pages/admin/tutorsTable.php')?>
        </div>
        <div class="section transaction_history" id="transaction_history">
            
        </div>
        <div class="section programs" id="programs">
            
        </div>
    </main>


    <script src="js/admin.js"></script>

</body>

</html>