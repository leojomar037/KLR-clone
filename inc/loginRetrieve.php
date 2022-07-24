<?php
require("./connection/database.php");


if($_SESSION['id']){
    $id = $_SESSION['id'];
 //for Tutor
    $query_get_tutorsStudent = "SELECT a.appointment_id,b.user_id, concat(b.first_name,' ',b.last_name) AS name,d.name as program,  c.name as subject, a.date,a.time,a.status
    from appointments as a
    join users as b on a.student_id = b.user_id
    join reference_code as c on a.program_id = c.id
    join reference_code as d on a.course_id = d.id
    where tutor_id = '$id';";

    $sql_get_tutorsStudent = mysqli_query($connection,$query_get_tutorsStudent);

    $tutorsStudentCount = mysqli_num_rows($sql_get_tutorsStudent);
    //for Student
    $query_get_studentsTutor = "SELECT a.appointment_id,b.user_id, concat(b.first_name,' ',b.last_name) AS name,d.name as program,  c.name as subject, a.date,a.time,a.status
    from appointments as a
    join users as b on a.tutor_id = b.user_id
    join reference_code as c on a.program_id = c.id
    join reference_code as d on a.course_id = d.id
    where student_id = '$id';";

    $sql_get_studentsTutor = mysqli_query($connection,$query_get_studentsTutor);

    //get upcoming sched for tutor
    $query_get_sched = "select a.date,a.time,concat(b.first_name,' ',b.last_name) as name, c.name as subject,a.status from appointments as a
    join users as b on b.user_id = a.student_id
    join reference_code as c on c.id = a.program_id
    where concat(date,' ',time) >= current_timestamp() 
    && tutor_id = '$id'
    && status = 3
    order by concat(date,' ',time) limit 4";

    $sql_get_sched = mysqli_query($connection,$query_get_sched);



    //get upcoming sched for Student
    $query_get_schedStudent = "select a.date,a.time,concat(b.first_name,' ',b.last_name) as name, c.name as subject,a.status from appointments as a
    join users as b on b.user_id = a.tutor_id
    join reference_code as c on c.id = a.program_id
    where concat(date,' ',time) >= current_timestamp() 
    && student_id = '$id'
    && status = 3
    order by concat(date,' ',time) limit 4";

    $sql_get_schedStudent = mysqli_query($connection,$query_get_schedStudent);

    //total count
    $query_get_total_appointments = "select *  from appointments where tutor_id = '$id';";
    $sql_get_total_appointments = mysqli_query($connection,$query_get_total_appointments);
    $get_total_appointments = mysqli_num_rows($sql_get_total_appointments);


    //total pending
    $query_get_total_appointments = "select *  from appointments where tutor_id = '$id' && status = 2";
    $sql_get_total_appointments = mysqli_query($connection,$query_get_total_appointments);
    $totalPending = mysqli_num_rows($sql_get_total_appointments);

    //total completed
    $query_get_total_appointments = "select *  from appointments where tutor_id = '$id' && status = 5";
    $sql_get_total_appointments = mysqli_query($connection,$query_get_total_appointments);
    $totalCompleted = mysqli_num_rows($sql_get_total_appointments);

    //total canceled
    $query_get_total_appointments = "select *  from appointments where tutor_id = '$id' && status = 4";
    $sql_get_total_appointments = mysqli_query($connection,$query_get_total_appointments);
    $totalCanceled = mysqli_num_rows($sql_get_total_appointments);

    $query_get_total_appointments = "select distinct course_id from appointments as a
    join reference_code as b 
    on a.course_id = b.id
    where tutor_id = '$id';
    ";
    $sql_get_total_appointments = mysqli_query($connection,$query_get_total_appointments);
    $totalCourse= mysqli_num_rows($sql_get_total_appointments);
}



?>