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
                if($student['status']==2){
                    $status = "Pending";
                    $btn = true;
                }
                elseif($student['status']==3){
                    $status = "Approved";
                }
                elseif($student['status']==4){
                    $status = "Canceled";
                }
                elseif($student['status']==5){
                    $status = "Completed";
                }
                
                ?>
                <tr>
                    <td><?php echo $student['student_name'] ?></td>
                    <td><?php echo $student['program'] ?></td>
                    <td><?php echo $student['subject'] ?></td>
                    <td><?php echo $student['date'] ?></td>
                    <td><?php echo $student['time'] ?></td>
                    <td><?php echo $status ?></td>
                    <td>
                        <form action="./inc/update.php" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo $student['appointment_id'] ?>">
                                <input type="hidden" name="table" id="table" value="students">
                                <input type="submit" class="btn btn-success" value="Cancel" name="cancel" <?php if(!$btn)echo "disabled"?>>
                                <input type="submit" class="btn btn-danger" value="Approve" name="approve" <?php if(!$btn)echo "disabled"?> onclick="return confirm('Are you sure you want to delete this record?')">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    </div>
</div>

    

