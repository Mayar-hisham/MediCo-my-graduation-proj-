<?php
include "./conn.php";

if (isset($_GET['view'])) {
    $id = $_GET['view'];

    $select = "SELECT * FROM `doctors` WHERE id = $id";
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
        <link rel="stylesheet" href="../CSS/doctorprofile.css">

        <title>Medico</title>
    </head>

    <body>
        <nav>
            <div class="logo">
                <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
            </div>
            <ul class="nav-links" style="margin-left:400px">

                <?php if (isset($_SESSION["patient"])) { ?>
                    <li><a href="../patient/patient_home.php">Home</a></li>
                <?php  } ?>

                <?php if (isset($_SESSION["doctor"])) { ?>
                    <li><a href="../doctor/doctor_home.php">Home</a></li>
                <?php  } ?>

                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Help and Support</a></li>

                <?php if (isset($_SESSION["patient"])) { ?>
                    <li><a href="../shared/login.php?bye='1'">Logout</a></li>
                <?php  } ?>

                <?php if (isset($_SESSION["doctor"])) { ?>
                    <li><a href="../shared/login.php?goodbye='1'">Logout</a></li>
                <?php  } ?>


            </ul>

        </nav>

        <div class="header" style="display: flex; align-items: center; background-color: #2c73ae9c; color: rgb(4, 29, 151); padding: 15px; margin-top: 12px;">
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <h2 style="text-align: center; font-size: 30px; margin-left: 600px; padding: 10px;">Doctor profile </h2>

        </div>
        <div class="cont1">
            <div class="navbar">
            </div>
            <br><br><br><br><br>
            <div class="conent">

                <div class="card_doctor" style="margin-top:50px; margin-left:450px; height:max-content ">

                    <div class="image">
                        <br><br><br><br>
                        <img src="../upload/<?php echo $row['image'] ?>" alt="Doctor's photo">
                    </div>
                    <div class="details">
                        <?php foreach ($sel as $s) { ?>
                            <br><br><br><br>
                            <h2 style="text-align: center; margin-top: -50px; margin-bottom:80px; margin-right: 300px;">Dr. <?php echo $s['dfirst_name'] . $s['dlast_name']; ?>
                            </h2>

                            <p>Specialist in: <br> <span><?php echo $s['specialization']; ?> </span> </p>
                            <p>Experience: <br> <span><?php echo $s['years_of_exp']; ?> </span> </p>
                            <div class="uls">
                                <p>Clinic branches:</p>

                                <ul>
                                    <li><?php echo $s['daddress']; ?> </li>
                                </ul>
                                <p>Contact:</p>
                                <ul>
                                    <li>Phone: <?php echo $s['phone']; ?> </li>
                                    <li>Email: <?php echo $s['email']; ?> </li>
                                </ul>
                            </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <br>
<?php
                        }
                    }


?>
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
<script src="JS/script.js"></script>
    </body>

    </html>