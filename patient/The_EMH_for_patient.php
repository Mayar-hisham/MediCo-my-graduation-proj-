<?php
include "../shared/conn.php";


if (isset($_SESSION["patient"])) {



    $select = "SELECT * FROM `medical_profile` WHERE patient_id = '" . $_SESSION['pid'] . "' ";
    $selectQuery = mysqli_query($connect, $select);

    if ($selectQuery) {
        $alter = "UPDATE `patient` SET has_emh = 'yess' WHERE pid = '" . $_SESSION['pid'] . "' ";
        $alt = mysqli_query($connect, $alter);
    }


    $num = mysqli_num_rows($selectQuery);
    $row = mysqli_fetch_assoc($selectQuery);

    if ($num > 0) {
        $_SESSION['patient_medical_profile_id'] = $row['m_id'];
    }

    if ($selectQuery) {

        $numberOfRows = mysqli_num_rows($selectQuery);

        $row = mysqli_fetch_assoc($selectQuery);

        $date = date('Y-m-d');

        if (isset($_POST['persh'])) {
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            $caff = $_POST['caff'];
            $smoke = $_POST['smoke'];
            $medicine = $_POST['medicine'];
            $chrds = $_POST['chrds'];
            $alc = $_POST['alc'];
            $cd = $_POST['cd'];
            $cpd = $_POST['cpd'];
            $allergies = $_POST['allergies'];

            $insert = "INSERT INTO `personal_hostory` VALUES (NULL , '" . $_SESSION['patient_medical_profile_id'] . "' , 
$height , $weight , '$caff' , '$smoke' , '$medicine' , '$chrds' , '$alc' , '$cd' , '$cpd' , '$allergies' ,
'" . $_SESSION['first_name'] . "' , '$date' )";
            $ins = mysqli_query($connect, $insert);
        }


        if (isset($_POST['family'])) {
            $br = $_POST['br'];
            $disease = $_POST['disease'];
            $br2 = $_POST['br2'];
            $disease2 = $_POST['disease2'];
            $addinfo = $_POST['addinfo'];

            $insert = "INSERT INTO `family_history` VALUES(NULL , '" . $_SESSION['patient_medical_profile_id'] . "' ,
    '$br' , '$disease' , '$br2' , '$disease2' , '$addinfo' , '" . $_SESSION['pid'] . "' , '$date')";
            $ins = mysqli_query($connect, $insert);
        }

        if (isset($_POST['past'])) {
            $pastillness = $_POST['pastillness'];
            $pastmedicine = $_POST['pastmedicine'];
            $pastallergies = $_POST['pastallergies'];
            $pasthabits = $_POST['pasthabits'];

            $insert = "INSERT INTO `past_history` VALUES(NULL , '" . $_SESSION['patient_medical_profile_id'] . "' ,
    '$pastillness' , '$pastmedicine' , '$pastallergies' , '$pasthabits' , '" . $_SESSION['pid'] . "' , '$date')";
            $ins = mysqli_query($connect, $insert);
        }

        if (isset($_POST['surgical'])) {

            $dp1 = $_POST['dp1'];
            $st1 = $_POST['st1'];
            $surgeon1 = $_POST['surgeon1'];
            $mp1 = $_POST['mp1'];
            $rbt = $_POST['rbt'];

            $dp2 = $_POST['dp2'];
            $st2 = $_POST['st2'];
            $surgeon2 = $_POST['surgeon2'];
            $mp2 = $_POST['mp2'];
            $rbt2 = $_POST['rbt2'];

            $dp3 = $_POST['dp3'];
            $st3 = $_POST['st3'];
            $surgeon3 = $_POST['surgeon3'];
            $mp3 = $_POST['mp3'];
            $rbt3 = $_POST['rbt3'];

            $dp4 = $_POST['dp4'];
            $st4 = $_POST['st4'];
            $surgeon4 = $_POST['surgeon4'];
            $mp4 = $_POST['mp4'];
            $rbt4 = $_POST['rbt4'];




            $insert = "INSERT INTO `surgical_history` VALUES(NULL , '" . $_SESSION['patient_medical_profile_id'] . "' ,
    '$dp1', '$st1' , '$surgeon1' , '$mp1' , '$rbt' , 
    '$dp2', '$st2' , '$surgeon2' , '$mp2' , '$rbt2' 
    ,'$dp3', '$st3' , '$surgeon3' , '$mp3' , '$rbt3'
    ,'$dp4', '$st4' , '$surgeon4' , '$mp4' , '$rbt4'
    , '" . $_SESSION['pid'] . "' , '$date')";
            $ins = mysqli_query($connect, $insert);
        }


        if (isset($_POST['clinical'])) {

            $name = $_FILES['upload']['name'];
            $ltype = $_FILES['upload']['type'];
            $ltmp = $_FILES['upload']['tmp_name'];
            $llocation = "../upload/";
            move_uploaded_file($ltmp, $llocation . $name);

            $insert = "INSERT INTO `clinical_history` VALUES(NULL , '" . $_SESSION['patient_medical_profile_id'] . "' ,
       '$name'  , '" . $_SESSION['pid'] . "' , '$date')";
            $ins = mysqli_query($connect, $insert);
        }



        $sql = "SELECT * FROM `patient`
