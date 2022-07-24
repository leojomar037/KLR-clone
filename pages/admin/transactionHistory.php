<?php require('./inc/retrieve.php')?>

<div class="subjectsTable">
    <div class="title">
        <i class="fa-solid fa-chalkboard-user"></i>
        <span class="text">Transactions</span>
    </div>

    <div class="box">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Appointment ID</th>
                    <th>Tutor Email</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($appointments != 0){
                       
                        foreach ($appointments as $appointment){
                            $appointment_date = date($appointment['date']);
                            $date_appointed = new DateTime($appointment_date);
                            $date_now = new DateTime();
                            if($date_appointed < $date_now){
                                $appointment['status'] = 6;
                            }

                            if($appointment['status'] == 1 ){
                                $status = 'Available';
                                $color = 'text-primary';
                            } elseif($appointment['status'] == 2){
                                $status = "Pending";
                                $color = 'text-warning';
                                $btn = true;
                            } elseif($appointment['status'] == 3){
                                $status = "Approved";
                                $color = 'text-info';
                            } elseif($appointment['status'] == 4){
                                $status = "Cancelled";
                                $color = 'text-danger';
                            } elseif($appointment['status'] == 5){
                                $status = "Completed";
                                $color = 'text-success';
                            } elseif($appointment['status'] == 5){
                                $status = "Completed";
                                $color = 'text-success';
                            } elseif($appointment['status'] == 6){
                                $status = "Expired";
                                $color = 'text-muted';
                            }
                            
                ?>
                    <tr>
                        <td><?php echo $appointment['appointment_id'] ?></td>
                        <td><?php echo $appointment['email'] ?></td>
                        <td class="<?php echo $color ?>"><?php echo $status ?></td>
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
