<?php
    require('./inc/bookAppointment.php');
    require('./inc/retrieve.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="css/appointment.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!--ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
           function getCourse(){
                let program = document.getElementById('program').value;
                if(program){
                    $.ajax({
                        type: 'GET',
                        url: './inc/bookAppointment/getCourse.php',
                        data: 'program='+program,
                        success:function(html){
                            $('#course').html(html);
                            $('#tutor').html('<option value=""></option>');
                            $('#date').html('<option value=""></option>');
                            $('#time').html('<option value=""></option>');
                            $('#price').html('<option value=""></option>');
                        }                  
                    });
                }
                
            }

            function getTutors(){
                let program = document.getElementById('program').value;
                let course = document.getElementById('course').value;
                if(course){
                    $.ajax({
                        type: 'GET',
                        url: './inc/bookAppointment/getTutors.php',
                        data: 'course='+course+'&program='+program,
                        success:function(data){
                            $('#tutor').html(data);
                            $('#date').html('<option value=""></option>');
                            $('#time').html('<option value=""></option>');
                            $('#price').html('<option value=""></option>');
                        },                  
                    });
                }
            }

            function getDate(){
                let program = document.getElementById('program').value;
                let course = document.getElementById('course').value;
                let tutor = document.getElementById('tutor').value;
                if(tutor){
                    $.ajax({
                        type: 'GET',
                        url: './inc/bookAppointment/getDate.php',
                        data: 'tutor='+tutor+'&course='+course+'&program='+program,
                        success:function(data){
                            $('#date').html(data);
                        },                  
                    });
                }
            }

            function getTime(){
                let program = document.getElementById('program').value;
                let course = document.getElementById('course').value;
                let tutor = document.getElementById('tutor').value;
                let date = document.getElementById('date').value;
                // let new_date = new Date(date);
                // alert(new_date);

                if(date){
                    $.ajax({
                        type: 'GET',
                        url: './inc/bookAppointment/getTime.php',
                        data: 'date='+date+'&tutor='+tutor+'&course='+course+'&program='+program,
                        success:function(data){
                            $('#time').html(data);
                        },                  
                    });
                }
            }

            function getPrice(){
                let program = document.getElementById('program').value;
                let course = document.getElementById('course').value;
                let tutor = document.getElementById('tutor').value;
                let date = document.getElementById('date').value;
                let time = document.getElementById('time').value;
                if(time){
                    $.ajax({
                        type: 'GET',
                        url: './inc/bookAppointment/getPrice.php',
                        data: 'time='+time+'&date='+date+'&tutor='+tutor+'&course='+course+'&program='+program,
                        success:function(data){
                            $('#price').html(data);
                        },                  
                    });
                }
            }


    </script>
</head>


<body>
    <div class="bookAppointment">
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="./inc/bookAppointment.php" class="sign-in-form" method="post">
                        <div class="heading">
                            <h2>Book Appointment</h2>
                        </div>
                        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']; ?>">
                        <div class="actual-form">
                            <div>
                                <!--Program Name-->
                                <div class="input-wrap">
                                    <select name="program" class="input-field" id="program" onblur="validateProgram()" onchange="getCourse()">
                                        <option value="" disabled selected ></option>
                                        <?php 
                                            foreach ($programs as $program) {
                                        ?>
                                            <option value="<?php echo $program['id']; ?>"><?php echo $program['name']; ?> </option>
                                            <?php 
                                                }
                                            ?>  
                                    </select>
                                    <label>Program</label>
                                    <div class="error" id="program_error"></div>
                                </div>

                                <!--Course Name-->
                                <div class="input-wrap">
                                    <select name="course" class="input-field " id="course" onblur="validateCourse()"  onchange="getTutors()">
                                        <option value="" ></option>
                                    </select>
                                    <label>Courses</label>
                                    <div class="error" id="course_error"></div>
                                </div>

                                 <!--Tutor-->
                                 <div class="input-wrap">
                                    <select name="tutor" class="input-field " id="tutor" onblur="validateCourse()" onchange="getDate()">
                                        <option value="" ></option>
                                    </select>
                                    <label>Tutor</label>
                                    <div class="error" id="tutor_error"></div>
                                </div>

                                <!--Date-->
                                <div class="input-wrap">
                                    <select name="date" class="input-field " id="date" onblur="validateDate()" onchange="getTime()">
                                        <option value="" ></option>
                                    </select>
                                    <label>Date</label>
                                    <div class="error" id="date_error"></div>
                                </div>

                                <!--Time-->
                                <div class="input-wrap">
                                    <select name="time" class="input-field " id="time" onblur="validateTime()" onchange="getPrice()">
                                        <option value="" ></option>
                                    </select>
                                    <label>Time</label>
                                    <div class="error" id="time_error"></div>
                                </div>

                                <!--Price-->
                                <div class="input-wrap">
                                    <select name="price" class="input-field " id="price" onblur="validatePrice()">
                                        <option value="" ></option>
                                    </select>
                                    <label>Price (Php/hr)</label>
                                    <div class="error" id="price_error"></div>
                                </div>





                            </div>
                        </div>

                        <!--alert messages-->
                        <?php
                            if (isset($_GET['errorBook'])){?>
                                <p class = "alert alert-danger" ><i class='bi bi-exclamation-circle-fill'></i> <?php echo $_GET['errorBook']; ?></p>    
                            <?php }?>
                        <?php
                            if (isset($_GET['successBook'])){?>
                                <p class = "alert alert-success" ><i class="bi bi-check-circle-fill"></i> <?php echo $_GET['successBook']; ?></p>    
                            <?php }?>

                        <!--Submit button-->
                        <input type="submit" name="bookAppointment" value="Book now" class="sign-btn">
                    </form>
                </div>
            </div>
        </div>
        </div>

    </main>


    <script src="js/appointment.js"></script>
   
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    

</body>

</html>