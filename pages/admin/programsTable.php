<?php require('./inc/retrieve.php')?>

<div class="programsTable">
    <div class="title">
        <i class="fa-solid fa-chalkboard-user"></i>
        <span class="text">Programs</span>
    </div>
    <div class="box">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Programs</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($programs != 0){
                        // while ($row = mysqli_fetch_array($sql_get_programs)){
                            foreach ($programs as $program){
                ?>
                    <tr>
                        <td><?php echo $program['name'] ?></td>
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