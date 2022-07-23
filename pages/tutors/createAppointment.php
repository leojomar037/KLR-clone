
    <div class="bookAppointment">
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="./inc/createAppointment.php" class="sign-in-form" method="post" autocomplete="off">
                        <div class="heading">
                            <h2>Create Appointment</h2>
                        </div>

                        <div class="actual-form">
                            <div>

                                <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']; ?>">
                                <!--Program Name-->
                                <div class="input-wrap">
                                    <select name="program" class="input-field" id="program" onblur="validateProgram()">
                                        <option value="" ></option>
                                        <option value="12">Elementary</option>
                                        <option value="13">Junior High School</option>    
                                        <option value="14">Senior High School</option>
                                        <option value="15">College</option>
                                    </select>
                                    <label>Program</label>
                                    <div class="error" id="program_error"></div>
                                </div>

                                <!--Select Course from Database-->
                                <div class="input-wrap">
                                    <select name="course" class="input-field" id="course" onblur="validateCourse()" onchange="showCourseOthers()">
                                        <option value="" ></option>
                                        <?php 
                                            foreach ($courses as $course) {
                                        ?>
                                            <option value="<?php echo $course['id']; ?>"><?php echo $course['name']; ?> </option>
                                            <?php 
                                                }
                                            ?>
                                        <option value="others">Others</option>
                                    </select>
                                    <label>Courses</label>
                                    <div class="error" id="course_error"></div>
                                </div>

                                <!--Add another course Name-->
                                <div class="input-wrap" id="course_others_div" hidden>
                                    <input 
                                        type="text" 
                                        id="course_others" 
                                        name="course_others" 
                                        class="input-field" 
                                        autocomplete="off" 
                                        />
                                    <label>If others, please specify</label>
                                    <div class="error" id="course_others_error"></div>
                                </div>

                                <!--Temporary-->
                                <div class="input-wrap">
                                    <input 
                                        type="number" 
                                        id="tutor_id" 
                                        name="tutor_id" 
                                        class="input-field" 
                                        autocomplete="off" 
                                        onblur=""
                                        />
                                    <label>Tutor ID</label>
                                    <div class="error" id="tutor_id_error"></div>
                                </div>


                                <!--Date-->
                                <div class="input-wrap date">
                                    <input 
                                        type="date" 
                                        id="date" 
                                        name="date" 
                                        class="input-field" 
                                        autocomplete="off" 
                                        onblur="validateDate()"/>
                                    <label>Date</label>
                                    <div class="error" id="date_error"></div>
                                </div>

                                <!--Time-->
                                <div class="input-wrap time">
                                    <input 
                                        type="time" 
                                        id="time" 
                                        name="time" 
                                        class="input-field" 
                                        autocomplete="off" 
                                        onblur="validateTime()" 
                                            />
                                    <label>Time</label>
                                    <div class="error" id="time_error"></div>
                                </div>

                                <!--Price-->
                                <div class="input-wrap">
                                    <input 
                                        type="number" 
                                        id="price"
                                        min = 0 
                                        name="price" 
                                        class="input-field" 
                                        autocomplete="off" 
                                        onblur="validatePrice()" 
                                        />
                                    <label>Price (Php)/Hour</label>
                                    <div class="error" id="price_error"></div>
                                </div>

                                                
                            </div>
                        </div>
                        
                        <!--alert messages-->
                        <?php
                            if (isset($_GET['errorCreate'])){?>
                                <p class = "alert alert-danger" ><i class='bi bi-exclamation-circle-fill'></i> <?php echo $_GET['errorCreate']; ?></p>    
                            <?php }?>
                        <?php
                            if (isset($_GET['successCreate'])){?>
                                <p class = "alert alert-success" ><i class="bi bi-check-circle-fill"></i> <?php echo $_GET['successCreate']; ?></p>    
                            <?php }?>

                        <!--submit button-->
                        <input type="submit" value="Create Appointment" class="sign-btn" name="createAppointment" id="createAppointment">
                    </form>
                    <!--end of form-->

                </div>
            </div>
        </div>    
    </div> 
