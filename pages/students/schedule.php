<?php require('./inc/loginRetrieve.php')?>






<div class="schedule">

<div class="overview">
    <div class="title">
        <i class="fa-solid fa-gauge-high"></i>
        <span class="text">Upcoming Schedule</span>
    </div>

    <div class="boxes">
        <?php while($row = mysqli_fetch_array($sql_get_schedStudent)){ ?>
            <div class="box">
                <span class="">Date: <?php if($row['date']==date("Y-m-d")) echo "Today"; else echo $row['date'] ?></span>
                <span class="">Time: <?php echo $row['time']?></span>
                <span class="">Subject: <?php echo $row['subject']?></span>
                <span class="">Tutor name: <?php echo $row['name']?> </span>
            </div>
        <?php }?>
        
    </div>
</div>

</div>