<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <!-- <link rel="stylesheet" href="style-2.css"> -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/viewProfile.css">
</head>
<body>
<div class="dash-content">
        <div class="viewProfile">
            <div class="box">
                <div class="inner-box">
                    <div class="forms-wrap">
                        <form class="sign-in-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="heading">
                            <?php foreach ($views as $view){ ?>
                                <h2>View <?php echo $view['email']?></h2>
                            </div>

                            <div class="actual-form">
                                <div>
                                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $view['user_id'] ?>">
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
                                            value="<?php echo $view['first_name'] ?>"
                                            readonly>
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
                                            onblur="validateLastName()"
                                            value="<?php echo $view['last_name'] ?>"
                                            readonly>
                                        <label>Last Name</label>
                                        <div class="error" id="last_name_error"></div>
                                    </div>


                                    <!--Email-->
                                    <!-- <div class="input-wrap">
                                            <input 
                                                type="email" 
                                                id="regemail" 
                                                name="regemail" 
                                                class="input-field" 
                                                autocomplete="off" 
                                                onblur="validateRegEmail()" 
                                                value="<?php echo $view['email'] ?>" 
                                                readonly/>
                                            <label>Email</label>
                                            <div class="error" id="regemail_error"></div>
                                    </div> -->

                                    <!--Gender-->
                                    <div class="input-wrap">
                                        <select name="gender" class="input-field" id="gender" disabled>
                                            <option value="" ></option>
                                            <option value="4"<?php echo ($view['gender'] == "4") ? "selected" : null; ?>>Male</option>
                                            <option value="5"<?php echo ($view['gender'] == "5") ? "selected" : null; ?>>Female</option>     
                                        </select>
                                        <label>Gender Upon Birth</label>

                                    </div>

                                    <div class="input-wrap">
                                        <!--https://gist.github.com/didats/8154290-->
                                        <select name="nationality" class="input-field" id="nationality" disabled>
                                        <option value=""></option>
                                        <option value="afghan"<?php echo ($view['nationality'] == "afghan") ? "selected" : null; ?> >Afghan</option>
                                        <option value="albanian" <?php echo ($view['nationality'] == "albanian") ? "selected" : null; ?>>Albanian</option>
                                        <option value="algerian" <?php echo ($view['nationality'] == "algerian") ? "selected" : null; ?>>Algerian</option>
                                        <option value="american" <?php echo ($view['nationality'] == "american") ? "selected" : null; ?>>American</option>
                                        <option value="andorran" <?php echo ($view['nationality'] == "andorran") ? "selected" : null; ?>>Andorran</option>
                                        <option value="angolan" <?php echo ($view['nationality'] == "angolan") ? "selected" : null; ?>>Angolan</option>
                                        <option value="antiguans" <?php echo ($view['nationality'] == "antiguans") ? "selected" : null; ?>>Antiguans</option>
                                        <option value="argentinean" <?php echo ($view['nationality'] == "antiguans") ? "selected" : null; ?>>Argentinean</option>
                                        <option value="armenian" <?php echo ($view['nationality'] == "armenian") ? "selected" : null; ?>>Armenian</option>
                                        <option value="australian" <?php echo ($view['nationality'] == "australian") ? "selected" : null; ?>>Australian</option>
                                        <option value="austrian" <?php echo ($view['nationality'] == "austrian") ? "selected" : null; ?>>Austrian</option>
                                        <option value="azerbaijani" <?php echo ($view['nationality'] == "azerbaijani") ? "selected" : null; ?>>Azerbaijani</option>
                                        <option value="bahamian" <?php echo ($view['nationality'] == "bahamian") ? "selected" : null; ?>>Bahamian</option>
                                        <option value="bahraini"  <?php echo ($view['nationality'] == "bahraini") ? "selected" : null; ?>>Bahraini</option>
                                        <option value="bangladeshi"  <?php echo ($view['nationality'] == "bangladeshi") ? "selected" : null; ?>>Bangladeshi</option>
                                        <option value="barbadian"  <?php echo ($view['nationality'] == "barbadian") ? "selected" : null; ?>>Barbadian</option>
                                        <option value="barbudans"  <?php echo ($view['nationality'] == "barbudans") ? "selected" : null; ?>>Barbudans</option>
                                        <option value="batswana"  <?php echo ($view['nationality'] == "batswana") ? "selected" : null; ?>>Batswana</option>
                                        <option value="belarusian"  <?php echo ($view['nationality'] == "belarusian") ? "selected" : null; ?>>Belarusian</option>
                                        <option value="belgian"  <?php echo ($view['nationality'] == "belgian") ? "selected" : null; ?>>Belgian</option>
                                        <option value="belizean"  <?php echo ($view['nationality'] == "belizean") ? "selected" : null; ?>>Belizean</option>
                                        <option value="beninese"  <?php echo ($view['nationality'] == "beninese") ? "selected" : null; ?>>Beninese</option>
                                        <option value="bhutanese"  <?php echo ($view['nationality'] == "bhutanese") ? "selected" : null; ?>>Bhutanese</option>
                                        <option value="bolivian"  <?php echo ($view['nationality'] == "bolivian") ? "selected" : null; ?>>Bolivian</option>
                                        <option value="bosnian"  <?php echo ($view['nationality'] == "bosnian") ? "selected" : null; ?>>Bosnian</option>
                                        <option value="brazilian"  <?php echo ($view['nationality'] == "brazilian") ? "selected" : null; ?>>Brazilian</option>
                                        <option value="british"  <?php echo ($view['nationality'] == "british") ? "selected" : null; ?>>British</option>
                                        <option value="bruneian"  <?php echo ($view['nationality'] == "bruneian") ? "selected" : null; ?>>Bruneian</option>
                                        <option value="bulgarian"  <?php echo ($view['nationality'] == "bulgarian") ? "selected" : null; ?>>Bulgarian</option>
                                        <option value="burkinabe"  <?php echo ($view['nationality'] == "burkinabe") ? "selected" : null; ?>>Burkinabe</option>
                                        <option value="burmese"  <?php echo ($view['nationality'] == "burmese") ? "selected" : null; ?>>Burmese</option>
                                        <option value="burundian"  <?php echo ($view['nationality'] == "burundian") ? "selected" : null; ?>>Burundian</option>
                                        <option value="cambodian"  <?php echo ($view['nationality'] == "cambodian") ? "selected" : null; ?>>Cambodian</option>
                                        <option value="cameroonian"  <?php echo ($view['nationality'] == "cameroonian") ? "selected" : null; ?>>Cameroonian</option>
                                        <option value="canadian"  <?php echo ($view['nationality'] == "canadian") ? "selected" : null; ?>>Canadian</option>
                                        <option value="cape verdean"  <?php echo ($view['nationality'] == "cape verdean") ? "selected" : null; ?>>Cape Verdean</option>
                                        <option value="central african"  <?php echo ($view['nationality'] == "central african") ? "selected" : null; ?>>Central African</option>
                                        <option value="chadian"  <?php echo ($view['nationality'] == "chadian") ? "selected" : null; ?>>Chadian</option>
                                        <option value="chilean"  <?php echo ($view['nationality'] == "chilean") ? "selected" : null; ?>>Chilean</option>
                                        <option value="chinese"  <?php echo ($view['nationality'] == "chinese") ? "selected" : null; ?>>Chinese</option>
                                        <option value="colombian" <?php echo ($view['nationality'] == "colombian") ? "selected" : null; ?>>Chinese</option>>Colombian</option>
                                        <option value="comoran"  <?php echo ($view['nationality'] == "comoran") ? "selected" : null; ?>>Comoran</option>
                                        <option value="congolese"  <?php echo ($view['nationality'] == "congolese") ? "selected" : null; ?>>Congolese</option>
                                        <option value="costa rican"  <?php echo ($view['nationality'] == "costa rican") ? "selected" : null; ?>>Costa Rican</option>
                                        <option value="croatian"  <?php echo ($view['nationality'] == "croatian") ? "selected" : null; ?>>Croatian</option>
                                        <option value="cuban"  <?php echo ($view['nationality'] == "cuban") ? "selected" : null; ?>>Cuban</option>
                                        <option value="cypriot"  <?php echo ($view['nationality'] == "cypriot") ? "selected" : null; ?>>Cypriot</option>
                                        <option value="czech"  <?php echo ($view['nationality'] == "czech") ? "selected" : null; ?>>Czech</option>
                                        <option value="danish"  <?php echo ($view['nationality'] == "danish") ? "selected" : null; ?>>Danish</option>
                                        <option value="djibouti"  <?php echo ($view['nationality'] == "djibouti") ? "selected" : null; ?>>Djibouti</option>
                                        <option value="dominican"  <?php echo ($view['nationality'] == "dominican") ? "selected" : null; ?>>Dominican</option>
                                        <option value="dutch"  <?php echo ($view['nationality'] == "dutch") ? "selected" : null; ?>>Dutch</option>
                                        <option value="east timorese"  <?php echo ($view['nationality'] == "east timorese") ? "selected" : null; ?>>East Timorese</option>
                                        <option value="ecuadorean"  <?php echo ($view['nationality'] == "ecuadorean") ? "selected" : null; ?>>Ecuadorean</option>
                                        <option value="egyptian"  <?php echo ($view['nationality'] == "egyptian") ? "selected" : null; ?>>Egyptian</option>
                                        <option value="emirian"  <?php echo ($view['nationality'] == "emirian") ? "selected" : null; ?>>Emirian</option>
                                        <option value="equatorial guinean"  <?php echo ($view['nationality'] == "equatorial guinean") ? "selected" : null; ?>>Equatorial Guinean</option>
                                        <option value="eritrean"  <?php echo ($view['nationality'] == "eritrean") ? "selected" : null; ?>>Eritrean</option>
                                        <option value="estonian"  <?php echo ($view['nationality'] == "estonian") ? "selected" : null; ?>>Estonian</option>
                                        <option value="ethiopian"  <?php echo ($view['nationality'] == "ethiopian") ? "selected" : null; ?>>Ethiopian</option>
                                        <option value="fijian"  <?php echo ($view['nationality'] == "fijian") ? "selected" : null; ?>>Fijian</option>
                                        <option value="filipino"  <?php echo ($view['nationality'] == "filipino") ? "selected" : null; ?>>Filipino</option>
                                        <option value="finnish"  <?php echo ($view['nationality'] == "finnish") ? "selected" : null; ?>>Finnish</option>
                                        <option value="french"  <?php echo ($view['nationality'] == "french") ? "selected" : null; ?>>French</option>
                                        <option value="gabonese"  <?php echo ($view['nationality'] == "gabonese") ? "selected" : null; ?>>Gabonese</option>
                                        <option value="gambian"  <?php echo ($view['nationality'] == "gambian") ? "selected" : null; ?>>Gambian</option>
                                        <option value="georgian"  <?php echo ($view['nationality'] == "georgian") ? "selected" : null; ?>>Georgian</option>
                                        <option value="german"  <?php echo ($view['nationality'] == "german") ? "selected" : null; ?>>German</option>
                                        <option value="ghanaian"  <?php echo ($view['nationality'] == "ghanaian") ? "selected" : null; ?>>Ghanaian</option>
                                        <option value="greek"  <?php echo ($view['nationality'] == "greek") ? "selected" : null; ?>>Greek</option>
                                        <option value="grenadian"  <?php echo ($view['nationality'] == "grenadian") ? "selected" : null; ?>>Grenadian</option>
                                        <option value="guatemalan"  <?php echo ($view['nationality'] == "guatemalan") ? "selected" : null; ?>>Guatemalan</option>
                                        <option value="guinea-bissauan" <?php echo ($view['nationality'] == "guinea-bissauan") ? "selected" : null; ?>>Guinea-Bissauan</option>
                                        <option value="guinean"  <?php echo ($view['nationality'] == "guinean") ? "selected" : null; ?>>Guinean</option>
                                        <option value="guyanese"  <?php echo ($view['nationality'] == "guyanese") ? "selected" : null; ?>>Guyanese</option>
                                        <option value="haitian"  <?php echo ($view['nationality'] == "haitian") ? "selected" : null; ?>>Haitian</option>
                                        <option value="herzegovinian"  <?php echo ($view['nationality'] == "herzegovinian") ? "selected" : null; ?>>Herzegovinian</option>
                                        <option value="honduran"  <?php echo ($view['nationality'] == "honduran") ? "selected" : null; ?>>Honduran</option>
                                        <option value="hungarian"  <?php echo ($view['nationality'] == "hungarian") ? "selected" : null; ?>>Hungarian</option>
                                        <option value="icelander"  <?php echo ($view['nationality'] == "icelander") ? "selected" : null; ?>>Icelander</option>
                                        <option value="indian"  <?php echo ($view['nationality'] == "indian") ? "selected" : null; ?>>Indian</option>
                                        <option value="indonesian"  <?php echo ($view['nationality'] == "indonesian") ? "selected" : null; ?>>Indonesian</option>
                                        <option value="iranian"  <?php echo ($view['nationality'] == "iranian") ? "selected" : null; ?>>Iranian</option>
                                        <option value="iraqi"  <?php echo ($view['nationality'] == "iraqi") ? "selected" : null; ?>>Iraqi</option>
                                        <option value="irish"  <?php echo ($view['nationality'] == "irish") ? "selected" : null; ?>>Irish</option>
                                        <option value="israeli"  <?php echo ($view['nationality'] == "israeli") ? "selected" : null; ?>>Israeli</option>
                                        <option value="italian"  <?php echo ($view['nationality'] == "italian") ? "selected" : null; ?>>Italian</option>
                                        <option value="ivorian"  <?php echo ($view['nationality'] == "ivorian") ? "selected" : null; ?>>Ivorian</option>
                                        <option value="jamaican"  <?php echo ($view['nationality'] == "jamaican") ? "selected" : null; ?>>Jamaican</option>
                                        <option value="japanese"  <?php echo ($view['nationality'] == "japanese") ? "selected" : null; ?>>Japanese</option>
                                        <option value="jordanian"  <?php echo ($view['nationality'] == "jordanian") ? "selected" : null; ?>>Jordanian</option>
                                        <option value="kazakhstani"  <?php echo ($view['nationality'] == "kazakhstani") ? "selected" : null; ?>>Kazakhstani</option>
                                        <option value="kenyan"  <?php echo ($view['nationality'] == "kenyan") ? "selected" : null; ?>>Kenyan</option>
                                        <option value="kittian and nevisian"  <?php echo ($view['nationality'] == "kittian and nevisian") ? "selected" : null; ?>>Kittian and Nevisian</option>
                                        <option value="kuwaiti"  <?php echo ($view['nationality'] == "kuwaiti") ? "selected" : null; ?>>Kuwaiti</option>
                                        <option value="kyrgyz"  <?php echo ($view['nationality'] == "kyrgyz") ? "selected" : null; ?>>Kyrgyz</option>
                                        <option value="laotian"  <?php echo ($view['nationality'] == "laotian") ? "selected" : null; ?>>Laotian</option>
                                        <option value="latvian"  <?php echo ($view['nationality'] == "latvian") ? "selected" : null; ?>>Latvian</option>
                                        <option value="lebanese"  <?php echo ($view['nationality'] == "lebanese") ? "selected" : null; ?>>Lebanese</option>
                                        <option value="liberian"  <?php echo ($view['nationality'] == "liberian") ? "selected" : null; ?>>Liberian</option>
                                        <option value="libyan"  <?php echo ($view['nationality'] == "libyan") ? "selected" : null; ?>>Libyan</option>
                                        <option value="liechtensteiner"  <?php echo ($view['nationality'] == "liechtensteiner") ? "selected" : null; ?>>Liechtensteiner</option>
                                        <option value="lithuanian"  <?php echo ($view['nationality'] == "lithuanian") ? "selected" : null; ?>>Lithuanian</option>
                                        <option value="luxembourger"  <?php echo ($view['nationality'] == "luxembourger") ? "selected" : null; ?>>Luxembourger</option>
                                        <option value="macedonian"  <?php echo ($view['nationality'] == "macedonian") ? "selected" : null; ?>>Macedonian</option>
                                        <option value="malagasy"  <?php echo ($view['nationality'] == "malagasy") ? "selected" : null; ?>>Malagasy</option>
                                        <option value="malawian"  <?php echo ($view['nationality'] == "malawian") ? "selected" : null; ?>>Malawian</option>
                                        <option value="malaysian"  <?php echo ($view['nationality'] == "malaysian") ? "selected" : null; ?>>Malaysian</option>
                                        <option value="maldivan"  <?php echo ($view['nationality'] == "maldivan") ? "selected" : null; ?>>Maldivan</option>
                                        <option value="malian"  <?php echo ($view['nationality'] == "malian") ? "selected" : null; ?>>Malian</option>
                                        <option value="maltese"  <?php echo ($view['nationality'] == "maltese") ? "selected" : null; ?>>Maltese</option>
                                        <option value="marshallese"  <?php echo ($view['nationality'] == "marshallese") ? "selected" : null; ?>>Marshallese</option>
                                        <option value="mauritanian"  <?php echo ($view['nationality'] == "mauritanian") ? "selected" : null; ?>>Mauritanian</option>
                                        <option value="mauritian"  <?php echo ($view['nationality'] == "mauritian") ? "selected" : null; ?>>Mauritian</option>
                                        <option value="mexican"  <?php echo ($view['nationality'] == "mexican") ? "selected" : null; ?>>Mexican</option>
                                        <option value="micronesian"  <?php echo ($view['nationality'] == "micronesian") ? "selected" : null; ?>>Micronesian</option>
                                        <option value="moldovan"  <?php echo ($view['nationality'] == "moldovan") ? "selected" : null; ?>>Moldovan</option>
                                        <option value="monacan"  <?php echo ($view['nationality'] == "monacan") ? "selected" : null; ?>>Monacan</option>
                                        <option value="mongolian"  <?php echo ($view['nationality'] == "mongolian") ? "selected" : null; ?>>Mongolian</option>
                                        <option value="moroccan"  <?php echo ($view['nationality'] == "moroccan") ? "selected" : null; ?>>Moroccan</option>
                                        <option value="mosotho"  <?php echo ($view['nationality'] == "mosotho") ? "selected" : null; ?>>Mosotho</option>
                                        <option value="motswana"  <?php echo ($view['nationality'] == "motswana") ? "selected" : null; ?>>Motswana</option>
                                        <option value="mozambican"  <?php echo ($view['nationality'] == "mozambican") ? "selected" : null; ?>>Mozambican</option>
                                        <option value="namibian"  <?php echo ($view['nationality'] == "namibian") ? "selected" : null; ?>>Namibian</option>
                                        <option value="nauruan"  <?php echo ($view['nationality'] == "nauruan") ? "selected" : null; ?>>Nauruan</option>
                                        <option value="nepalese"  <?php echo ($view['nationality'] == "nepalese") ? "selected" : null; ?>>Nepalese</option>
                                        <option value="new zealander"  <?php echo ($view['nationality'] == "new zealander") ? "selected" : null; ?>>New Zealander</option>
                                        <option value="ni-vanuatu"  <?php echo ($view['nationality'] == "ni-vanuatu") ? "selected" : null; ?>>Ni-Vanuatu</option>
                                        <option value="nicaraguan"  <?php echo ($view['nationality'] == "nicaraguan") ? "selected" : null; ?>>Nicaraguan</option>
                                        <option value="nigerien"  <?php echo ($view['nationality'] == "nigerien") ? "selected" : null; ?>>Nigerien</option>
                                        <option value="north korean"  <?php echo ($view['nationality'] == "north korean") ? "selected" : null; ?>>North Korean</option>
                                        <option value="northern irish"  <?php echo ($view['nationality'] == "northern irish") ? "selected" : null; ?>>Northern Irish</option>
                                        <option value="norwegian"  <?php echo ($view['nationality'] == "norwegian") ? "selected" : null; ?>>Norwegian</option>
                                        <option value="omani"  <?php echo ($view['nationality'] == "omani") ? "selected" : null; ?>>Omani</option>
                                        <option value="pakistani"  <?php echo ($view['nationality'] == "pakistani") ? "selected" : null; ?>>Pakistani</option>
                                        <option value="palauan"  <?php echo ($view['nationality'] == "palauan") ? "selected" : null; ?>>Palauan</option>
                                        <option value="panamanian"  <?php echo ($view['nationality'] == "panamanian") ? "selected" : null; ?>>Panamanian</option>
                                        <option value="papua new guinean"  <?php echo ($view['nationality'] == "papua new guinean") ? "selected" : null; ?>>Papua New Guinean</option>
                                        <option value="paraguayan"  <?php echo ($view['nationality'] == "paraguayan") ? "selected" : null; ?>>Paraguayan</option>
                                        <option value="peruvian"  <?php echo ($view['nationality'] == "peruvian") ? "selected" : null; ?>>Peruvian</option>
                                        <option value="polish"  <?php echo ($view['nationality'] == "polish") ? "selected" : null; ?>>Polish</option>
                                        <option value="portuguese"  <?php echo ($view['nationality'] == "portuguese") ? "selected" : null; ?>>Portuguese</option>
                                        <option value="qatari"  <?php echo ($view['nationality'] == "qatari") ? "selected" : null; ?>>Qatari</option>
                                        <option value="romanian"  <?php echo ($view['nationality'] == "romanian") ? "selected" : null; ?>>Romanian</option>
                                        <option value="russian"  <?php echo ($view['nationality'] == "russian") ? "selected" : null; ?>>Russian</option>
                                        <option value="rwandan"  <?php echo ($view['nationality'] == "rwandan") ? "selected" : null; ?>>Rwandan</option>
                                        <option value="saint lucian"  <?php echo ($view['nationality'] == "saint lucian") ? "selected" : null; ?>>Saint Lucian</option>
                                        <option value="salvadoran"  <?php echo ($view['nationality'] == "salvadoran") ? "selected" : null; ?>>Salvadoran</option>
                                        <option value="samoan"  <?php echo ($view['nationality'] == "samoan") ? "selected" : null; ?>>Samoan</option>
                                        <option value="san marinese"  <?php echo ($view['nationality'] == "san marinese") ? "selected" : null; ?>>San Marinese</option>
                                        <option value="sao tomean"  <?php echo ($view['nationality'] == "sao tomean") ? "selected" : null; ?>>Sao Tomean</option>
                                        <option value="saudi"  <?php echo ($view['nationality'] == "saudi") ? "selected" : null; ?>>Saudi</option>
                                        <option value="scottish"  <?php echo ($view['nationality'] == "scottish") ? "selected" : null; ?>>Scottish</option>
                                        <option value="senegalese"  <?php echo ($view['nationality'] == "senegalese") ? "selected" : null; ?>>Senegalese</option>
                                        <option value="serbian"  <?php echo ($view['nationality'] == "serbian") ? "selected" : null; ?>>Serbian</option>
                                        <option value="seychellois"  <?php echo ($view['nationality'] == "seychellois") ? "selected" : null; ?>>Seychellois</option>
                                        <option value="sierra leonean"  <?php echo ($view['nationality'] == "sierra leonean") ? "selected" : null; ?>>Sierra Leonean</option>
                                        <option value="singaporean"  <?php echo ($view['nationality'] == "singaporean") ? "selected" : null; ?>>Singaporean</option>
                                        <option value="slovakian"  <?php echo ($view['nationality'] == "slovakian") ? "selected" : null; ?>>Slovakian</option>
                                        <option value="slovenian"  <?php echo ($view['nationality'] == "slovenian") ? "selected" : null; ?>>Slovenian</option>
                                        <option value="solomon islander"  <?php echo ($view['nationality'] == "solomon islander") ? "selected" : null; ?>>Solomon Islander</option>
                                        <option value="somali"  <?php echo ($view['nationality'] == "somali") ? "selected" : null; ?>>Somali</option>
                                        <option value="south african"  <?php echo ($view['nationality'] == "south african") ? "selected" : null; ?>>South African</option>
                                        <option value="south korean"  <?php echo ($view['nationality'] == "south korean") ? "selected" : null; ?>>South Korean</option>
                                        <option value="spanish"  <?php echo ($view['nationality'] == "spanish") ? "selected" : null; ?>>Spanish</option>
                                        <option value="sri lankan"  <?php echo ($view['nationality'] == "sri lankan") ? "selected" : null; ?>>Sri Lankan</option>
                                        <option value="sudanese"  <?php echo ($view['nationality'] == "sudanese") ? "selected" : null; ?>>Sudanese</option>
                                        <option value="surinamer"  <?php echo ($view['nationality'] == "surinamer") ? "selected" : null; ?>>Surinamer</option>
                                        <option value="swazi"  <?php echo ($view['nationality'] == "swazi") ? "selected" : null; ?>>Swazi</option>
                                        <option value="swedish"  <?php echo ($view['nationality'] == "swedish") ? "selected" : null; ?>>Swedish</option>
                                        <option value="swiss"  <?php echo ($view['nationality'] == "swiss") ? "selected" : null; ?>>Swiss</option>
                                        <option value="syrian"  <?php echo ($view['nationality'] == "syrian") ? "selected" : null; ?>>Syrian</option>
                                        <option value="taiwanese"  <?php echo ($view['nationality'] == "taiwanese") ? "selected" : null; ?>>Taiwanese</option>
                                        <option value="tajik"  <?php echo ($view['nationality'] == "tajik") ? "selected" : null; ?>>Tajik</option>
                                        <option value="tanzanian"  <?php echo ($view['nationality'] == "tanzanian") ? "selected" : null; ?>>Tanzanian</option>
                                        <option value="thai"  <?php echo ($view['nationality'] == "thai") ? "selected" : null; ?>>Thai</option>
                                        <option value="togolese"  <?php echo ($view['nationality'] == "togolese") ? "selected" : null; ?>>Togolese</option>
                                        <option value="tongan"  <?php echo ($view['nationality'] == "tongan") ? "selected" : null; ?>>Tongan</option>
                                        <option value="trinidadian or tobagonian"  <?php echo ($view['nationality'] == "trinidadian or tobagonian") ? "selected" : null; ?>>Trinidadian or Tobagonian</option>
                                        <option value="tunisian"  <?php echo ($view['nationality'] == "tunisian") ? "selected" : null; ?>>Tunisian</option>
                                        <option value="turkish"  <?php echo ($view['nationality'] == "turkish") ? "selected" : null; ?>>Turkish</option>
                                        <option value="tuvaluan"  <?php echo ($view['nationality'] == "tuvaluan") ? "selected" : null; ?>>Tuvaluan</option>
                                        <option value="ugandan"  <?php echo ($view['nationality'] == "ugandan") ? "selected" : null; ?>>Ugandan</option>
                                        <option value="ukrainian"  <?php echo ($view['nationality'] == "ukrainian") ? "selected" : null; ?>>Ukrainian</option>
                                        <option value="uruguayan"  <?php echo ($view['nationality'] == "uruguayan") ? "selected" : null; ?>>Uruguayan</option>
                                        <option value="uzbekistani"  <?php echo ($view['nationality'] == "uzbekistani") ? "selected" : null; ?>>Uzbekistani</option>
                                        <option value="venezuelan"  <?php echo ($view['nationality'] == "venezuelan") ? "selected" : null; ?>>Venezuelan</option>
                                        <option value="vietnamese"  <?php echo ($view['nationality'] == "vietnamese") ? "selected" : null; ?>>Vietnamese</option>
                                        <option value="welsh"  <?php echo ($view['nationality'] == "welsh") ? "selected" : null; ?>>Welsh</option>
                                        <option value="yemenite"  <?php echo ($view['nationality'] == "yemenite") ? "selected" : null; ?>>Yemenite</option>
                                        <option value="zambian"  <?php echo ($view['nationality'] == "zambian") ? "selected" : null; ?>>Zambian</option>
                                        <option value="zimbabwean"  <?php echo ($view['nationality'] == "zimbabwean") ? "selected" : null; ?>>Zimbabwean</option>
                                    </select>
                                        <label class="form-label" for="nationality">Nationality</label>
                                    </div>

                                    <div class="input-wrap">
                                        <select name="civil_status" class="input-field" id="civil_status" disabled>
                                        <option value=""></option>
                                        <option value="7" <?php echo ($view['civil_status'] == "7") ? "selected" : null; ?>>Single</option>
                                        <option value="8" <?php echo ($view['civil_status'] == "8") ? "selected" : null; ?>>Married</option>
                                        <option value="9" <?php echo ($view['civil_status'] == "9") ? "selected" : null; ?>>Widowed</option>
                                        <option value="10" <?php echo ($view['civil_status'] == "10") ? "selected" : null; ?>>Separated</option>
                                        <option value="11" <?php echo ($view['civil_status'] == "11") ? "selected" : null; ?>>Divorced</option>
                                    </select>
                                        <label class="form-label" for="civil_status">Civil Status</label>
                                    </div>

                                     <!--Mobile Number-->
                                     <div class="input-wrap">
                                        <input 
                                            type="text" 
                                            name="mobile_number" 
                                            id="mobile_number" 
                                            class="input-field" 
                                            autocomplete="off" 
                                            onblur="validateMobileNumber()" 
                                            value="<?php echo $view['mobile_number'] ?>"
                                            readonly/>
                                        <label class="form-label" for="mobile_number">Mobile Number</label>
                                    </div>

                                    
                                </div>
                                <div>

                                   

                                    <!--Complete Address-->
                                    <div class="input-wrap">
                                        <input 
                                            type="text" 
                                            name="address" 
                                            id="address" 
                                            class="input-field" 
                                            autocomplete="off" 
                                            value="<?php echo $view['address'] ?>"
                                            readonly/>
                                        <label class="form-label" for="address">Address</label>
                                    </div>


                                    <!--Birthdate-->
                                    <div class="input-wrap bday">
                                        <input 
                                            type="date" 
                                            name="birthdate" 
                                            id="birthdate"  
                                            class="input-field" 
                                            autocomplete="off" 
                                            onchange="_setAge()"
                                            value="<?php echo $view['birthdate'] ?>"
                                            readonly/>
                                        <label>Birthday</label>
                                        <div class="error" id="birthdate_error"></div>
                                    </div>

                                    <!--18 yrs-->
                                    <!--Adult name-->
                                    <div class="adult_info" id="adult_info">
                                        <!-- <p class="mt-0">For 18 years old and below, please fill in the following details:</p> -->

                                        <div class="input-wrap">
                                            <input 
                                                type="text" 
                                                name="adult_name" 
                                                id="adult_name" 
                                                class="input-field" 
                                                autocomplete="off" onblur="validateAdultName()"
                                                value="<?php echo $view['adult_name'] ?>"
                                                readonly/>
                                            <label class="form-label" for="adult_name">Parent/Guardian's name</label>
                                            <div class="error" id="adult_name_error"></div>
                                        </div>


                                        <div class="input-wrap">
                                            <input 
                                                type="text" 
                                                name="adult_number" 
                                                id="adult_number" 
                                                class="input-field" 
                                                onblur="validateAdultNumber()" 
                                                autocomplete="off"
                                                value="<?php echo $view['adult_number'] ?>" 
                                                readonly/>
                                            <label class="form-label" for="adult_number">Contact number</label>
                                            <div class="error" id="adult_number_error"></div>
                                        </div>


                                        <div class="input-wrap">
                                            <input 
                                                type="text" 
                                                name="adult_email" 
                                                id="adult_email" 
                                                class="input-field" 
                                                onblur="validateAdultEmail()" 
                                                autocomplete="off" 
                                                value="<?php echo $view['adult_email'] ?>"
                                                readonly/>
                                            <label class="form-label" for="adult_email">Parent/Guardian Email</label>
                                            <div class="error" id="adult_email_error"></div>
                                        </div>


                                        <div class="input-wrap">
                                            <select name="relation" class="input-field" id="relation" onblur="validateRelation()" autocomplete="off" disabled>
                                                <option value=""></option>
                                                <option value="parent" <?php echo ($view['relationship'] == "parent") ? "selected" : null; ?>>Parent</option>
                                                <option value="guardian" <?php echo ($view['relationship'] == "guardian") ? "selected" : null; ?>>Guardian</option>
                                            </select>
                                            <label class="form-label" for="relation">Relation</label>
                                            <div class="error" id="relation_error"></div>
                                        </div>
                                    </div>

                                    
                                </div>
                                <?php } ?>



                                <input type="submit" name="closeView" value="Close" class="sign-btn">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
</body>
<!-- Javascript -->
    <script src="js/edit.js"></script>
    <script src="js/registration.js"></script>
    <script src="js/app.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script>
    const inputs = document.querySelectorAll(".input-field");


inputs.forEach((inp) => {



if (inp.value !== ""){
    return  inp.classList.add("active");
}
inp.addEventListener("focus", () => {
    inp.classList.add("active")
});
inp.addEventListener("blur", () => {
    if (inp.value !== "") return;
    inp.classList.remove("active");
});

});


const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");


toggle_btn.forEach((btn) => {
    btn.addEventListener("click", () => {
        main.classList.toggle("sign-up-mode");
    });
});

const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

function moveSlider() {
    let index = this.dataset.value;
    let currentImage = document.querySelector(`.img-${index}`);
    images.forEach(img => img.classList.remove("show"));
    currentImage.classList.add("show");

    const textSlider = document.querySelector(".text-group");
    textSlider.style.transform = `translateY(${-(index-1)*2.2}rem)`;


    bullets.forEach(bull => bull.classList.remove("active"));
    this.classList.add("active");
};



bullets.forEach((bullet) => {
    bullet.addEventListener("click", moveSlider);
});

</script>
</html>
