<?php require('./inc/retrieve.php')?>

<div class="container">
<h2>List of Subjects</h2>

    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Subjects</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($subjectsCount != 0){
                        while ($row = mysqli_fetch_array($sql_get_subjects)){
                ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
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