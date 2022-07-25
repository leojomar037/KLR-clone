<?php require('./inc/retrieve.php')?>



<div class="dash-content adminDashboard">
    <div class="overview">
        <div class="title">
            <i class="fa-solid fa-gauge-high"></i>
            <span class="text">Dashboard</span>
        </div>

        <div class="boxes">
            <div class="box box1">
                <i class="fa-solid fa-user-tie"></i>
                <span class="number"><?php echo $tutorsCount ?></span>
                <span class="text">Tutors</span>

            </div>
            <div class="box box2">
                <i class="fa-solid fa-users"></i>
                <span class="number"><?php echo $studentsCount ?></span>
                <span class="text">Students</span>

            </div>
            <div class="box box3">
                <i class="fa-solid fa-user-tie"></i>
                <span class="number"><?php echo $adminsCount ?></span>
                <span class="text">Admin</span>
            </div>
            <div class="box box4">
                <i class="fa-solid fa-users"></i>
                <span class="number"><?php echo $subjectsCount ?></span>
                <span class="text">Courses</span>

            </div>
        </div>
    </div>
    
    <div class="activity">
        <div class="title">
            <i class="fa-solid fa-chart-line"></i>
            <span class="text">Recent Activities</span>
        </div>
        <div class="activity-data">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Joined</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                        while($user =  mysqli_fetch_assoc($sql_get_last3users) ){
                            if($user['role']==1){
                                $role = "Admin";
                            }
                            elseif($user['role']==2){
                                $role = "Tutor";
                            }
                            elseif($user['role']==3){
                                $role = "Student";
                            }
                    ?> 
                        <tr>
                            <td><?php echo $user['first_name']." ".$user['last_name'] ?></td>
                            <td><?php echo $user['email']?></td>
                            <td><?php echo $role?></td>
                            <td><?php echo $user['date_created']?></td>
                            <td><?php echo $user['date_created']?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        
        
        
        
    </div>

</div>