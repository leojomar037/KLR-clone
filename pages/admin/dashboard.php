<?php require('./inc/retrieve.php')?>
<link rel="stylesheet" href="css/admin.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<body>
    <div class="top">    
            <i class="fa-solid fa-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search here..">
            </div>

            <img src="images/richae.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="fa-solid fa-gauge-high"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="fa-solid fa-user-tie"></i>
                        <span class="number">50</span>
                        <span class="text">Tutors</span>

                    </div>
                    <div class="box box2">
                        <i class="fa-solid fa-users"></i>
                        <span class="number">500</span>
                        <span class="text">Students</span>

                    </div>
                    <div class="box box3">
                        <i class="fa-solid fa-user-tie"></i>
                        <span class="number">5</span>
                        <span class="text">Pending Tutors</span>
                    </div>
                    <div class="box box4">
                        <i class="fa-solid fa-users"></i>
                        <span class="number">20</span>
                        <span class="text">Pending Students</span>

                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="text">Recent Activities</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Prem Sahi</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">kensabella04@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2022</span>
                    </div>

                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New added</span>
                    </div>

                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Liked</span>
                    </div>

                </div>
            </div>

        </div>
    </body>