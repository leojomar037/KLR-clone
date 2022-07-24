<form action="./registration.php" method="post" autocomplete="off" class="sign-up-form">
    <!--KLR Tutorials-->
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
                      

    <div class="actual-form">
        <div>
            <!--First Name-->
            <div class="input-wrap">   
                <?php if(isset($_GET['first_name'])) {?>
                    <input 
                        type="text" 
                        id="first_name" 
                        name="first_name" 
                        class="input-field" 
                        autocomplete="off" 
                        value = "<?php echo $_GET['first_name'];?>"
                        onblur="validateFirstName()" />
                <?php }else{?>
                    <input 
                        type="text" 
                        id="first_name" 
                        name="first_name" 
                        class="input-field" 
                        autocomplete="off" 
                        onblur="validateFirstName()"/>
                <?php }?>
                <label>First Name</label>
                <div class="error" id="first_name_error"></div>
            </div>

            <!--Last Name-->
            <div class="input-wrap">
                <?php if(isset($_GET['last_name'])) {?>
                    <input 
                        type="text" 
                        id="last_name" 
                        name="last_name" 
                        class="input-field" 
                        autocomplete="off" 
                        value = "<?php echo $_GET['last_name'];?>"
                        onblur="validateLastName()" />
                <?php }else{?>
                    <input 
                        type="text" 
                        id="last_name" 
                        name="last_name" 
                        class="input-field" 
                        autocomplete="off" 
                        onblur="validateLastName()" />
                <?php }?>
                <label>Last Name</label>
                <div class="error" id="last_name_error"></div>
            </div>
                                
            <!--Email-->
            <div class="input-wrap">
                <?php if(isset($_GET['regemail'])) {?>
                    <input 
                        type="email" 
                        id="regemail" 
                        name="regemail" 
                        class="input-field" 
                        autocomplete="off" 
                        value = "<?php echo $_GET['regemail'];?>"
                        onblur="validateRegEmail()" />
                <?php }else{?>
                    <input 
                        type="email" 
                        id="regemail" 
                        name="regemail" 
                        class="input-field" 
                        autocomplete="off" 
                        onblur="validateRegEmail()" />
                <?php }?>
                <label>Email</label>
                <div class="error" id="regemail_error"></div>
            </div>
            
            <!--Password-->
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

            <!--Confirm password-->
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
                <!--Role-->
                <select name="role" class="input-field" id="role" onblur="validateRole()">
                    <?php if(isset($_GET['role'])) {?>
                        <option value="" ></option>
                        <option value="2" <?php echo ($_GET['role'] == "2") ? "selected" : null;?>>Student</option>
                        <option value="3" <?php echo ($_GET['role'] == "3") ? "selected" : null;?>>Tutor</option>       
                    <?php }else{?>
                        <option value="" ></option>
                        <option value="2">Tutor</option>
                        <option value="3">Student</option>
                    <?php }?>
                </select>
                <label>Role</label>
                <div class="error" id="role_error"></div>
            </div>
        </div>
                      
        <!--Submit-->
        <input type="submit" value="Sign Up" class="sign-btn" name="create" id="create">

    </div>

 </form>