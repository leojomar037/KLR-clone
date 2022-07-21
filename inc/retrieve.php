<?php
    require("./connection/database.php");
    

    //get admin count

    $query_get_admins = "SELECT * FROM users 
        AS a INNER JOIN reference_code AS b 
        ON b.id = a.role 
        WHERE a.role = '1'";

    $sql_get_admins = mysqli_query($connection,$query_get_admins) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
    $adminsCount =mysqli_num_rows($sql_get_admins);


    //get tutor count
    $query_get_tutors = "SELECT * FROM users
        AS a INNER JOIN reference_code AS b 
        ON b.id = a.role 
        WHERE a.role = '2'";

    $sql_get_tutors = mysqli_query($connection,$query_get_tutors) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
    $tutorsCount =mysqli_num_rows($sql_get_tutors);

    //get students count
    $query_get_students = "SELECT * FROM users
        AS a INNER JOIN reference_code AS b 
        ON b.id = a.role 
        WHERE a.role = '3'";

    $sql_get_students = mysqli_query($connection,$query_get_students) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
    $studentsCount =mysqli_num_rows($sql_get_students);
    

    // get programs
    $query_get_programs = "SELECT * FROM reference_code WHERE group_name = 'Program'";
    
    $sql_get_programs = mysqli_query($connection,$query_get_programs) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
    $programsCount =mysqli_num_rows($sql_get_programs);
    
    // get subjects
    $query_get_subjects = "SELECT * FROM reference_code WHERE group_name = 'Subjects'";
    
    $sql_get_subjects = mysqli_query($connection,$query_get_subjects) OR trigger_error('Query FAILED SQL:$query_create ERROR:'.mysqli_error($connection),E_USER_ERROR );
    $subjectsCount =mysqli_num_rows($sql_get_subjects);

    //for createAppointment.php
    //get courses --added by mnrichae 
    $query_get_courses ="SELECT * FROM reference_code WHERE id > 15 ORDER BY name ASC";
    $sql_get_courses = $connection->query($query_get_courses);
    if($sql_get_courses->num_rows> 0){
      $courses= mysqli_fetch_all($sql_get_courses, MYSQLI_ASSOC);
    }
    
    
?>

