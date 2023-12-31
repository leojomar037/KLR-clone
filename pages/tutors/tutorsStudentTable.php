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
            while ($student = mysqli_fetch_array($sql_get_tutorsStudent)){
                $btn = false;
                $appointment_date = date($student['date']);
                $date_appointed = new DateTime($appointment_date);
                $date_now = new DateTime();
                if($date_appointed < $date_now){
                    $appointment['status'] = 6;
                }
                if($student['status']==2){
                    $status = "Pending";
                    $color = 'text-warning';
                    $btn = true;
                } elseif($student['status']==3){
                    $status = "Approved";
                    $color = 'text-info';
                } elseif($student['status']==4){
                    $status = "Cancelled";
                    $color = 'text-danger';
                } elseif($student['status']==5){
                    $status = "Completed";
                    $color = 'text-success';
                } elseif($appointment['status'] == 6){
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
                    <td class="<?php echo $color?>"><?php echo $status ?></td>
                    <td>
                        <form action="./inc/update.php" method="post" name="action_appointment" id="action_appointment">
                                <input type="hidden" name="id" id="id" value="<?php echo $student['appointment_id'] ?>">
                                <input type="hidden" name="table" id="table" value="students">
                                <input type="submit" class="btn btn-success" value="Cancel" name="cancel" <?php if(!$btn)echo "disabled"?> onclick="return confirm('Are you sure you want to delete this record?')">
                                <!-- <input type="submit" class="btn btn-success" value="Cancel" name="cancel" <?php if(!$btn)echo "disabled"?> onclick="return confirmCancel()"> -->
                                <input type="submit" class="btn btn-danger" value="Approve" name="approve" <?php if(!$btn)echo "disabled"?> >
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- <script>
    function confirmCancel(){
    event.preventDefault();
        var form = this;
        event.target.value;
        swal({
            title: "Are you sure?",
            text: "Action cannot be undone",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, cancel it!",
            cancelButtonText: "No, please!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then((willDelete) => {
               if (willDelete) {
                        document.form.submit();

               } else {
                        swal("Your imaginary file is safe!");
           }
        })
    }
    </script> -->
       

    <?php
        if (isset($_GET['successCancel'])){?>
            <script>
                swal({
                title: "<?php echo $_GET['successCancel']; ?>",
                // text: "You clicked the button!",
                icon: "success",
                button: "Close",
                });
            </script>
    <?php }?>


    <?php
        if (isset($_GET['successApprove'])){?>
            <script>
                swal({
                title: "<?php echo $_GET['successApprove']; ?>",
                // text: "You clicked the button!",
                icon: "success",
                button: "Close",
                });
            </script>
    <?php }?>


