<?php require('./inc/retrieve.php')?>

<div class="dash-content studentTable">
    <div class="title">
        <i class="fa-solid fa-users"></i>
        <span class="text">Tutors</span>
    </div>
    <div class="box">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($tutor = mysqli_fetch_array($sql_get_tutors)){?>
                <tr>
                    <td><?php echo $tutor['first_name'] ?></td>
                    <td><?php echo $tutor['last_name'] ?></td>
                    <td><?php echo $tutor['email'] ?></td>
                    <td><?php echo $tutor['mobile_number'] ?></td>
                    <td>
                        <form action="./inc/delete.php" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo $tutor['user_id'] ?>">
                                <input type="hidden" name="table" id="table" value="tutors">
                                <input type="submit" class="btn btn-success" value="View" name="update">
                                <input type="submit" class="btn btn-danger" value="Delete" name="delete" onclick="return confirm('Are you sure you want to delete this record?')">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    </div>
</div>

    
