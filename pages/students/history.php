<?php require('./inc/retrieve.php')?>
<?php require('./inc/loginRetrieve.php')?>

<div class="dash-content studentTable">
    <div class="title">
        <i class="fa-solid fa-users"></i>
        <span class="text">Students</span>
    </div>
    <div class="box">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while ($student = mysqli_fetch_array($sql_get_studentsTutor)){
            $btn= false;
            $appointment_date = date($student['date']);
            $date_appointed = new DateTime($appointment_date);
            $date_now = new DateTime();
            if($date_appointed < $date_now){
                $student['status'] = 6;
            }
            if($student['status'] == 1 ){
                $status = 'Available';
                $color = 'text-primary';
            } elseif($student['status'] == 2){
                $status = "Pending";
                $color = 'text-warning';
            } elseif($student['status'] == 3){
                $status = "Approved";
                $btn = true;
                $color = 'text-info';
            } elseif($student['status'] == 4){
                $status = "Cancelled";
                $color = 'text-danger';
            } elseif($student['status'] == 5){
                $status = "Completed";
                $color = 'text-success';
            } elseif($student['status'] == 6){
                $status = "Expired";
                $color = 'text-muted';
            }
                
                ?>
                <tr>
                    <td><?php echo $student['name'] ?></td>
                    <td><?php echo $student['program'] ?></td>
                    <td><?php echo $student['subject'] ?></td>
                    <td><?php echo $student['date'] ?></td>
                    <td><?php echo $student['time'] ?></td>
                    <td><?php echo $status ?></td>
                    <td>
                        <form action="./inc/update.php" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo $student['appointment_id'] ?>">
                                <input type="hidden" name="table" id="table" value="studentsTutor">
                                <input type="submit" class="btn btn-success" value="Completed" name="completed" <?php if(!$btn)echo "disabled"?>>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        if (isset($_GET['successComplete'])){?>
            <script>
                swal({
                title: "<?php echo $_GET['successComplete']; ?>",
                icon: "success",
                button: "Close",
                });
            </script>
    <?php }?>

    

