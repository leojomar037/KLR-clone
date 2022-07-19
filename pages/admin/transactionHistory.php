<div class="container">




<div class="card">
    card
</div>




<?php 
    if($programsCount){
        while ($row = mysqli_fetch_array($sql_get_programs)){
?>
    
<?php 
        }
    }
    else{
?>
    <td class="bg-danger" colspan="5" style="text-align: center;">No Record Found</td>
<?php
    }
?>
</div>