JOIN `medical_profile` ON 
 patient.pid = medical_profile.patient_id
 JOIN `personal_hostory` ON 
 medical_profile.m_id = personal_hostory.medical_profile_id 
 JOIN `past_history` ON
medical_profile.m_id = past_history.medical_profile_id
JOIN `family_history` ON
medical_profile.m_id = family_history.medical_profile_id
JOIN `clinical_history` ON
medical_profile.m_id = clinical_history.medical_profile_id 
JOIN `surgical_history` ON
medical_profile.m_id = surgical_history.medical_profile_id 

/*JOIN `doctor_diagnosis` ON
medical_profile.id = doctor_diagnosis.medical_profile_id */

WHERE patient.pid = '" . $_SESSION['pid'] . "' ";
        $result = mysqli_query($connect, $sql);

        $numberOfRows = mysqli_num_rows($result);

        $r = mysqli_fetch_assoc($result);

        if ($r) {
            $alter = "UPDATE `patient` SET has_emh = 'yes' WHERE pid = '" . $_SESSION['pid'] . "' ";
            $alt = mysqli_query($connect, $alter);

            header("location: /MediCoNew/patient/patient_profile_for_patient.php");
        }

?>





        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href="../CSS/style.css">
            <link rel="stylesheet" href="../CSS/footer.css">
            <link rel="stylesheet" href="../CSS/The_EMH_for_patient.css">
            <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">

            <title>Medico</title>
        </head>

        <body>
            <nav>
                <div class="logo">
                    <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
                </div>
                <ul class="nav-links">
                    <li><a href="./patient_home.php">Home</a></li>
                    <li><a href="../shared/FAQs.php">FAQs</a></li>
                    <li><a href="../shared/login.php?bye='1'">Logout</a></li>
                </ul>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>

            <div class="header">
                <div class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <h2>Name: <?php echo $_SESSION['first_name'];  ?></h2>
                <h2>Date of birth: <?php echo $_SESSION['date_of_birth'];  ?></h2>
                <h2>Blood Group: <?php echo $_SESSION['blood_type'];  ?></h2>

            </div>
            <div class="cont1">
                <div class="navbar">
                    <a href="../shared/doctors.php">Doctors</a>
                    <a href="../shared/order_medicine.php">Order Medicine</a>
                    <a href="./order_tracking.php">Track your Orders</a>
                    <a href="../shared/payment.html">Payment</a>

                </div>

                <br><br><br><br>

                <div class="content">
                    <h1 style="color: blue; text-align: left;">The Electronic Medical History</h1>
                    <div class="accordion accordion-flush" id="accordionFlushExample">


                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#personal-history" aria-expanded="false" aria-controls="personal-history">




                                    <h1 style="font-size: 25px;"> Personal History</h1>
                                </button>
                            </h2>
                            <div id="personal-history" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <?php $select = "SELECT * FROM `patient` JOIN `medical_profile` 
                    ON patient.pid = medical_profile.patient_id JOIN `personal_hostory`
                    ON medical_profile.m_id = personal_hostory.medical_profile_id  WHERE patient.pid = '" . $_SESSION['pid'] . "'";
                                    $s = mysqli_query($connect, $select);
                                    $num = mysqli_num_rows($s);
                                    $row = mysqli_fetch_assoc($s);
                                    if ($row) {
                                        echo "You already filled in your personal history, 
                    please continue filling in the rest of data to be able to edit and view";
                                    } else { ?>
                                        <form method="post" class="personal-history">

                                            <label for="height">Enter your height:</label>
                                            <input type="number" id="height" name="height" min="0" placeholder="Enter your height...">

                                            <label for="weight">Enter your weight:</label>
                                            <input type="number" id="weight" name="weight" min="0" placeholder="Enter your weight...">

                                            <label for="choose">Do you Drink Caffeine?</label>
                                            <label class="choose" for="option1">Yes</label>
                                            <input type="radio" id="option1" name="caff" value="Yes">
                                            <label class="choose" for="option2">No</label>
                                            <input type="radio" id="option2" name="caff" value="No">

                                            <label for="choose1">Do you smoke?</label>
                                            <label class="choose1" for="option1">Yes</label>
                                            <input type="radio" id="option1" name="smoke" value="Yes">
                                            <label class="choose1" for="option2">No</label>
                                            <input type="radio" id="option2" name="smoke" value="No">

                                            <label for="medicine">Enter your current medicine:</label>
                                            <input type="text" id="medicine" name="medicine" placeholder="Enter your current medicine...">

                                            <label for="chronic disease">Enter your chronic disease:</label>
                                            <input type="text" id="chronic disease" name="chrds" placeholder="Enter your chronic disease...">

                                            <label for="choose2">Do you drink alcohol?</label>
                                            <label class="choose2" for="option1">Yes</label>
                                            <input type="radio" value="yes" id="option1" name="alc">
                                            <label class="choose2" for="option2">No</label>
                                            <input type="radio" value="no" id="option2" name="alc">

                                            <label for="cigarettes per day">Enter How many cigarettes per day:</label>
                                            <input type="number" id="cigarettes per day" name="cd" min="0">
                                            <label for="pack of cigarettes per day">Enter How many pack of cigarettes per
                                                day:</label>
                                            <input type="number" id="pack of cigarettes per day" name="cpd" min="0">
                                            <label for="Allergies">Enter your Allergies:</label>
                                            <input type="text" id="Allergies" name="allergies" placeholder="Enter your Allergies...">

                                            <br>
                                            <button name="persh" type="submit" id="save-button">Save</button>
                                        </form>
                                    <?php
                                    }  ?>
                                </div>
                            </div>

                        </div>





                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#family-history" aria-expanded="false" aria-controls="family-history">
                                    <h1 style="font-size: 25px;"> Family History </h1>
                                </button>
                            </h2>
                            <div id="family-history" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">


                                    <?php $select = "SELECT * FROM `patient` JOIN `medical_profile` 
                    ON patient.pid = medical_profile.patient_id JOIN `family_history`
                    ON medical_profile.m_id = family_history.medical_profile_id  WHERE patient.pid = '" . $_SESSION['pid'] . "'";
                                    $s = mysqli_query($connect, $select);
                                    $num = mysqli_num_rows($s);
                                    $row = mysqli_fetch_assoc($s);
                                    if ($row) {
                                        echo "You already filled in your family history, 
                    please continue filling in the rest of data to be able to edit and view";
                                    } else { ?>

                                        <form class="family-history" method="POST">

                                            <label for="Blood Relatives">Blood Relatives 1</label>
                                            <input type="text" id="Blood Relatives" name="br" placeholder="Enter your Blood Relatives...">

                                            <label for="Diseases">Enter your Blood Relatives diseases 1</label>
                                            <input type="text" id="Diseases" name="disease" placeholder="Enter your Blood Relatives diseases...">

                                            <label for="Blood Relatives">Blood Relatives 2</label>
                                            <input type="text" id="Blood Relatives" name="br2" placeholder="Enter your Blood Relatives...">

                                            <label for="Diseases">Enter your Blood Relatives diseases 2</label>
                                            <input type="text" id="Diseases" name="disease2" placeholder="Enter your Blood Relatives diseases...">

                                            <label for="Additional Infomation:">Additional Infomation:</label>
                                            <input type="text" id="Additional Infomation" name="addinfo" placeholder="Enter Additional Infomation...">


                                            <br>
                                            <button name="family" type="submit" id="save-button">Save</button>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>






                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#past-history" aria-expanded="false" aria-controls="past-history">
                                    <h1 style="font-size: 25px;"> Past History </h1>
                                </button>
                            </h2>
                            <div id="past-history" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">


                                    <?php $select = "SELECT * FROM `patient` JOIN `medical_profile` 
                    ON patient.pid = medical_profile.patient_id JOIN `past_history`
                    ON medical_profile.m_id = past_history.medical_profile_id  WHERE patient.pid = '" . $_SESSION['pid'] . "'";
                                    $s = mysqli_query($connect, $select);
                                    $num = mysqli_num_rows($s);
                                    $row = mysqli_fetch_assoc($s);
                                    if ($row) {
                                        echo "You already filled in your past history, 
                    please continue filling in the rest of data to be able to edit and view";
                                    } else { ?>

                                        <form class="past-history" method="POST">

                                            <label for="past illness">past illness:</label>
                                            <input type="text" id="past illness" name="pastillness" placeholder="Enter your past illness...">

                                            <label for="past medicine">Enter your past medicine:</label>
                                            <input type="text" id="past medicine" name="pastmedicine" placeholder="Enter your past medicine...">

                                            <label for="past allergies">past allergies:</label>
                                            <input type="text" id="past allergies" name="pastallergies" placeholder="Enter your past allergies...">

                                            <label for="past habits">Enter your past habits:</label>
                                            <input type="text" id="past habits" name="pasthabits" placeholder="Enter your past habits...">

                                            <br>
                                            <button name="past" type="submit" id="save-button">Save</button>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>






                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#surgical-history1" aria-expanded="false" aria-controls="surgical-history1">
                                    <h1 style="font-size: 25px;"> Surgical History </h1>
                                </button>
                            </h2>
                            <div id="surgical-history1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <?php $select = "SELECT * FROM `patient` JOIN `medical_profile` 
                    ON patient.pid = medical_profile.patient_id JOIN `surgical_history`
                    ON medical_profile.m_id = surgical_history.medical_profile_id  WHERE patient.pid = '" . $_SESSION['pid'] . "'";
                                    $s = mysqli_query($connect, $select);
                                    $num = mysqli_num_rows($s);
                                    $row = mysqli_fetch_assoc($s);
                                    if ($row) {
                                        echo "You already filled in your surgical history, 
                    please continue filling in the rest of data to be able to edit and view";
                                    } else { ?>

                                        <form class="surgical-history" method="POST">

                                            <label for="Date of procedure">Date of procedure 1</label>
                                            <input type="date" id="Date of procedure" name="dp1" placeholder="Enter your Date of procedure...">

                                            <label for="surgery type">surgery type 1</label>
                                            <input type="text" id="surgery type" name="st1" placeholder="Enter your surgery type...">

                                            <label for="Surgeon">Surgeon 1</label>
                                            <input type="text" id="Surgeon" name="surgeon1" placeholder="Enter your Surgeon...">
                                            <label for="Medication prescribed">Medication prescribed 1</label>

                                            <input type="text" id="Medication prescribed" name="mp1" placeholder="Enter your Medication prescribed...">

                                            <label for="Rehabilitation">Rehabilitation 1</label>
                                            <input type="text" id="Rehabilitation" name="rbt" placeholder="Enter your Rehabilitation...">



                                            <label for="Date of procedure">Date of procedure 2</label>
                                            <input type="date" id="Date of procedure" name="dp2" placeholder="Enter your Date of procedure...">

                                            <label for="surgery type">surgery type 2</label>
                                            <input type="text" id="surgery type" name="st2" placeholder="Enter your surgery type...">

                                            <label for="Surgeon">Surgeon 2</label>
                                            <input type="text" id="Surgeon" name="surgeon2" placeholder="Enter your Surgeon...">

                                            <label for="Medication prescribed">Medication prescribed 2</label>
                                            <input type="text" id="Medication prescribed" name="mp2" placeholder="Enter your Medication prescribed...">
                                            <label for="Rehabilitation">Rehabilitation 2</label>



                                            <input type="text" id="Rehabilitation" name="rbt2" placeholder="Enter your Rehabilitation...">
                                            <label for="Date of procedure">Date of procedure 3</label>

                                            <input type="date" id="Date of procedure" name="dp3" placeholder="Enter your Date of procedure...">
                                            <label for="surgery type">surgery type 3</label>

                                            <input type="text" id="surgery type" name="st3" placeholder="Enter your surgery type...">
                                            <label for="Surgeon">Surgeon 3</label>

                                            <input type="text" id="Surgeon" name="surgeon3" placeholder="Enter your Surgeon...">
                                            <label for="Medication prescribed">Medication prescribed 3</label>

                                            <input type="text" id="Medication prescribed" name="mp3" placeholder="Enter your Medication prescribed...">
                                            <label for="Rehabilitation">Rehabilitation 3</label>

                                            <input type="text" id="Rehabilitation" name="rbt3" placeholder="Enter your Rehabilitation...">
                                            <label for="Date of procedure">Date of procedure 4</label>

                                            <input type="date" id="Date of procedure" name="dp4" placeholder="Enter your Date of procedure...">
                                            <label for="surgery type">surgery type 4</label>

                                            <input type="text" id="surgery type" name="st4" placeholder="Enter your surgery type...">
                                            <label for="Surgeon">Surgeon 4</label>

                                            <input type="text" id="Surgeon" name="surgeon4" placeholder="Enter your Surgeon...">
                                            <label for="Medication prescribed">Medication prescribed 4</label>

                                            <input type="text" id="Medication prescribed" name="mp4" placeholder="Enter your Medication prescribed...">
                                            <label for="Rehabilitation">Rehabilitation 4</label>

                                            <input type="text" id="Rehabilitation" name="rbt4" placeholder="Enter your Rehabilitation...">

                                            <br>
                                            <button name="surgical" type="submit" id="save-button">Save</button>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>



                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#surgical-history2" aria-expanded="false" aria-controls="surgical-history2">
                                    <h1 style="font-size: 25px;"> clinical history </h1>
                                </button>
                            </h2>
                            <div id="surgical-history2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">


                                    <?php $select = "SELECT * FROM `patient` JOIN `medical_profile` 
                    ON patient.pid = medical_profile.patient_id JOIN `clinical_history`
                    ON medical_profile.m_id = clinical_history.medical_profile_id  WHERE patient.pid = '" . $_SESSION['pid'] . "'";
                                    $s = mysqli_query($connect, $select);
                                    $num = mysqli_num_rows($s);
                                    $row = mysqli_fetch_assoc($s);
                                    if ($row) {
                                        echo "You already filled in your clinical history, 
                    please continue filling in the rest of data to be able to edit and view";
                                    } else { ?>

                                        <form class="clinical-history" method="POST" enctype="multipart/form-data">

                                            <label for="Upload files">Upload files</label>
                                            <input type="file" id="Upload files" name="upload" placeholder="Upload files">


                                            <br>
                                            <button name="clinical" type="submit" id="save-button">Save</button>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <script src="JS/script.js"></script>
            <footer>
                <div class="sticky-footer">
                    <div class="footer-content">
                        <p style="color:white">Follow Us On</p>
                        <ul class="social-icons">
                            <li><a href="#"><img src="../images/facebook-logo.png" alt="Facebook Icon"></a></li>
                            <li><a href="#"><img src="../images/instagram-logo.png" alt="Instagram Icon"></a></li>
                            <li><a href="#"><img src="../images/twitter-logo.png" alt="Twitter Icon"></a></li>
                        </ul>
                    </div>
                    <div class="footer-info">
                        <h6>Copyright &copy Medico-2023</h6>
                    </div>
                </div>
            </footer>
        </body>

        </html>


<?php

    }
} ?>