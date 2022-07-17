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
                <?php while ($student = mysqli_fetch_array($sql_get_students)){?>
                    <tr>
                        <td><?php echo $student['first_name'] ?></td>
                        <td><?php echo $student['last_name'] ?></td>
                        <td><?php echo $student['email'] ?></td>
                        <td><?php echo $student['mobile_number'] ?></td>
                        <td>
                            <form action="">
                                <button class="btn btn-danger">Delete</button>
                                <button class="btn btn-success">View</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>