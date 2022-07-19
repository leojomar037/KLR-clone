<form action="" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="Images/sign-in.jpg" alt="">
                            <h4>KLR Tutorials</h4>
                        </div>
                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account ?</h6>
                            <a class="toggle">Sign in</a>
                        </div>

                        <div class="actual-form">
                            <div>
                                <div class="input-wrap">
                                    <input type="text" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>First Name</label>
                                </div>
                                <div class="input-wrap">
                                    <input type="text" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>Last Name</label>
                                </div>
                                <div class="input-wrap">
                                    <input type="password" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>Password</label>
                                </div>
                                <div class="input-wrap">
                                    <input type="password" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>Confirm Password</label>
                                </div>
                            </div>

                            <div>
                                <div class="input-wrap">
                                    <input type="text" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>Email</label>
                                </div>
                                <div class="input-wrap">

                                    <select name="gender" class="input-field" id="gender">
                                        <option value="" ></option>
                                        <option value="4">Male</option>
                                        <option value="5">Female</option>
                                       
                                    </select>
                                    <label>Gender Upon Birth</label>
                                </div>
                                <div class="input-wrap">

                                    <select name="role" class="input-field" id="role" onblur="validateRole()">
                                        <option value="" ></option>
                                        <option value="2">Student</option>
                                        <option value="3">Tutor</option>
                                    </select>
                                    <label>Role</label>
                                </div>
                                <div class="input-wrap bday">
                                    <input type="date" name="birthdate" id="birthdate" minlength="4" class="input-field" autocomplete="off" required>
                                    <label>Birthday</label>

                                </div>
                            </div>


                            <input type="submit" value="Sign In" class="sign-btn" name="" id="">
                            <!-- <p class="text">
                                By signing up, I agree to the <a href="#">Terms of service</a> and <a href="#">Privacy policy</a>
                            </p> -->
                        </div>

                    </form>