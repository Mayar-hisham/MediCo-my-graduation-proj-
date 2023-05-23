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
            <li><a href="../shared/login.php?bye='1'">Logout</a></li>
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
            <a href="#" class="active" id="notification-count">Notifications </a>
            <a href="#">Medical History</a>
            <a href="#">Doctors</a>
            <a href="../shared/order_medicine.php">Order Medicine</a>
            <a href="#">Payment</a>
            <a href="EMH_view_patient.php">EMH</a>
            <a href="#">Insurance Details</a>
            <a href="#">Edits of EMH</a>
            
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