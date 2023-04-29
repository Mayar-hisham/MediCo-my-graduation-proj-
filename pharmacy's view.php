<?php 
include "shared/conn.php";

if (isset($_SESSION['pharmacy'])) {

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="CSS/footer.css">
  <link rel="stylesheet" href="CSS/pharmacy's view.css">
  <title>Pharmacy's View</title>

</head>

<body>
  <nav>
    <div class="logo">
      <a href="#"><img src="Images/medico.png" alt="Medico Logo"></a>
    </div>
    <ul class="nav-links">
      <li><a href="home.html">Home</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">Help and Support</a></li>
      <li><a href="home.html">Logout</a></li>
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
      <a href="https://www.example.com"><img src="Images/my-profile-icon-png-3.jpg"></a>
      <a href="https://www.example.com">My profile</a>
    </div>
    <div class="image">
      <a href="requests.php"><img src="Images/pending-order-svg-icon-free-my-job-icon-11553505427rf7ua37rbl.png"></a>
      <a href="Requests.php">Requests</a>
    </div>
    <div class="image">
      <a href="current _orders.php"><img
          src="Images/medical-delivery-logo-icon-design-can-be-used-as-complement-to-125310061.jpg"></a>
      <a href="current _orders.php">Current orders
      </a>
    </div>

  </div>
  <div class="container">
    <div class="image">
      <a href="order_on_way.php"><img
          src="Images/delivery-truck-pictogram-icon-image-vector-illustration-design-79386582.jpg"></a>
      <a href="order_on_way.php">Orders on way</a>
    </div>
    <div class="image">
      <a href="finished_requests.php"><img src="Images/done.png"></a>
      <a href="finished_requests.php">Finished requests</a>
    </div>
    <div class="image">
      <a href="pinding_orders.html"><img src="Images/pending-orders-1.png"></a>
      <a href="pinding_orders.php">Pinding orders </a>
    </div>

  </div>

  <?php } ?>
  <script src="JS/script.js"></script>
</body>

</html>