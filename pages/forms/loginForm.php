<form action="./login.php" class="sign-in-form" method="post">
                    
                    
                        <div class="logo">
                            <img src="Images/sign-in.jpg" alt="">
                            <h4>KLR Tutorials</h4>
                        </div>
                        <div class="heading">
                            <h2>Welcome back</h2>
                            <h6>Not registered yet?</h6>
                            <a class="toggle">Sign up</a>
                        </div>

                        <!--server side validation display-->
                        <?php
                        if (isset($_GET['error'])){?>
                            <p class = "error alert alert-danger" ><i class='bi bi-exclamation-circle-fill'></i> <?php echo $_GET['error']; ?></p>    
                        <?php }?>
                            <?php
                        if (isset($_GET['success'])){?>
                            <p class = "success alert alert-success" ><i class="bi bi-check-circle-fill"></i> <?php echo $_GET['success']; ?></p>    
                            <?php }?>

                        <div class="actual-form">
                            <div class="input-wrap">   
                                <input type="text" name="logemail" id="logemail"  class="input-field" autocomplete="off" onblur="validateLogEmail()">
                                <label>Email</label>
                                <div class="error" id="logemail_error"></div>
                            </div>
                        
                            <div class="input-wrap">
                                <input type="password"  name="logpassword" id="logpassword"  class="input-field" autocomplete="off" oninput="validateLogPasswordLength()"  onblur="validateLogPassword()" >
                                <label>Password</label>
                                <div class="error" id="logpassword_error"></div>
                            </div>
                            <input type="submit" name="login"   value="Login" class="sign-btn">

                            <p class="text">
                                Forgotten your password or you login details ?
                                <a>Get Help</a> Signing in
                            </p>
                        </div>

                    </form>