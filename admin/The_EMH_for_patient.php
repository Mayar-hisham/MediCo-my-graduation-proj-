<?php 
include "../shared/conn.php";

if (isset($_SESSION["admin"])) {

    $select = "SELECT * FROM `medical_profile` WHERE patient_id = '" . $_SESSION['pid'] . "'";
    $selectQuery = mysqli_query($connect, $select);

    $numberOfRows = mysqli_num_rows($selectQuery);
 
   $row = mysqli_fetch_assoc($selectQuery);
   if ($numberOfRows > 0) {
     $_SESSION['patient_medical_profile_id'] = $row['id'];
     $_SESSION['access'] = $row['id'].$row['patient_id'];

   }
$date = date('Y-m-d');

if(isset($_POST['persh'])){
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

$insert = "INSERT INTO `personal_hostory` VALUES (NULL , '".$_SESSION['patient_medical_profile_id']."' , 
$height , $weight , '$caff' , '$smoke' , '$medicine' , '$chrds' , '$alc' , '$cd' , '$cpd' , '$allergies' ,
'".$_SESSION['first_name']."' , '$date' )";
$ins = mysqli_query($connect , $insert);

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/The_EMH_for_patient.css">
    <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">

    <title>Medico</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="../Images/medico.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Help and Support</a></li>
            <li><a href="#">Logout</a></li>
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
        <h2>Date of birth:  <?php echo $_SESSION['date_of_birth'];  ?></h2>
        <h2>Blood Group: <?php echo $_SESSION['blood_type'];  ?></h2>
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>
    </div>
    <div class="cont1">
        <div class="navbar">
            <a href="#" class="active">Notifications</a>
            <a href="#">Medical History</a>
            <a href="#">Doctors</a>
            <a href="#">Orders</a>
            <a href="#">Payment</a>
            <a href="#">Insurance Details</a>
            <a href="#">Edits of EMH</a>
        </div>



        <div class="content">
            <h1 style="color: blue; text-align: left;">The Electronic Medical History</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#personal-history" aria-expanded="false" aria-controls="personal-history">
                            <h1 style="font-size: 25px;"> Personal History</h1>
                        </button>
                    </h2>
                    <div id="personal-history" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <form method="post" class="personal-history">
                                
                            <label for="height">Enter your height:</label>
                                <input type="number" id="height" name="height" min="0"
                                    placeholder="Enter your height...">
                                
                                    <label for="weight">Enter your weight:</label>
                                <input type="number" id="weight" name="weight" min="0"
                                    placeholder="Enter your weight...">
                                
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
                                <input type="text" id="medicine" name="medicine"
                                    placeholder="Enter your current medicine...">
                                
                                    <label for="chronic disease">Enter your chronic disease:</label>
                                <input type="text" id="chronic disease" name="chrds"
                                    placeholder="Enter your chronic disease...">

                                <label for="choose2">Do you drink alcohol?</label>
                                <label class="choose2" for="option1">Yes</label>
                                <input type="radio" value="yes" id="option1" name="alc">
                                <label class="choose2" for="option2">No</label>
                                <input type="radio" value="no" id="option2" name="alc">

                                <label for="cigarettes per day">Enter How many cigarettes per day:</label>
                                <input type="number" id="cigarettes per day" name="cd" min="0">
                                <label for="pack of cigarettes per day">Enter How many pack of cigarettes per
                                    day:</label>
                                <input type="number" id="pack of cigarettes per day" name="cpd"
                                    min="0">
                                <label for="Allergies">Enter your Allergies:</label>
                                <input type="text" id="Allergies" name="allergies"
                                    placeholder="Enter your Allergies...">

                                <br>
                                <button name="persh" type="submit" id="save-button">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#family-history" aria-expanded="false" aria-controls="family-history">
                            <h1 style="font-size: 25px;"> Family History </h1>
                        </button>
                    </h2>
                    <div id="family-history" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <form class="family-history">
                                <label for="Blood Relatives">Blood Relatives 1</label>
                                <input type="text" id="Blood Relatives" name="Blood Relatives"
                                    placeholder="Enter your Blood Relatives...">
                                <label for="Diseases">Enter your Blood Relatives diseases 1</label>
                                <input type="text" id="Diseases" name="Diseases"
                                    placeholder="Enter your Blood Relatives diseases...">
                                <label for="Blood Relatives">Blood Relatives 2</label>
                                <input type="text" id="Blood Relatives" name="Blood Relatives"
                                    placeholder="Enter your Blood Relatives...">
                                <label for="Diseases">Enter your Blood Relatives diseases 2</label>
                                <input type="text" id="Diseases" name="Diseases"
                                    placeholder="Enter your Blood Relatives diseases...">
                                <label for="Additional Infomation:">Additional Infomation:</label>
                                <input type="text" id="Additional Infomation" name="Additional Infomation"
                                    placeholder="Enter Additional Infomation...">
                                <label for="name">Enter name of author:</label>
                                <input type="text" id="name" disabled value="<?php echo $_SESSION['first_name']; ?>" name="name" placeholder="Enter name of author...">
                                <label for="date">Enter date of submit:</label>
                                <input type="date" id="date" disabled value="<?php echo $date ?>" name="date" placeholder="Enter date of submit...">
                                <br>
                                <button type="submit" id="save-button">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#past-history" aria-expanded="false" aria-controls="past-history">
                            <h1 style="font-size: 25px;"> Past History </h1>
                        </button>
                    </h2>
                    <div id="past-history" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <form class="past-history">
                                <label for="past illness">past illness:</label>
                                <input type="text" id="past illness" name="past illness"
                                    placeholder="Enter your past illness...">
                                <label for="past medicine">Enter your past medicine:</label>
                                <input type="text" id="past medicine" name="past medicine"
                                    placeholder="Enter your past medicine...">
                                <label for="past allergies">past allergies:</label>
                                <input type="text" id="past allergies" name="past allergies"
                                    placeholder="Enter your past allergies...">
                                <label for="past habits">Enter your past habits:</label>
                                <input type="text" id="past habits" name="past habits"
                                    placeholder="Enter your past habits...">
                                <label for="name">Enter name of author:</label>
                                <input type="text" id="name" name="name" placeholder="Enter name of author...">
                                <label for="date">Enter date of submit:</label>
                                <input type="date" id="date" name="date" placeholder="Enter date of submit...">
                                <br>
                                <button type="submit" id="save-button">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#surgical-history1" aria-expanded="false" aria-controls="surgical-history1">
                            <h1 style="font-size: 25px;"> Surgical History </h1>
                        </button>
                    </h2>
                    <div id="surgical-history1" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <form class="surgical-history">
                                <label for="Date of procedure">Date of procedure 1</label>
                                <input type="text" id="Date of procedure" name="Date of procedure"
                                    placeholder="Enter your Date of procedure...">
                                <label for="surgery type">surgery type 1</label>
                                <input type="text" id="surgery type" name="surgery type"
                                    placeholder="Enter your surgery type...">
                                <label for="Surgeon">Surgeon 1</label>
                                <input type="text" id="Surgeon" name="Surgeon" placeholder="Enter your Surgeon...">
                                <label for="Medication prescribed">Medication prescribed 1</label>
                                <input type="text" id="Medication prescribed" name="Medication prescribed"
                                    placeholder="Enter your Medication prescribed...">
                                <label for="Rehabilitation">Rehabilitation 1</label>
                                <input type="text" id="Rehabilitation" name="Rehabilitation"
                                    placeholder="Enter your Rehabilitation...">
                                <label for="Date of procedure">Date of procedure 2</label>
                                <input type="text" id="Date of procedure" name="Date of procedure"
                                    placeholder="Enter your Date of procedure...">
                                <label for="surgery type">surgery type 2</label>
                                <input type="text" id="surgery type" name="surgery type"
                                    placeholder="Enter your surgery type...">
                                <label for="Surgeon">Surgeon 2</label>
                                <input type="text" id="Surgeon" name="Surgeon" placeholder="Enter your Surgeon...">
                                <label for="Medication prescribed">Medication prescribed 2</label>
                                <input type="text" id="Medication prescribed" name="Medication prescribed"
                                    placeholder="Enter your Medication prescribed...">
                                <label for="Rehabilitation">Rehabilitation 2</label>
                                <input type="text" id="Rehabilitation" name="Rehabilitation"
                                    placeholder="Enter your Rehabilitation...">
                                <label for="Date of procedure">Date of procedure 3</label>
                                <input type="text" id="Date of procedure" name="Date of procedure"
                                    placeholder="Enter your Date of procedure...">
                                <label for="surgery type">surgery type 3</label>
                                <input type="text" id="surgery type" name="surgery type"
                                    placeholder="Enter your surgery type...">
                                <label for="Surgeon">Surgeon 3</label>
                                <input type="text" id="Surgeon" name="Surgeon" placeholder="Enter your Surgeon...">
                                <label for="Medication prescribed">Medication prescribed 3</label>
                                <input type="text" id="Medication prescribed" name="Medication prescribed"
                                    placeholder="Enter your Medication prescribed...">
                                <label for="Rehabilitation">Rehabilitation 3</label>
                                <input type="text" id="Rehabilitation" name="Rehabilitation"
                                    placeholder="Enter your Rehabilitation...">
                                <label for="Date of procedure">Date of procedure 4</label>
                                <input type="text" id="Date of procedure" name="Date of procedure"
                                    placeholder="Enter your Date of procedure...">
                                <label for="surgery type">surgery type 4</label>
                                <input type="text" id="surgery type" name="surgery type"
                                    placeholder="Enter your surgery type...">
                                <label for="Surgeon">Surgeon 4</label>
                                <input type="text" id="Surgeon" name="Surgeon" placeholder="Enter your Surgeon...">
                                <label for="Medication prescribed">Medication prescribed 4</label>
                                <input type="text" id="Medication prescribed" name="Medication prescribed"
                                    placeholder="Enter your Medication prescribed...">
                                <label for="Rehabilitation">Rehabilitation 4</label>
                                <input type="text" id="Rehabilitation" name="Rehabilitation"
                                    placeholder="Enter your Rehabilitation...">
                                <label for="name">Enter name of author:</label>
                                <input type="text" id="name" name="name" placeholder="Enter name of author...">
                                <label for="date">Enter date of submit:</label>
                                <input type="date" id="date" name="date" placeholder="Enter date of submit...">
                                <br>
                                <button type="submit" id="save-button">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#surgical-history2" aria-expanded="false" aria-controls="surgical-history2">
                            <h1 style="font-size: 25px;"> clinical history </h1>
                        </button>
                    </h2>
                    <div id="surgical-history2" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <form class="clinical-history">
                                <label for="Upload files">Upload files</label>
                                <input type="file" id="Upload files" name="Upload files" placeholder="Upload files">
                                <label for="name">Enter name of author:</label>
                                <input type="text" id="name" name="name" placeholder="Enter name of author...">
                                <label for="date">Enter date of submit:</label>
                                <input type="date" id="date" name="date" placeholder="Enter date of submit...">
                                <br>
                                <button type="submit" id="save-button">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php }?>
  <!--  <script src="JS/script.js"></script>-->
</body>

</html>