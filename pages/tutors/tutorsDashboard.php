<?php require('./inc/retrieve.php');
require('./inc/loginRetrieve.php');







$rowCount =mysqli_num_rows($sql_get_sched);
// $row = mysqli_fetch_array($sql_get_schedStudent);
if($rowCount >0){
    require('./pages/tutors/schedule.php');
}
else{
?>



        <div class="dash-content-tutors">
            <div class="overview">
                <div class="title">
                    <i class="fa-solid fa-gauge-high"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <div class="content">
                            <div class="content-details">
                                <i class="fa-solid fa-coins"></i>
                                <span class="number"><?php echo $get_total_appointments ?></span>
                            </div>
                            <div class="content-btn">
                                <span class="text-course">Total Appointments</span>
                               
                            </div>
                            
                        </div>
                        

                    </div>
                    <div class="box box2">
                        <div class="content">
                            <div class="content-details">
                                <i class="fa-solid fa-calendar-check"></i>
                                <span class="number"><?php echo $tutorsStudentCount ?></span>
                            </div>
                            <div class="content-btn">
                                <span class="text-course">Total Bookings</span>
                               
                            </div>
                            
                        </div>
                        

                    </div>
                    <div class="box box3">
                        <div class="content">
                            <div class="content-details">
                                <i class="fa-regular fa-calendar"></i>
                                <span class="number"><?php echo $totalPending?></span>
                            </div>
                            <div class="content-btn">
                                <span class="text-course">Bookings Pending</span>
                               
                            </div>
                            
                        </div>
                        
                        
                    </div>
                    <div class="box box4">
                        <div class="content">
                            <div class="content-details">
                                <i class="bi bi-check2-square"></i>
                                <span class="number"><?php echo $totalCompleted?></span>
                            </div>
                            <div class="content-btn">
                                <span class="text-course college">Bookings Completed</span>
                               
                            </div>
                            
                        </div>
                        
                        

                    </div>
                    <div class="box box5">
                        <div class="content">
                            <div class="content-details">
                                <i class="fa-solid fa-bars-progress"></i>
                                <span class="number"><?php echo $totalCanceled?></span>
                            </div>

                            <div class="content-btn">
                                <span class="text-course college">Bookings Canceled</span>
                               
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="box box6">
                        <div class="content">
                            <div class="content-details">
                                <i class="fa-solid fa-check-to-slot"></i>
                                <span class="number"><?php echo $totalCourse?></span>
                            </div>
                            <div class="content-btn">
                                <span class="text-course college">Total Tutoring Courses</span>
                                 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>

<?php }?>
