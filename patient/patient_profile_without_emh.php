<?php 
include "../shared/conn.php";

if (isset($_SESSION["patient"])) {


$select = "";

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
    <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
    <link rel="stylesheet" href="../CSS/patient_profile_for_patient.css">

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
    </nav>

    <div class="header">
        <div class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <h2 style="text-align: center; font-size: 30px; margin-left: 500px; padding: 10px;">My profile </h2>

    </div>
    <div class="cont1">
        <div class="navbar">

            <a href="#">Doctors</a>
            <a href="#">Orders</a>
            <a href="#">Payment</a>
            <a href="#">Insurance Details</a>
            <a href="./start_medical_profile.php">Start your medical profile</a>
            
        </div>
        <div class="conent">
            <div class="card_patient">
                <div class="image">
                    <img src="Images/patient-profile.jpg" alt="Patient's photo">
                </div>
               
                <div class="details">
               

                    <h2 style="text-align: center; margin-top: 10px; margin-bottom:80px; 
                    margin-right: 300px;"><?php echo $_SESSION['first_name']; ?></h2>
                    <p>Name: <?php echo $_SESSION['first_name']; ?></p>
                    <p>Profile ID: <?php echo $_SESSION['pid']; ?></p>
                    <p>Date of birth: <?php echo $_SESSION['date_of_birth']; ?></p>
                    <p>Phone no: <?php echo $_SESSION['phone']; ?></p>
                    <p>Address: <?php echo $_SESSION['address']; ?></p>
                    <p>Occuption: <?php echo $_SESSION['occupation']; ?></p>
                    <p>Marital status: <?php echo $_SESSION['marital_status']; ?></p>
                    <p>Emergency contacts: <?php echo $_SESSION['emergency_contact']; ?> </p>
                    <?php ?>
                   
                </div>
                <?php }  ?>
            </div>
        </div>
    </div>

    <?php  ?>
 <!--   <script src="JS/script.js"></script> -->
</body>

</html>