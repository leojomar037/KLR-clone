
<body>
    
    <nav class="sidebar">
        <div class="profile">
            <button class="btn ">
                <i class="bi bi-list"></i>
            </button>
            <h2>Welcome</h2>
            <h3><?php echo $_SESSION['first_name'] ?></h3>
        </div>
        <a class="list" href="#dashboard">
            <i class="bi bi-book"></i>
            <span class="title">Dashboard</span>
        </a>
        <a class="list" href="#profile">
            <i class="bi bi-person-circle"></i>
            <span class="title">Profile</span>
        </a>
        <div class="dropdown">
            <a class="dropbtn" >
                <i class="bi bi-app-indicator"></i>
                <span class="title">Programs </span>
                <i class="bi bi-arrow-down-right-circle"></i>
            </a>
            <div class="dropdown-content">
             <a class="list" href="#">
                    <i class="bi bi-person-fill"></i>
                    <span class="title">Elementary</span>
                </a>
                
                <a class="list" href="#">
                    <i class="bi bi-person-fill"></i>
                    <span class="title">Junior High School</span>
                </a>
                <a class="list" href="#">
                    <i class="bi bi-person-fill"></i>
                    <span class="title">Senior High School</span>
                </a>
            </div>
          </div>

        <a class="list" href="#">
            <i class="bi bi-clock-history"></i>
            <span class="title">Transaction History</span>
        </a>
        <a class="list" href="inc/logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span class="title">Sign Out</span>
        </a>
    </nav>
    <main>
    <div class="bg_image"></div>


    </main>
</body>
