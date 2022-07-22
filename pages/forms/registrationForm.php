<form action="./registration.php" method="post" autocomplete="off" class="sign-up-form">
                        <a class="link-to-logo" href="/">
                            <div class="logo">
                                <img src="Images/sign-in.jpg" alt="">
                                <h4>KLR Tutorials</h4>
                            </div>
                        </a>
                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account ?</h6>
                            <a class="toggle">Sign in</a>
                        </div>
                        <?php
                                if (isset($_GET['errorReg'])){?>
                                    <p class = "error alert alert-danger" ><i class='bi bi-exclamation-circle-fill'></i> <?php echo $_GET['errorReg']; ?></p>    
                            <?php }?>
                            <?php
                                if (isset($_GET['successReg'])){?>
                                    <p class = "success alert alert-success" ><i class="bi bi-check-circle-fill"></i> <?php echo $_GET['successReg']; ?></p>    
                            <?php }?>

                            <div class="actual-form">
                            <div>
                                <!--First Name-->
                                <div class="input-wrap">   
                                        <input 
                                            type="text" 
                                            id="first_name" 
                                            name="first_name" 
                                            class="input-field" 
                                            autocomplete="off" 
                                            onblur="validateFirstName()" />

                                    <label>First Name</label>
                                    <div class="error" id="first_name_error"></div>
                                </div>

                                <!--Last Name-->
                                <div class="input-wrap">
                                        <input 
                                            type="text" 
                                            id="last_name" 
                                            name="last_name" 
                                            class="input-field" 
                                            autocomplete="off" 
                                            onblur="validateLastName()" />
                                    <label>Last Name</label>
                                    <div class="error" id="last_name_error"></div>
                                    
                                </div>
                                
                                <!--Email-->
                                <div class="input-wrap">
                                            <input 
                                                type="email" 
                                                id="regemail" 
                                                name="regemail" 
                                                class="input-field" 
                                                autocomplete="off" 
                                                onblur="validateRegEmail()" />
                                        <label>Email</label>
                                        <div class="error" id="regemail_error"></div>
                                </div>
                                <div class="input-wrap">
                                    <input 
                                        type="password" 
                                        id="regpassword" 
                                        name="regpassword" 
                                        class="input-field" 
                                        autocomplete="off" 
                                        onblur="validateRegPassword()"
                                        oninput="validateRegPasswordLength()" />
                                    <label>Password</label>
                                    <div class="error" id="regpassword_error"></div>
                                </div>
                                <div class="input-wrap">
                                <input 
                                        type="password" 
                                        id="regconfirm_password" 
                                        name="regconfirm_password" 
                                        class="input-field" 
                                        autocomplete="off" 
                                        onblur="validateRegConfirmPassword()" 
                                        oninput="matchPassword()"/>
                                    <label>Confirm Password</label>
                                    <div class="error" id="regconfirm_password_error"></div>
                                </div>
                            </div>

                            <div>

                                <!--Role-->
                                <div class="input-wrap">

                                    <select name="role" class="input-field" id="role" onblur="validateRole()">
                                        <option value="" ></option>
                                        <option value="2">Student</option>
                                        <option value="3">Tutor</option>
                                    </select>
                                    <label>Role</label>
                                    <div class="error" id="role_error"></div>
                                </div>

                              
                        </div>

                            <input type="submit" value="Sign Up" class="sign-btn" name="create" id="create">
                            <!-- <p class="text">
                                By signing up, I agree to the <a href="#">Terms of service</a> and <a href="#">Privacy policy</a>
                            </p> -->
                        </div>

                    </form>