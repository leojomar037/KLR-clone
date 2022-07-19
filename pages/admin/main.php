<body>
    <nav class="sidebar">
        <div class="profile">
            <button class="btn ">
                <i class="bi bi-list"></i>
            </button>

            <h2>Welcome</h2>
            <h3><?php echo $_SESSION['first_name'] ?></h3>
        </div>
        <a class="list" id="list" href="#dashboard">
            <i class="bi bi-book"></i>
            <span class="title">Dashboard</span>
        </a>
        <a class="list" id="list" href="#profile">
            <i class="bi bi-person-circle"></i>
            <span class="title">Profile</span>
        </a>
        <a class="list" id="list" href="#students">
            <i class="bi bi-people-fill"></i>
            <span class="title">Students</span>
        </a>
        <a class="list" id="list" href="#tutors">
            <i class="bi bi-person-fill"></i>
            <span class="title">Tutors</span>
        </a>
        <a class="list" id="list" href="#transaction_history">
            <i class="bi bi-clock-history"></i>
            <span class="title">Transaction History</span>
        </a>
        <a class="list" id="list" href="#programs">
            <i class="bi bi-app-indicator"></i>
            <span class="title">Programs</span>
        </a>
        <a class="list" id="list" href="#subjects">
            <i class="bi bi-app-indicator"></i>
            <span class="title">Subjects</span>
        </a>
        <a class="list  sign_out" id="list" href="inc/logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span class="title">Sign-out</span>
        </a>
    </nav>

    <main>
        <div class="bg_image"></div>
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
            <?php require('./pages/admin/transactionHistory.php')?>
        </div>
        <div class="section programs" id="programs">
            <?php require('./pages/admin/programsTable.php') ?>
        </div>
        <div class="section subjects" id="subjects">
            <?php require('./pages/admin/subjectsTable.php') ?>
        </div>
    </main>
</body>
