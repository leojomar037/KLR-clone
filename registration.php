<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/registration.css?v=<?php echo time(); ?>">
    </head>
    <body>
        
        <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden gradient-custom richae">

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 justify-content-center align-items-center mb-5">
            
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

            <div class="card card-container bg-glass">
                <div class="card-body px-4 py-5 px-md-5">
                    <form action="./inc/create.php" method="post" class="d-grid" >
                    <!-- <form action="./inc/create.php" method="post" class="d-grid" > -->
                    <!-- <form action="./inc/create.php" method="post" class="d-grid" > -->
                        
                        <div class="form-outline mb-3">
                            <h2>Registration</h2>
                            <!--error message-->
                            <?php
                                if (isset($_GET['error'])){?>
                                    <p class = "error alert alert-danger" ><i class='bi bi-exclamation-circle-fill'></i> <?php echo $_GET['error']; ?></p>    
                            <?php }?>
                            <?php
                                if (isset($_GET['success'])){?>
                                    <p class = "success alert alert-success" ><i class="bi bi-check-circle-fill"></i> <?php echo $_GET['success']; ?></p>    
                            <?php }?>

                            <!--First Name-->
                            <label class="form-label" for="first_name">First name<span class="text-danger">*</span></label>
                            <?php if(isset($_GET['first_name'])) {?>
                            <input 
                                type="text" 
                                id="first_name" 
                                name="first_name" 
                                class="form-control input-form w-80" 
                                autocomplete="off" 
                                value = "<?php echo $_GET['first_name'];?>"
                                onblur="validateFirstName()" />
                            <span class="text-danger" id="first_name_error"></span>
                            <?php }else{?>
                                <input 
                                type="text" 
                                id="first_name" 
                                name="first_name" 
                                class="form-control input-form w-80" 
                                autocomplete="off" 
                                onblur="validateFirstName()" />
                            <span class="text-danger" id="first_name_error"></span>
                            <?php }?>
                        </div>

                        <!--Last Name-->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="last_name">Last name<span class="text-danger">*</span></label>
                            <?php if(isset($_GET['last_name'])) {?>
                                <input 
                                type="text" 
                                name="last_name" 
                                id="last_name" 
                                class="form-control input-form" 
                                autocomplete="off" 
                                value = "<?php echo $_GET['last_name'];?>"
                                onblur="validateLastName()" />
                            <span class="text-danger" id="last_name_error"></span>
                            <?php }else{?>
                            <input 
                                type="text" 
                                name="last_name" 
                                id="last_name" 
                                class="form-control input-form" 
                                autocomplete="off" 
                                onblur="validateLastName()" />
                            <span class="text-danger" id="last_name_error"></span>
                            <?php }?>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address<span class="text-danger">*</span></label>
                            <?php if (isset($_GET['email'])) { ?>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                class="form-control input-form" 
                                autocomplete="off" 
                                value = "<?php echo $_GET['email']; ?>"
                                onblur="validateEmail()" />
                            <span class="text-danger my-0 py-0" id="email_error"></span>
                            <?php }else{?>
                                <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                class="form-control input-form" 
                                autocomplete="off" 
                                onblur="validateEmail()" />
                            <span class="text-danger my-0 py-0" id="email_error"></span>
                            <?php }?>
                            
                            
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password<span class="text-danger">*</span></span></label>
                            <input 
                                type="password" 
                                name="password" 
                                id="password" 
                                oninput="validatePasswordLength()" 
                                onblur="validatePassword()" 
                                class="form-control input-form" 
                                placeholder="4-8 characters"/>
                            <span class="text-danger my-0 py-0" id="password_error"></span>
                        </div>

                        <!-- Confirm Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="confirm_password">Confirm Password<span class="text-danger">*</span></label>
                            <input 
                                type="password" 
                                name="confirm_password" 
                                id="confirm_password" 
                                class="form-control input-form" 
                                onblur="validateconfirmPassword()" 
                                oninput="matchPassword()"/>
                            <span class="text-danger my-0 py-0" id="confirm_password_error"></span>
                        </div>

                        <!--Gender-->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="gender">Gender upon Birth<span class="text-danger">*</span></label><br>
                            <select name="gender" class="form-select w-100 input-form" id="gender" onblur="validateGender()">
                                <option value="">-- select one --</option>
                                <option value="4">Male</option>
                                <option value="5">Female</option>
                                <!-- <option value="6">Others</option> -->
                            </select>
                            <span class="text-danger my-0 py-0" id="gender_error"></span>
                        </div>

                        <!--Role-->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="role">Role<span class="text-danger">*</span></label><br>
                            <select name="role" class="form-select w-100 input-form" id="role" onblur="validateRole()">
                                <option value="">-- select one --</option>
                                <option value="2">Student</option>
                                <option value="3">Tutor</option>
                            </select>
                            <span class="text-danger my-0 py-0" id="role_error"></span>
                        </div>


                        <!--Birthdate-->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="birthdate">Birthdate<span class="text-danger">*</span></label>
                            <input 
                                type="date" 
                                name="birthdate" 
                                id="birthdate" 
                                onblur="validateBirthdate()" 
                                onchange="_setAge()" 
                                class="form-control input-form" 
                                id="birthdate" />
                            <span class="text-danger my-0 py-0" id="birthdate_error"></span>
                        </div>

                        <!--18 yrs-->
                        <!--Adult name-->
                        <div class="adult_info" id="adult_info" hidden>
                            <div class="form-outline mb-4">
                                <p>For 18 years old and below, please fill in the following details:</p>
                                <label class="form-label" for="adult_name">Parent/Guardian's name<span class="text-danger">*</span></label>
                                <input 
                                    type="text" 
                                    name="adult_name" 
                                    id="adult_name"
                                    class="form-control input-form"
                                    onblur="validateAdultName()"
                                    autocomplete="off" />
                                <span class="text-danger my-0 py-0" id="adult_name_error"></span>
                            </div>

                            <!--Contact Number-->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="adult_number">Contact number:<span class="text-danger">*</span></label>
                                <input 
                                    type="text" 
                                    name="adult_number" 
                                    id = "adult_number"
                                    class="form-control input-form" 
                                    onblur="validateAdultNumber()"
                                    autocomplete="off" />
                                <span class="text-danger my-0 py-0" id="adult_number_error"></span>
                            </div>

                            <!--Email-->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="adult_email">Email:<span class="text-danger">*</span></label>
                                <input 
                                    type="text" 
                                    name="adult_email" 
                                    id = "adult_email"
                                    class="form-control input-form" 
                                    onblur="validateAdultEmail()"
                                    autocomplete="off" />
                                <span class="text-danger my-0 py-0" id="adult_email_error"></span>
                            </div>

                            <!--Relation-->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="relation">Relation<span class="text-danger">*</span></label><br>
                                <select name="relation" class="form-select w-100 input-form" id="relation" onblur="validateRelation()">
                                    <option value="">-- select one --</option>
                                    <option value="Parent">Parent</option>
                                    <option value="Guardian">Guardian</option>
                                </select>
                                <span class="text-danger my-0 py-0" id="relation_error"></span>
                            </div>
                        </div>


                        <!-- Submit button -->
                        <div class="d-flex justify-content-center mt-4">
                            <!-- <button type="submit" class="btn btn-signup  w-50" onclick="_setAge()">
                                Sign up
                            </button> -->
                            <input type="submit" name="create" value="Sign Up" class="btn btn-signup w-50"  >
                            <!-- <input type="submit" onclick="validateEntries()" value="Sign Up" class="btn btn-signup w-50"  > -->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<script src="./js/users.js"></script>
        
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>