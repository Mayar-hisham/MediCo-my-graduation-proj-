<?php
include "../shared/conn.php";

if (isset($_SESSION["patient"])) {


    $select = "SELECT * FROM `patient` WHERE pid = '" . $_SESSION['pid'] . "'";
    $sel = mysqli_query($connect, $select);

    $row = mysqli_fetch_assoc($sel);

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
        <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
        <link rel="stylesheet" href="../CSS/patient_profile_for_patient.css">

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

                <a href="../shared/doctors.php">Doctors</a>
                <a href="../shared/order_medicine.php">Order Medicine</a>
                <a href="./order_tracking.php">Track your Orders</a>
                <a href="../shared/payment.html">Payment</a>
                <a href="./start_medical_profile.php">Start your medical profile</a>

            </div>
            <br><br><br><br><br>
            <div class="conent">
                <div class="card_patient">
                    <div class="image">
                        <img src="../upload/<?php echo $row['image'] ?>" alt="patient's photo">
                    </div>

                    <div class="details">

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