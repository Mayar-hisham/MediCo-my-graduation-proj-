<?php
include "../shared/conn.php";

if (isset($_SESSION['pharmacy'])) {

?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/pharmacy's view.css">
    <title>Pharmacy's View</title>

  </head>

  <body>
    <nav>
      <div class="logo">
        <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" style="height:100px; width:250px; margin-left: 10px;" alt="Medico Logo"></a>
      </div>
      <ul class="nav-links">
        <li><a href="./pharmacy_view.php">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Help and Support</a></li>
        <li><a href="../shared/login.php?gbye='1'">Logout</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

    <!--first section-->


    <h1 class="h1_text">Welcome <?php echo $_SESSION['pharname']; ?></h1>
    <div class="container">
      <div class="image">
        <a href="./pharmacy_profile.php"><img src="../Images/my-profile-icon-png-3.jpg"></a>
        <a href="./pharmacy_profile.php">My profile</a>
      </div>
      <div class="image">
        <a href="requests.php"><img src="../Images/req icon.webp"></a>
        <a href="Requests.php">Requests</a>
      </div>


    </div>
    <div class="container">
      <div class="image">
        <a href="order_on_way.php"><img src="../Images/medical-delivery-logo-icon-design-can-be-used-as-complement-to-125310061.jpg"></a>
        <a href="order_on_way.php">Orders on way</a>
      </div>
      <div class="image">
        <a href="finished_requests.php"><img src="../Images/finish req icon.webp"></a>
        <a href="finished_requests.php">Finished requests</a>
      </div>

      <div class="image">
        <a href="pdm.php"><img src="../Images/perodic icon.webp"></a>
        <a href="pdm.php">Periodical Orders</a>
      </div>




    </div>
    <br>
    <br>

  <?php } ?>


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