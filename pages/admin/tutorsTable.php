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
                <?php while ($tutor = mysqli_fetch_array($sql_get_tutors)){?>
                    <tr>
                        <td><?php echo $tutor['first_name'] ?></td>
                        <td><?php echo $tutor['last_name'] ?></td>
                        <td><?php echo $tutor['email'] ?></td>
                        <td><?php echo $tutor['mobile_number'] ?></td>
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