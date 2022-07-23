<?php require('./inc/retrieve.php');
require('./inc/loginRetrieve.php');



$rowCount =mysqli_num_rows($sql_get_schedStudent);
// $row = mysqli_fetch_array($sql_get_schedStudent);
if($rowCount >0){
    require('./pages/students/schedule.php');
}
else{
?>





<div class="studentDashboard">
<div class="dash-content-stud ">
    <div class="overview">
        <div class="title">
            <i class="fa-solid fa-gauge-high"></i>
            <span class="text">Dashboard</span>
        </div>

        <div class="boxes">
            <div class="box box1">
                <div class="content">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <span class="text-course elem">Elementary</span>
                </div>
                
                <a href="#bookAppointment"><span class="text-enroll">Click to enroll</span></a>

            </div>
            <div class="box box2">
                <div class="content">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <span class="text-course">Jr. High School</span>
                </div>
                
                <a href="#bookAppointment"><span class="text-enroll">Click to enroll</span></a>

            </div>
            <div class="box box3">
                <div class="content">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <span class="text-course">Sr. High School</span>
                </div>
                
                <a href="#bookAppointment"><span class="text-enroll">Click to enroll</span></a>
            </div>
            <div class="box box4">
                <div class="content">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <span class="text-course college">College</span>
                </div>
                
                <a href="#bookAppointment"><span class="text-enroll">Click to enroll</span></a>

            </div>
        </div>
    </div>
    <div class="activity">
        <div class="title">
            <p>Welcome to KLR Tutorials! You dont have any course, so this page won't be very exciting for now. Once you've created or signed up for courses, you will get to see them.</p>
        </div>
        
    </div>

</div>

</div>


<?php }?>