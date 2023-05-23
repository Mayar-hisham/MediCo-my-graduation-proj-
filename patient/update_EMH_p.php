<?php 
include "../shared/conn.php";

if (isset($_SESSION["patient"])) {



    $select = "SELECT * FROM `medical_profile` WHERE patient_id = '" . $_SESSION['pid'] . "' ";
    $selectQuery = mysqli_query($connect, $select);

    if($selectQuery){

    $numberOfRows = mysqli_num_rows($selectQuery);
 
   $row = mysqli_fetch_assoc($selectQuery);

   if($numberOfRows > 0){
    $_SESSION['patient_medical_profile_id'] = $row['m_id'];
   }

$date = date('Y-m-d');

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
        <h2>Date of birth:  <?php echo $_SESSION['date_of_birth'];  ?></h2>
        <h2>Blood Group: <?php echo $_SESSION['blood_type'];  ?></h2>
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>
    </div>
    <div class="cont1">
        <div class="navbar">
        <a href="../shared/doctors.php">Doctors</a>
            <a href="../shared/order_medicine.php">Order Medicine</a>
            <a href="../shared/payment.html">Payment</a>
            <a href="./start_medical_profile.php">Start your medical profile</a>
        </div>



        <div class="content">
            <h1 style="color: blue; text-align: left;">The Electronic Medical History</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">


                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#personal-history" aria-expanded="false" aria-controls="personal-history">
                        
                        

<?php

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




                        <h1 style="font-size: 25px;"> Personal History</h1>
                    </button>
                </h2>
                <div id="personal-history" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                   
                        <form method="post" class="personal-history">
                        
                        <label for="height">Enter your height:</label>
                            <input type="number"  id="height" name="height" min="0"
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
                        <?php
//}  ?>
                    </div>
                </div>
                
            </div> 





               
    <?php }
/*
else{
 echo "you dont have it yet";
} */

?>

   <script src="JS/script.js"></script>
   <footer class="sticky-footer">
        <div>
            <h6>Copyright &copy Medico-2023</h6>
        </div>
               <div>
               <h4 class="_14">  &nbsp  &nbsp  &nbsp CONTACT US:</h4>
      
                  <br>    &nbsp  &nbsp PHONE NO.: 01008775960 <br>
                   <br>    &nbsp  &nbsp EMAIL: MediCo23@gmail.com
</div>
<br>
<div class="footer-social-icons">
  <h4 class="r"> &nbsp &nbspFOLLOW US ON</h4>
  <br>
  <ul class="social-icons">
    <li><a href="www.facbook.com">&nbsp<img width=30px hight=40px
          src="../Images/icona1.png"></a></li>
    <li><a href="www.instagram.com"><img width=30px hight=40px
          src="../Images/icona2.png"></a></li></li>
    <li><a href="www.twitter.com"><img width=30px hight=40px
          src="../Images/twitter.jpg"></a></li>
</ul>
</div>
    </footer>
</body>

</html>