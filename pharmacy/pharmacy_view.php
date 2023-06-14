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
      <a href="#"><img src="../Images/medico.png" alt="Medico Logo"></a>
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
      <a href="requests.php"><img src="../Images/pending-order-svg-icon-free-my-job-icon-11553505427rf7ua37rbl.png"></a>
      <a href="Requests.php">Requests</a>
    </div>


  </div>
  <div class="container">
    <div class="image">
      <a href="order_on_way.php"><img
          src="../Images/delivery-truck-pictogram-icon-image-vector-illustration-design-79386582.jpg"></a>
      <a href="order_on_way.php">Orders on way</a>
    </div>
    <div class="image">
      <a href="finished_requests.php"><img src="../Images/done.png"></a>
      <a href="finished_requests.php">Finished requests</a>
    </div>

    <div class="image">
      <a href="pdm.php"><img src="../Images/done.png"></a>
      <a href="pdm.php">Periodical Orders</a>
    </div>




  </div>
  <br>
  <br>

  <?php } ?>


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