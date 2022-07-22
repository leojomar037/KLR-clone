<?php 
    require('./inc/edit.php');
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
    <div class="editProfile dash-content">
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
                                        onblur="validateLastName()"
                                        value="<?php echo $row['last_name'] ?>" />
                                    <label>Last Name<span class="text-danger">*</span></label>
                                    <div class="error" id="last_name_error"></div>
                                </div>

                                <!--Gender-->
                                <div class="input-wrap">
                                    <select name="gender" class="input-field" id="gender">
                                        <option value="" ></option>
                                        <option value="4"<?php echo ($row['gender'] == "4") ? "selected" : null; ?>>Male</option>
                                        <option value="5"<?php echo ($row['gender'] == "5") ? "selected" : null; ?>>Female</option>     
                                    </select>
                                    <label>Gender Upon Birth</label>

                                </div>

                                <div class="input-wrap">
                                    <!--https://gist.github.com/didats/8154290-->
                                    <select name="nationality" class="input-field" id="nationality">
                                    <option value=""></option>
                                    <option value="afghan"<?php echo ($row['nationality'] == "afghan") ? "selected" : null; ?> >Afghan</option>
                                    <option value="albanian" <?php echo ($row['nationality'] == "albanian") ? "selected" : null; ?>>Albanian</option>
                                    <option value="algerian" <?php echo ($row['nationality'] == "algerian") ? "selected" : null; ?>>Algerian</option>
                                    <option value="american" <?php echo ($row['nationality'] == "american") ? "selected" : null; ?>>American</option>
                                    <option value="andorran" <?php echo ($row['nationality'] == "andorran") ? "selected" : null; ?>>Andorran</option>
                                    <option value="angolan" <?php echo ($row['nationality'] == "angolan") ? "selected" : null; ?>>Angolan</option>
                                    <option value="antiguans" <?php echo ($row['nationality'] == "antiguans") ? "selected" : null; ?>>Antiguans</option>
                                    <option value="argentinean" <?php echo ($row['nationality'] == "antiguans") ? "selected" : null; ?>>Argentinean</option>
                                    <option value="armenian" <?php echo ($row['nationality'] == "armenian") ? "selected" : null; ?>>Armenian</option>
                                    <option value="australian" <?php echo ($row['nationality'] == "australian") ? "selected" : null; ?>>Australian</option>
                                    <option value="austrian" <?php echo ($row['nationality'] == "austrian") ? "selected" : null; ?>>Austrian</option>
                                    <option value="azerbaijani" <?php echo ($row['nationality'] == "azerbaijani") ? "selected" : null; ?>>Azerbaijani</option>
                                    <option value="bahamian" <?php echo ($row['nationality'] == "bahamian") ? "selected" : null; ?>>Bahamian</option>
                                    <option value="bahraini"  <?php echo ($row['nationality'] == "bahraini") ? "selected" : null; ?>>Bahraini</option>
                                    <option value="bangladeshi"  <?php echo ($row['nationality'] == "bangladeshi") ? "selected" : null; ?>>Bangladeshi</option>
                                    <option value="barbadian"  <?php echo ($row['nationality'] == "barbadian") ? "selected" : null; ?>>Barbadian</option>
                                    <option value="barbudans"  <?php echo ($row['nationality'] == "barbudans") ? "selected" : null; ?>>Barbudans</option>
                                    <option value="batswana"  <?php echo ($row['nationality'] == "batswana") ? "selected" : null; ?>>Batswana</option>
                                    <option value="belarusian"  <?php echo ($row['nationality'] == "belarusian") ? "selected" : null; ?>>Belarusian</option>
                                    <option value="belgian"  <?php echo ($row['nationality'] == "belgian") ? "selected" : null; ?>>Belgian</option>
                                    <option value="belizean"  <?php echo ($row['nationality'] == "belizean") ? "selected" : null; ?>>Belizean</option>
                                    <option value="beninese"  <?php echo ($row['nationality'] == "beninese") ? "selected" : null; ?>>Beninese</option>
                                    <option value="bhutanese"  <?php echo ($row['nationality'] == "bhutanese") ? "selected" : null; ?>>Bhutanese</option>
                                    <option value="bolivian"  <?php echo ($row['nationality'] == "bolivian") ? "selected" : null; ?>>Bolivian</option>
                                    <option value="bosnian"  <?php echo ($row['nationality'] == "bosnian") ? "selected" : null; ?>>Bosnian</option>
                                    <option value="brazilian"  <?php echo ($row['nationality'] == "brazilian") ? "selected" : null; ?>>Brazilian</option>
                                    <option value="british"  <?php echo ($row['nationality'] == "british") ? "selected" : null; ?>>British</option>
                                    <option value="bruneian"  <?php echo ($row['nationality'] == "bruneian") ? "selected" : null; ?>>Bruneian</option>
                                    <option value="bulgarian"  <?php echo ($row['nationality'] == "bulgarian") ? "selected" : null; ?>>Bulgarian</option>
                                    <option value="burkinabe"  <?php echo ($row['nationality'] == "burkinabe") ? "selected" : null; ?>>Burkinabe</option>
                                    <option value="burmese"  <?php echo ($row['nationality'] == "burmese") ? "selected" : null; ?>>Burmese</option>
                                    <option value="burundian"  <?php echo ($row['nationality'] == "burundian") ? "selected" : null; ?>>Burundian</option>
                                    <option value="cambodian"  <?php echo ($row['nationality'] == "cambodian") ? "selected" : null; ?>>Cambodian</option>
                                    <option value="cameroonian"  <?php echo ($row['nationality'] == "cameroonian") ? "selected" : null; ?>>Cameroonian</option>
                                    <option value="canadian"  <?php echo ($row['nationality'] == "canadian") ? "selected" : null; ?>>Canadian</option>
                                    <option value="cape verdean"  <?php echo ($row['nationality'] == "cape verdean") ? "selected" : null; ?>>Cape Verdean</option>
                                    <option value="central african"  <?php echo ($row['nationality'] == "central african") ? "selected" : null; ?>>Central African</option>
                                    <option value="chadian"  <?php echo ($row['nationality'] == "chadian") ? "selected" : null; ?>>Chadian</option>
                                    <option value="chilean"  <?php echo ($row['nationality'] == "chilean") ? "selected" : null; ?>>Chilean</option>
                                    <option value="chinese"  <?php echo ($row['nationality'] == "chinese") ? "selected" : null; ?>>Chinese</option>
                                    <option value="colombian" <?php echo ($row['nationality'] == "colombian") ? "selected" : null; ?>>Chinese</option>>Colombian</option>
                                    <option value="comoran"  <?php echo ($row['nationality'] == "comoran") ? "selected" : null; ?>>Comoran</option>
                                    <option value="congolese"  <?php echo ($row['nationality'] == "congolese") ? "selected" : null; ?>>Congolese</option>
                                    <option value="costa rican"  <?php echo ($row['nationality'] == "costa rican") ? "selected" : null; ?>>Costa Rican</option>
                                    <option value="croatian"  <?php echo ($row['nationality'] == "croatian") ? "selected" : null; ?>>Croatian</option>
                                    <option value="cuban"  <?php echo ($row['nationality'] == "cuban") ? "selected" : null; ?>>Cuban</option>
                                    <option value="cypriot"  <?php echo ($row['nationality'] == "cypriot") ? "selected" : null; ?>>Cypriot</option>
                                    <option value="czech"  <?php echo ($row['nationality'] == "czech") ? "selected" : null; ?>>Czech</option>
                                    <option value="danish"  <?php echo ($row['nationality'] == "danish") ? "selected" : null; ?>>Danish</option>
                                    <option value="djibouti"  <?php echo ($row['nationality'] == "djibouti") ? "selected" : null; ?>>Djibouti</option>
                                    <option value="dominican"  <?php echo ($row['nationality'] == "dominican") ? "selected" : null; ?>>Dominican</option>
                                    <option value="dutch"  <?php echo ($row['nationality'] == "dutch") ? "selected" : null; ?>>Dutch</option>
                                    <option value="east timorese"  <?php echo ($row['nationality'] == "east timorese") ? "selected" : null; ?>>East Timorese</option>
                                    <option value="ecuadorean"  <?php echo ($row['nationality'] == "ecuadorean") ? "selected" : null; ?>>Ecuadorean</option>
                                    <option value="egyptian"  <?php echo ($row['nationality'] == "egyptian") ? "selected" : null; ?>>Egyptian</option>
                                    <option value="emirian"  <?php echo ($row['nationality'] == "emirian") ? "selected" : null; ?>>Emirian</option>
                                    <option value="equatorial guinean"  <?php echo ($row['nationality'] == "equatorial guinean") ? "selected" : null; ?>>Equatorial Guinean</option>
                                    <option value="eritrean"  <?php echo ($row['nationality'] == "eritrean") ? "selected" : null; ?>>Eritrean</option>
                                    <option value="estonian"  <?php echo ($row['nationality'] == "estonian") ? "selected" : null; ?>>Estonian</option>
                                    <option value="ethiopian"  <?php echo ($row['nationality'] == "ethiopian") ? "selected" : null; ?>>Ethiopian</option>
                                    <option value="fijian"  <?php echo ($row['nationality'] == "fijian") ? "selected" : null; ?>>Fijian</option>
                                    <option value="filipino"  <?php echo ($row['nationality'] == "filipino") ? "selected" : null; ?>>Filipino</option>
                                    <option value="finnish"  <?php echo ($row['nationality'] == "finnish") ? "selected" : null; ?>>Finnish</option>
                                    <option value="french"  <?php echo ($row['nationality'] == "french") ? "selected" : null; ?>>French</option>
                                    <option value="gabonese"  <?php echo ($row['nationality'] == "gabonese") ? "selected" : null; ?>>Gabonese</option>
                                    <option value="gambian"  <?php echo ($row['nationality'] == "gambian") ? "selected" : null; ?>>Gambian</option>
                                    <option value="georgian"  <?php echo ($row['nationality'] == "georgian") ? "selected" : null; ?>>Georgian</option>
                                    <option value="german"  <?php echo ($row['nationality'] == "german") ? "selected" : null; ?>>German</option>
                                    <option value="ghanaian"  <?php echo ($row['nationality'] == "ghanaian") ? "selected" : null; ?>>Ghanaian</option>
                                    <option value="greek"  <?php echo ($row['nationality'] == "greek") ? "selected" : null; ?>>Greek</option>
                                    <option value="grenadian"  <?php echo ($row['nationality'] == "grenadian") ? "selected" : null; ?>>Grenadian</option>
                                    <option value="guatemalan"  <?php echo ($row['nationality'] == "guatemalan") ? "selected" : null; ?>>Guatemalan</option>
                                    <option value="guinea-bissauan" <?php echo ($row['nationality'] == "guinea-bissauan") ? "selected" : null; ?>>Guinea-Bissauan</option>
                                    <option value="guinean"  <?php echo ($row['nationality'] == "guinean") ? "selected" : null; ?>>Guinean</option>
                                    <option value="guyanese"  <?php echo ($row['nationality'] == "guyanese") ? "selected" : null; ?>>Guyanese</option>
                                    <option value="haitian"  <?php echo ($row['nationality'] == "haitian") ? "selected" : null; ?>>Haitian</option>
                                    <option value="herzegovinian"  <?php echo ($row['nationality'] == "herzegovinian") ? "selected" : null; ?>>Herzegovinian</option>
                                    <option value="honduran"  <?php echo ($row['nationality'] == "honduran") ? "selected" : null; ?>>Honduran</option>
                                    <option value="hungarian"  <?php echo ($row['nationality'] == "hungarian") ? "selected" : null; ?>>Hungarian</option>
                                    <option value="icelander"  <?php echo ($row['nationality'] == "icelander") ? "selected" : null; ?>>Icelander</option>
                                    <option value="indian"  <?php echo ($row['nationality'] == "indian") ? "selected" : null; ?>>Indian</option>
                                    <option value="indonesian"  <?php echo ($row['nationality'] == "indonesian") ? "selected" : null; ?>>Indonesian</option>
                                    <option value="iranian"  <?php echo ($row['nationality'] == "iranian") ? "selected" : null; ?>>Iranian</option>
                                    <option value="iraqi"  <?php echo ($row['nationality'] == "iraqi") ? "selected" : null; ?>>Iraqi</option>
                                    <option value="irish"  <?php echo ($row['nationality'] == "irish") ? "selected" : null; ?>>Irish</option>
                                    <option value="israeli"  <?php echo ($row['nationality'] == "israeli") ? "selected" : null; ?>>Israeli</option>
                                    <option value="italian"  <?php echo ($row['nationality'] == "italian") ? "selected" : null; ?>>Italian</option>
                                    <option value="ivorian"  <?php echo ($row['nationality'] == "ivorian") ? "selected" : null; ?>>Ivorian</option>
                                    <option value="jamaican"  <?php echo ($row['nationality'] == "jamaican") ? "selected" : null; ?>>Jamaican</option>
                                    <option value="japanese"  <?php echo ($row['nationality'] == "japanese") ? "selected" : null; ?>>Japanese</option>
                                    <option value="jordanian"  <?php echo ($row['nationality'] == "jordanian") ? "selected" : null; ?>>Jordanian</option>
                                    <option value="kazakhstani"  <?php echo ($row['nationality'] == "kazakhstani") ? "selected" : null; ?>>Kazakhstani</option>
                                    <option value="kenyan"  <?php echo ($row['nationality'] == "kenyan") ? "selected" : null; ?>>Kenyan</option>
                                    <option value="kittian and nevisian"  <?php echo ($row['nationality'] == "kittian and nevisian") ? "selected" : null; ?>>Kittian and Nevisian</option>
                                    <option value="kuwaiti"  <?php echo ($row['nationality'] == "kuwaiti") ? "selected" : null; ?>>Kuwaiti</option>
                                    <option value="kyrgyz"  <?php echo ($row['nationality'] == "kyrgyz") ? "selected" : null; ?>>Kyrgyz</option>
                                    <option value="laotian"  <?php echo ($row['nationality'] == "laotian") ? "selected" : null; ?>>Laotian</option>
                                    <option value="latvian"  <?php echo ($row['nationality'] == "latvian") ? "selected" : null; ?>>Latvian</option>
                                    <option value="lebanese"  <?php echo ($row['nationality'] == "lebanese") ? "selected" : null; ?>>Lebanese</option>
                                    <option value="liberian"  <?php echo ($row['nationality'] == "liberian") ? "selected" : null; ?>>Liberian</option>
                                    <option value="libyan"  <?php echo ($row['nationality'] == "libyan") ? "selected" : null; ?>>Libyan</option>
                                    <option value="liechtensteiner"  <?php echo ($row['nationality'] == "liechtensteiner") ? "selected" : null; ?>>Liechtensteiner</option>
                                    <option value="lithuanian"  <?php echo ($row['nationality'] == "lithuanian") ? "selected" : null; ?>>Lithuanian</option>
                                    <option value="luxembourger"  <?php echo ($row['nationality'] == "luxembourger") ? "selected" : null; ?>>Luxembourger</option>
                                    <option value="macedonian"  <?php echo ($row['nationality'] == "macedonian") ? "selected" : null; ?>>Macedonian</option>
                                    <option value="malagasy"  <?php echo ($row['nationality'] == "malagasy") ? "selected" : null; ?>>Malagasy</option>
                                    <option value="malawian"  <?php echo ($row['nationality'] == "malawian") ? "selected" : null; ?>>Malawian</option>
                                    <option value="malaysian"  <?php echo ($row['nationality'] == "malaysian") ? "selected" : null; ?>>Malaysian</option>
                                    <option value="maldivan"  <?php echo ($row['nationality'] == "maldivan") ? "selected" : null; ?>>Maldivan</option>
                                    <option value="malian"  <?php echo ($row['nationality'] == "malian") ? "selected" : null; ?>>Malian</option>
                                    <option value="maltese"  <?php echo ($row['nationality'] == "maltese") ? "selected" : null; ?>>Maltese</option>
                                    <option value="marshallese"  <?php echo ($row['nationality'] == "marshallese") ? "selected" : null; ?>>Marshallese</option>
                                    <option value="mauritanian"  <?php echo ($row['nationality'] == "mauritanian") ? "selected" : null; ?>>Mauritanian</option>
                                    <option value="mauritian"  <?php echo ($row['nationality'] == "mauritian") ? "selected" : null; ?>>Mauritian</option>
                                    <option value="mexican"  <?php echo ($row['nationality'] == "mexican") ? "selected" : null; ?>>Mexican</option>
                                    <option value="micronesian"  <?php echo ($row['nationality'] == "micronesian") ? "selected" : null; ?>>Micronesian</option>
                                    <option value="moldovan"  <?php echo ($row['nationality'] == "moldovan") ? "selected" : null; ?>>Moldovan</option>
                                    <option value="monacan"  <?php echo ($row['nationality'] == "monacan") ? "selected" : null; ?>>Monacan</option>
                                    <option value="mongolian"  <?php echo ($row['nationality'] == "mongolian") ? "selected" : null; ?>>Mongolian</option>
                                    <option value="moroccan"  <?php echo ($row['nationality'] == "moroccan") ? "selected" : null; ?>>Moroccan</option>
                                    <option value="mosotho"  <?php echo ($row['nationality'] == "mosotho") ? "selected" : null; ?>>Mosotho</option>
                                    <option value="motswana"  <?php echo ($row['nationality'] == "motswana") ? "selected" : null; ?>>Motswana</option>
                                    <option value="mozambican"  <?php echo ($row['nationality'] == "mozambican") ? "selected" : null; ?>>Mozambican</option>
                                    <option value="namibian"  <?php echo ($row['nationality'] == "namibian") ? "selected" : null; ?>>Namibian</option>
                                    <option value="nauruan"  <?php echo ($row['nationality'] == "nauruan") ? "selected" : null; ?>>Nauruan</option>
                                    <option value="nepalese"  <?php echo ($row['nationality'] == "nepalese") ? "selected" : null; ?>>Nepalese</option>
                                    <option value="new zealander"  <?php echo ($row['nationality'] == "new zealander") ? "selected" : null; ?>>New Zealander</option>
                                    <option value="ni-vanuatu"  <?php echo ($row['nationality'] == "ni-vanuatu") ? "selected" : null; ?>>Ni-Vanuatu</option>
                                    <option value="nicaraguan"  <?php echo ($row['nationality'] == "nicaraguan") ? "selected" : null; ?>>Nicaraguan</option>
                                    <option value="nigerien"  <?php echo ($row['nationality'] == "nigerien") ? "selected" : null; ?>>Nigerien</option>
                                    <option value="north korean"  <?php echo ($row['nationality'] == "north korean") ? "selected" : null; ?>>North Korean</option>
                                    <option value="northern irish"  <?php echo ($row['nationality'] == "northern irish") ? "selected" : null; ?>>Northern Irish</option>
                                    <option value="norwegian"  <?php echo ($row['nationality'] == "norwegian") ? "selected" : null; ?>>Norwegian</option>
                                    <option value="omani"  <?php echo ($row['nationality'] == "omani") ? "selected" : null; ?>>Omani</option>
                                    <option value="pakistani"  <?php echo ($row['nationality'] == "pakistani") ? "selected" : null; ?>>Pakistani</option>
                                    <option value="palauan"  <?php echo ($row['nationality'] == "palauan") ? "selected" : null; ?>>Palauan</option>
                                    <option value="panamanian"  <?php echo ($row['nationality'] == "panamanian") ? "selected" : null; ?>>Panamanian</option>
                                    <option value="papua new guinean"  <?php echo ($row['nationality'] == "papua new guinean") ? "selected" : null; ?>>Papua New Guinean</option>
                                    <option value="paraguayan"  <?php echo ($row['nationality'] == "paraguayan") ? "selected" : null; ?>>Paraguayan</option>
                                    <option value="peruvian"  <?php echo ($row['nationality'] == "peruvian") ? "selected" : null; ?>>Peruvian</option>
                                    <option value="polish"  <?php echo ($row['nationality'] == "polish") ? "selected" : null; ?>>Polish</option>
                                    <option value="portuguese"  <?php echo ($row['nationality'] == "portuguese") ? "selected" : null; ?>>Portuguese</option>
                                    <option value="qatari"  <?php echo ($row['nationality'] == "qatari") ? "selected" : null; ?>>Qatari</option>
                                    <option value="romanian"  <?php echo ($row['nationality'] == "romanian") ? "selected" : null; ?>>Romanian</option>
                                    <option value="russian"  <?php echo ($row['nationality'] == "russian") ? "selected" : null; ?>>Russian</option>
                                    <option value="rwandan"  <?php echo ($row['nationality'] == "rwandan") ? "selected" : null; ?>>Rwandan</option>
                                    <option value="saint lucian"  <?php echo ($row['nationality'] == "saint lucian") ? "selected" : null; ?>>Saint Lucian</option>
                                    <option value="salvadoran"  <?php echo ($row['nationality'] == "salvadoran") ? "selected" : null; ?>>Salvadoran</option>
                                    <option value="samoan"  <?php echo ($row['nationality'] == "samoan") ? "selected" : null; ?>>Samoan</option>
                                    <option value="san marinese"  <?php echo ($row['nationality'] == "san marinese") ? "selected" : null; ?>>San Marinese</option>
                                    <option value="sao tomean"  <?php echo ($row['nationality'] == "sao tomean") ? "selected" : null; ?>>Sao Tomean</option>
                                    <option value="saudi"  <?php echo ($row['nationality'] == "saudi") ? "selected" : null; ?>>Saudi</option>
                                    <option value="scottish"  <?php echo ($row['nationality'] == "scottish") ? "selected" : null; ?>>Scottish</option>
                                    <option value="senegalese"  <?php echo ($row['nationality'] == "senegalese") ? "selected" : null; ?>>Senegalese</option>
                                    <option value="serbian"  <?php echo ($row['nationality'] == "serbian") ? "selected" : null; ?>>Serbian</option>
                                    <option value="seychellois"  <?php echo ($row['nationality'] == "seychellois") ? "selected" : null; ?>>Seychellois</option>
                                    <option value="sierra leonean"  <?php echo ($row['nationality'] == "sierra leonean") ? "selected" : null; ?>>Sierra Leonean</option>
                                    <option value="singaporean"  <?php echo ($row['nationality'] == "singaporean") ? "selected" : null; ?>>Singaporean</option>
                                    <option value="slovakian"  <?php echo ($row['nationality'] == "slovakian") ? "selected" : null; ?>>Slovakian</option>
                                    <option value="slovenian"  <?php echo ($row['nationality'] == "slovenian") ? "selected" : null; ?>>Slovenian</option>
                                    <option value="solomon islander"  <?php echo ($row['nationality'] == "solomon islander") ? "selected" : null; ?>>Solomon Islander</option>
                                    <option value="somali"  <?php echo ($row['nationality'] == "somali") ? "selected" : null; ?>>Somali</option>
                                    <option value="south african"  <?php echo ($row['nationality'] == "south african") ? "selected" : null; ?>>South African</option>
                                    <option value="south korean"  <?php echo ($row['nationality'] == "south korean") ? "selected" : null; ?>>South Korean</option>
                                    <option value="spanish"  <?php echo ($row['nationality'] == "spanish") ? "selected" : null; ?>>Spanish</option>
                                    <option value="sri lankan"  <?php echo ($row['nationality'] == "sri lankan") ? "selected" : null; ?>>Sri Lankan</option>
                                    <option value="sudanese"  <?php echo ($row['nationality'] == "sudanese") ? "selected" : null; ?>>Sudanese</option>
                                    <option value="surinamer"  <?php echo ($row['nationality'] == "surinamer") ? "selected" : null; ?>>Surinamer</option>
                                    <option value="swazi"  <?php echo ($row['nationality'] == "swazi") ? "selected" : null; ?>>Swazi</option>
                                    <option value="swedish"  <?php echo ($row['nationality'] == "swedish") ? "selected" : null; ?>>Swedish</option>
                                    <option value="swiss"  <?php echo ($row['nationality'] == "swiss") ? "selected" : null; ?>>Swiss</option>
                                    <option value="syrian"  <?php echo ($row['nationality'] == "syrian") ? "selected" : null; ?>>Syrian</option>
                                    <option value="taiwanese"  <?php echo ($row['nationality'] == "taiwanese") ? "selected" : null; ?>>Taiwanese</option>
                                    <option value="tajik"  <?php echo ($row['nationality'] == "tajik") ? "selected" : null; ?>>Tajik</option>
                                    <option value="tanzanian"  <?php echo ($row['nationality'] == "tanzanian") ? "selected" : null; ?>>Tanzanian</option>
                                    <option value="thai"  <?php echo ($row['nationality'] == "thai") ? "selected" : null; ?>>Thai</option>
                                    <option value="togolese"  <?php echo ($row['nationality'] == "togolese") ? "selected" : null; ?>>Togolese</option>
                                    <option value="tongan"  <?php echo ($row['nationality'] == "tongan") ? "selected" : null; ?>>Tongan</option>
                                    <option value="trinidadian or tobagonian"  <?php echo ($row['nationality'] == "trinidadian or tobagonian") ? "selected" : null; ?>>Trinidadian or Tobagonian</option>
                                    <option value="tunisian"  <?php echo ($row['nationality'] == "tunisian") ? "selected" : null; ?>>Tunisian</option>
                                    <option value="turkish"  <?php echo ($row['nationality'] == "turkish") ? "selected" : null; ?>>Turkish</option>
                                    <option value="tuvaluan"  <?php echo ($row['nationality'] == "tuvaluan") ? "selected" : null; ?>>Tuvaluan</option>
                                    <option value="ugandan"  <?php echo ($row['nationality'] == "ugandan") ? "selected" : null; ?>>Ugandan</option>
                                    <option value="ukrainian"  <?php echo ($row['nationality'] == "ukrainian") ? "selected" : null; ?>>Ukrainian</option>
                                    <option value="uruguayan"  <?php echo ($row['nationality'] == "uruguayan") ? "selected" : null; ?>>Uruguayan</option>
                                    <option value="uzbekistani"  <?php echo ($row['nationality'] == "uzbekistani") ? "selected" : null; ?>>Uzbekistani</option>
                                    <option value="venezuelan"  <?php echo ($row['nationality'] == "venezuelan") ? "selected" : null; ?>>Venezuelan</option>
                                    <option value="vietnamese"  <?php echo ($row['nationality'] == "vietnamese") ? "selected" : null; ?>>Vietnamese</option>
                                    <option value="welsh"  <?php echo ($row['nationality'] == "welsh") ? "selected" : null; ?>>Welsh</option>
                                    <option value="yemenite"  <?php echo ($row['nationality'] == "yemenite") ? "selected" : null; ?>>Yemenite</option>
                                    <option value="zambian"  <?php echo ($row['nationality'] == "zambian") ? "selected" : null; ?>>Zambian</option>
                                    <option value="zimbabwean"  <?php echo ($row['nationality'] == "zimbabwean") ? "selected" : null; ?>>Zimbabwean</option>
                                </select>
                                    <label class="form-label" for="nationality">Nationality</label>
                                </div>

                                <div class="input-wrap">
                                    <select name="civil_status" class="input-field" id="civil_status">
                                    <option value=""></option>
                                    <option value="7" <?php echo ($row['civil_status'] == "7") ? "selected" : null; ?>>Single</option>
                                    <option value="8" <?php echo ($row['civil_status'] == "8") ? "selected" : null; ?>>Married</option>
                                    <option value="9" <?php echo ($row['civil_status'] == "9") ? "selected" : null; ?>>Widowed</option>
                                    <option value="10" <?php echo ($row['civil_status'] == "10") ? "selected" : null; ?>>Separated</option>
                                    <option value="11" <?php echo ($row['civil_status'] == "11") ? "selected" : null; ?>>Divorced</option>
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
                                        value="<?php echo $row['mobile_number'] ?>"/>
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
                                        value="<?php echo $row['address'] ?>"/>
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
                                        value="<?php echo $row['birthdate'] ?>"/>
                                    <label>Birthday</label>
                                    <div class="error" id="birthdate_error"></div>
                                </div>

                                <!--18 yrs-->
                                <!--Adult name-->
                                <div class="adult_info" id="adult_info" hidden>
                                    <!-- <p class="mt-0">For 18 years old and below, please fill in the following details:</p> -->

                                    <div class="input-wrap">
                                        <input 
                                            type="text" 
                                            name="adult_name" 
                                            id="adult_name" 
                                            class="input-field" 
                                            autocomplete="off" onblur="validateAdultName()"
                                            value="<?php echo $row['adult_name'] ?>"/>
                                        <label class="form-label" for="adult_name">Parent/Guardian's name<span class="text-danger">*</span></label>
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
                                            value="<?php echo $row['adult_number'] ?>" />
                                        <label class="form-label" for="adult_number">Contact number<span class="text-danger">*</span></label>
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
                                            value="<?php echo $row['adult_email'] ?>"/>
                                        <label class="form-label" for="adult_email">Email<span class="text-danger">*</span></label>
                                        <div class="error" id="adult_email_error"></div>
                                    </div>


                                    <div class="input-wrap">
                                        <select name="relation" class="input-field" id="relation" onblur="validateRelation()" autocomplete="off">
                                            <option value=""></option>
                                            <option value="parent" <?php echo ($row['relationship'] == "parent") ? "selected" : null; ?>>Parent</option>
                                            <option value="guardian" <?php echo ($row['relationship'] == "parent") ? "selected" : null; ?>>Guardian</option>
                                        </select>
                                        <label class="form-label" for="relation">Relation<span class="text-danger">*</span></label>
                                        <div class="error" id="relation_error"></div>
                                    </div>
                                </div>

                                
                            </div>
                            <?php
                                if (isset($_GET['errorUpdate'])){?>
                                    <p class = "alert alert-danger" ><i class='bi bi-exclamation-circle-fill'></i> <?php echo $_GET['errorUpdate']; ?></p>    
                            <?php }?>
                            <?php
                                if (isset($_GET['successUpdate'])){?>
                                    <p class = "alert alert-success" ><i class="bi bi-check-circle-fill"></i> <?php echo $_GET['successUpdate']; ?></p>    
                            <?php }?>

                            <input type="submit" name="update" value="Submit" class="sign-btn">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        </div>

    </div>


    <!-- Javascript -->
    <script src="js/edit.js"></script>
    <script src="js/registration.js"></script>
    <script src="js/app.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>






    </script>
</body>

</html>
