<?php
include "../shared/conn.php";


if (isset($_SESSION['doctor'])) {

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/style.css">
        <link rel="stylesheet" href="../CSS/footer.css">

        <title>Medico</title>
    </head>

    <body>
        <nav>
            <div class="logo">
                <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
            </div>
            <ul class="nav-links">
                <li><a href="doctor_home.php">Home</a></li>
                <li><a href="../shared/FAQs.php">FAQs</a></li>
                <li><a href="../shared/login.php">Logout</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>

        <form class="form" method="POST" action="patient_profile.php">
            <label for="nationalId">Patient ID:</label>
            <input name="pid" type="number" id="nationalId" name="nationalId" placeholder="">

            <label for="nationalId">Medical Profile ID:</label>
            <input name="mid" type="number" id="nationalId" name="nationalId" placeholder="">

            <button name="go" type="submit">Submit</button>
        </form>

    <?php } ?>

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