<?php 
    require('./inc/edit.php') 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- <link rel="stylesheet" href="style-2.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="css/editProfile.css?v=<?php echo time(); ?>">

<body>
    <main class="editProfile">
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="./inc/update.php" class="sign-in-form" method="post" autocomplete="off">
                        <div class="heading">
                            <h2>Edit Profile</h2>
                        </div>

                        <div class="actual-form">
                            <div>

                                <input type="hidden" name="user_id" id="user_id" value="<?php echo $row['user_id'] ?>">
                                <!--First Name-->
                                <div class="input-wrap">
                                    <input 
                                        type="text" 
                                        name="first_name" 
                                        id="first_name" 
                                        class="input-field" 
                                        autocomplete="off" 
                                        onblur="validateFirstName()"
                                        autocomplete="off"
                                        value="<?php echo $row['first_name'] ?>">
                                    <label>First Name<span class="text-danger">*</span></label>
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
                                    <label>Last Name<span class="text-danger">*</span></label>
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
                                        <label>Email<span class="text-danger">*</span></label>
                                        <div class="error" id="regemail_error"></div>
                                </div>

                                <!--Password
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
                                -->
                                <!--Gender-->
                                <div class="input-wrap">
                                    <select name="gender" class="input-field" id="gender">
                                        <option value="" ></option>
                                        <option value="4">Male</option>
                                        <option value="5">Female</option>     
                                    </select>
                                    <label>Gender Upon Birth</label>

                                </div>

                                <div class="input-wrap">
                                    <!--https://gist.github.com/didats/8154290-->
                                    <select name="nationality" class="input-field" id="nationality">
                                    <option value=""></option>
                                    <option value="afghan">Afghan</option>
                                    <option value="albanian">Albanian</option>
                                    <option value="algerian">Algerian</option>
                                    <option value="american">American</option>
                                    <option value="andorran">Andorran</option>
                                    <option value="angolan">Angolan</option>
                                    <option value="antiguans">Antiguans</option>
                                    <option value="argentinean">Argentinean</option>
                                    <option value="armenian">Armenian</option>
                                    <option value="australian">Australian</option>
                                    <option value="austrian">Austrian</option>
                                    <option value="azerbaijani">Azerbaijani</option>
                                    <option value="bahamian">Bahamian</option>
                                    <option value="bahraini">Bahraini</option>
                                    <option value="bangladeshi">Bangladeshi</option>
                                    <option value="barbadian">Barbadian</option>
                                    <option value="barbudans">Barbudans</option>
                                    <option value="batswana">Batswana</option>
                                    <option value="belarusian">Belarusian</option>
                                    <option value="belgian">Belgian</option>
                                    <option value="belizean">Belizean</option>
                                    <option value="beninese">Beninese</option>
                                    <option value="bhutanese">Bhutanese</option>
                                    <option value="bolivian">Bolivian</option>
                                    <option value="bosnian">Bosnian</option>
                                    <option value="brazilian">Brazilian</option>
                                    <option value="british">British</option>
                                    <option value="bruneian">Bruneian</option>
                                    <option value="bulgarian">Bulgarian</option>
                                    <option value="burkinabe">Burkinabe</option>
                                    <option value="burmese">Burmese</option>
                                    <option value="burundian">Burundian</option>
                                    <option value="cambodian">Cambodian</option>
                                    <option value="cameroonian">Cameroonian</option>
                                    <option value="canadian">Canadian</option>
                                    <option value="cape verdean">Cape Verdean</option>
                                    <option value="central african">Central African</option>
                                    <option value="chadian">Chadian</option>
                                    <option value="chilean">Chilean</option>
                                    <option value="chinese">Chinese</option>
                                    <option value="colombian">Colombian</option>
                                    <option value="comoran">Comoran</option>
                                    <option value="congolese">Congolese</option>
                                    <option value="costa rican">Costa Rican</option>
                                    <option value="croatian">Croatian</option>
                                    <option value="cuban">Cuban</option>
                                    <option value="cypriot">Cypriot</option>
                                    <option value="czech">Czech</option>
                                    <option value="danish">Danish</option>
                                    <option value="djibouti">Djibouti</option>
                                    <option value="dominican">Dominican</option>
                                    <option value="dutch">Dutch</option>
                                    <option value="east timorese">East Timorese</option>
                                    <option value="ecuadorean">Ecuadorean</option>
                                    <option value="egyptian">Egyptian</option>
                                    <option value="emirian">Emirian</option>
                                    <option value="equatorial guinean">Equatorial Guinean</option>
                                    <option value="eritrean">Eritrean</option>
                                    <option value="estonian">Estonian</option>
                                    <option value="ethiopian">Ethiopian</option>
                                    <option value="fijian">Fijian</option>
                                    <option value="filipino">Filipino</option>
                                    <option value="finnish">Finnish</option>
                                    <option value="french">French</option>
                                    <option value="gabonese">Gabonese</option>
                                    <option value="gambian">Gambian</option>
                                    <option value="georgian">Georgian</option>
                                    <option value="german">German</option>
                                    <option value="ghanaian">Ghanaian</option>
                                    <option value="greek">Greek</option>
                                    <option value="grenadian">Grenadian</option>
                                    <option value="guatemalan">Guatemalan</option>
                                    <option value="guinea-bissauan">Guinea-Bissauan</option>
                                    <option value="guinean">Guinean</option>
                                    <option value="guyanese">Guyanese</option>
                                    <option value="haitian">Haitian</option>
                                    <option value="herzegovinian">Herzegovinian</option>
                                    <option value="honduran">Honduran</option>
                                    <option value="hungarian">Hungarian</option>
                                    <option value="icelander">Icelander</option>
                                    <option value="indian">Indian</option>
                                    <option value="indonesian">Indonesian</option>
                                    <option value="iranian">Iranian</option>
                                    <option value="iraqi">Iraqi</option>
                                    <option value="irish">Irish</option>
                                    <option value="israeli">Israeli</option>
                                    <option value="italian">Italian</option>
                                    <option value="ivorian">Ivorian</option>
                                    <option value="jamaican">Jamaican</option>
                                    <option value="japanese">Japanese</option>
                                    <option value="jordanian">Jordanian</option>
                                    <option value="kazakhstani">Kazakhstani</option>
                                    <option value="kenyan">Kenyan</option>
                                    <option value="kittian and nevisian">Kittian and Nevisian</option>
                                    <option value="kuwaiti">Kuwaiti</option>
                                    <option value="kyrgyz">Kyrgyz</option>
                                    <option value="laotian">Laotian</option>
                                    <option value="latvian">Latvian</option>
                                    <option value="lebanese">Lebanese</option>
                                    <option value="liberian">Liberian</option>
                                    <option value="libyan">Libyan</option>
                                    <option value="liechtensteiner">Liechtensteiner</option>
                                    <option value="lithuanian">Lithuanian</option>
                                    <option value="luxembourger">Luxembourger</option>
                                    <option value="macedonian">Macedonian</option>
                                    <option value="malagasy">Malagasy</option>
                                    <option value="malawian">Malawian</option>
                                    <option value="malaysian">Malaysian</option>
                                    <option value="maldivan">Maldivan</option>
                                    <option value="malian">Malian</option>
                                    <option value="maltese">Maltese</option>
                                    <option value="marshallese">Marshallese</option>
                                    <option value="mauritanian">Mauritanian</option>
                                    <option value="mauritian">Mauritian</option>
                                    <option value="mexican">Mexican</option>
                                    <option value="micronesian">Micronesian</option>
                                    <option value="moldovan">Moldovan</option>
                                    <option value="monacan">Monacan</option>
                                    <option value="mongolian">Mongolian</option>
                                    <option value="moroccan">Moroccan</option>
                                    <option value="mosotho">Mosotho</option>
                                    <option value="motswana">Motswana</option>
                                    <option value="mozambican">Mozambican</option>
                                    <option value="namibian">Namibian</option>
                                    <option value="nauruan">Nauruan</option>
                                    <option value="nepalese">Nepalese</option>
                                    <option value="new zealander">New Zealander</option>
                                    <option value="ni-vanuatu">Ni-Vanuatu</option>
                                    <option value="nicaraguan">Nicaraguan</option>
                                    <option value="nigerien">Nigerien</option>
                                    <option value="north korean">North Korean</option>
                                    <option value="northern irish">Northern Irish</option>
                                    <option value="norwegian">Norwegian</option>
                                    <option value="omani">Omani</option>
                                    <option value="pakistani">Pakistani</option>
                                    <option value="palauan">Palauan</option>
                                    <option value="panamanian">Panamanian</option>
                                    <option value="papua new guinean">Papua New Guinean</option>
                                    <option value="paraguayan">Paraguayan</option>
                                    <option value="peruvian">Peruvian</option>
                                    <option value="polish">Polish</option>
                                    <option value="portuguese">Portuguese</option>
                                    <option value="qatari">Qatari</option>
                                    <option value="romanian">Romanian</option>
                                    <option value="russian">Russian</option>
                                    <option value="rwandan">Rwandan</option>
                                    <option value="saint lucian">Saint Lucian</option>
                                    <option value="salvadoran">Salvadoran</option>
                                    <option value="samoan">Samoan</option>
                                    <option value="san marinese">San Marinese</option>
                                    <option value="sao tomean">Sao Tomean</option>
                                    <option value="saudi">Saudi</option>
                                    <option value="scottish">Scottish</option>
                                    <option value="senegalese">Senegalese</option>
                                    <option value="serbian">Serbian</option>
                                    <option value="seychellois">Seychellois</option>
                                    <option value="sierra leonean">Sierra Leonean</option>
                                    <option value="singaporean">Singaporean</option>
                                    <option value="slovakian">Slovakian</option>
                                    <option value="slovenian">Slovenian</option>
                                    <option value="solomon islander">Solomon Islander</option>
                                    <option value="somali">Somali</option>
                                    <option value="south african">South African</option>
                                    <option value="south korean">South Korean</option>
                                    <option value="spanish">Spanish</option>
                                    <option value="sri lankan">Sri Lankan</option>
                                    <option value="sudanese">Sudanese</option>
                                    <option value="surinamer">Surinamer</option>
                                    <option value="swazi">Swazi</option>
                                    <option value="swedish">Swedish</option>
                                    <option value="swiss">Swiss</option>
                                    <option value="syrian">Syrian</option>
                                    <option value="taiwanese">Taiwanese</option>
                                    <option value="tajik">Tajik</option>
                                    <option value="tanzanian">Tanzanian</option>
                                    <option value="thai">Thai</option>
                                    <option value="togolese">Togolese</option>
                                    <option value="tongan">Tongan</option>
                                    <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                    <option value="tunisian">Tunisian</option>
                                    <option value="turkish">Turkish</option>
                                    <option value="tuvaluan">Tuvaluan</option>
                                    <option value="ugandan">Ugandan</option>
                                    <option value="ukrainian">Ukrainian</option>
                                    <option value="uruguayan">Uruguayan</option>
                                    <option value="uzbekistani">Uzbekistani</option>
                                    <option value="venezuelan">Venezuelan</option>
                                    <option value="vietnamese">Vietnamese</option>
                                    <option value="welsh">Welsh</option>
                                    <option value="yemenite">Yemenite</option>
                                    <option value="zambian">Zambian</option>
                                    <option value="zimbabwean">Zimbabwean</option>
                                </select>
                                    <label class="form-label" for="nationality">Nationality</label>
                                </div>

                                <div class="input-wrap">
                                    <select name="civil_status" class="input-field" id="civil_status">
                                    <option value=""></option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="widowed">Widowed</option>
                                    <option value="separated">Separated</option>
                                    <option value="divorced">Divorced</option>
                                </select>
                                    <label class="form-label" for="civil_status">Civil Status</label>
                                </div>

                                
                            </div>
                            <div>

                                <!--Mobile Number-->
                                <div class="input-wrap">
                                    <input type="text" name="mobile_number" id="mobile_number" class="input-field" autocomplete="off" onblur="validateMobileNumber()" />
                                    <label class="form-label" for="mobile_number">Mobile Number</label>
                                </div>

                                <!--Complete Address-->
                                <div class="input-wrap">
                                    <input type="text" name="address" id="address" class="input-field" autocomplete="off" value="<?php echo $row['address'] ?>"/>
                                    <label class="form-label" for="address">Address</label>
                                </div>


                                <!--Birthdate-->
                                <div class="input-wrap bday">
                                    <input type="date" name="birthdate" id="birthdate"  class="input-field" autocomplete="off" onchange="_setAge()">
                                    <label>Birthday</label>
                                    <div class="error" id="birthdate_error"></div>
                                </div>

                                <!--18 yrs-->
                                <!--Adult name-->
                                <div class="adult_info" id="adult_info" hidden>
                                    <!-- <p class="mt-0">For 18 years old and below, please fill in the following details:</p> -->

                                    <div class="input-wrap">
                                        <input type="text" name="adult_name" id="adult_name" class="input-field" autocomplete="off" onblur="validateAdultName()" />
                                        <label class="form-label" for="adult_name">Parent/Guardian's name<span class="text-danger">*</span></label>
                                        <div class="error" id="adult_name_error"></div>
                                    </div>


                                    <div class="input-wrap">
                                        <input type="text" name="adult_number" id="adult_number" class="input-field" onblur="validateAdultNumber()" autocomplete="off" />
                                        <label class="form-label" for="adult_number">Contact number<span class="text-danger">*</span></label>
                                        <div class="error" id="adult_number_error"></div>
                                    </div>


                                    <div class="input-wrap">
                                        <input type="text" name="adult_email" id="adult_email" class="input-field" onblur="validateAdultEmail()" autocomplete="off" />
                                        <label class="form-label" for="adult_email">Email<span class="text-danger">*</span></label>
                                        <div class="error" id="adult_email_error"></div>
                                    </div>


                                    <div class="input-wrap">
                                        <select name="relation" class="input-field" id="relation" onblur="validateRelation()" autocomplete="off">
                                            <option value=""></option>
                                            <option value="Parent">Parent</option>
                                            <option value="Guardian">Guardian</option>
                                        </select>
                                        <label class="form-label" for="relation">Relation<span class="text-danger">*</span></label>
                                        <div class="error" id="relation_error"></div>
                                    </div>
                                </div>

                                
                            </div>

                            <input type="submit" name="update" value="Submit" class="sign-btn">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        </div>

    </main>


    <!-- Javascript -->
    <script src="js/edit.js"></script>
    <script src="js/registration.js"></script>
    <script src="js/app.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        let minAge = 18;
        let x = document.getElementById("adult_info");
         //https://stackoverflow.com/questions/21085398/calculate-age-from-date-html-element
 
        function _calcAge() {
            let date = new Date(document.getElementById("birthdate").value);
            let today = new Date();

            let timeDiff = Math.abs(today.getTime() - date.getTime());
            let age1 = Math.ceil(timeDiff / (1000 * 3600 * 24)) / 365;
                return age1;
        }
        function _setAge() {
            //https://www.dofactory.com/html/div/hidden
            let age = _calcAge();
            if (age < minAge) {
                x.removeAttribute("hidden");
            } else
                x.setAttribute("hidden","hidden");
        }







    </script>
</body>

</html>