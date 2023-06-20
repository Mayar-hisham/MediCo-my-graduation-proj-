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

    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
    <link rel="stylesheet" href="../CSS/pharmacy's view.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Medico</title>
  </head>

  <body>
    <nav>
      <div class="logo">
        <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
      </div>
      <ul class="nav-links">
        <li><a href="doctor_home.php">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Help and Support</a></li>
        <li><a href="../shared/login.php?goodbye='1'">Logout</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

    <!--first section-->


    <h1 class="h1_text">Welcome DR.<?php echo $_SESSION['dfirst_name']; ?></h1>
    <div class="container_img">
      <div class="image">
        <a href="patient_otp.php"><img src="../Images/1901374.png"></a>
        <a href="patient_otp.php">access patient profile</a>
      </div>
      <div class="image">
        <a href="doctor_profile.php"><img src="../Images/my-profile-icon-png-3.jpg"></a>
        <a href="doctor_profile.php">My profile</a>
      </div>
      <div class="image">
        <a href="../shared/order_medicine.php"><img src="../Images/oreder icon.webp"></a>
        <a href="../shared/order_medicine.php">Order Medicine</a>
      </div>

      <div class="image">
        <a href="./order_tracking.php"><img src="../Images/track icon.webp"></a>
        <a href="./order_tracking.php">Track your Orders</a>
      </div>
    </div>

  <?php } ?>
  <footer>
    <div class="sticky-footer">
      <div class="footer-content">
        <p>Follow Us On</p>
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