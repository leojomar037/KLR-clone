<?php require('./inc/retrieve.php')?>

<div class="container">
<h2>List of Students</h2>

    <div class="card">
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
                <?php 
                    if($studentsCount != 0){
                        while ($row = mysqli_fetch_array($sql_get_students)){
                ?>
                    <tr>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><?php echo $row['last_name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['mobile_number'] ?></td>
                        <td>
                            <form action="./inc/update.php" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo $row['user_id'] ?>">
                                <input type="submit" class="btn btn-success" value="View" name="update">
                                <input type="submit" class="btn btn-danger" value="Delete" name="delete" onclick="return confirm('Are you sure you want to delete this record?')">
                            </form>
                        </td>
                    </tr>
                <?php 
                        }
                    }
                    else{
                ?>
                    <td class="bg-danger" colspan="5" style="text-align: center;">No Record Found</td>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>