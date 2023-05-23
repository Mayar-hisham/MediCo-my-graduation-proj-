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
      <a href="#"><img src="../Images/medico.png" alt="Medico Logo"></a>
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


  <h1 class="h1_text">Wellcome DR.<?php echo $_SESSION['dfirst_name']; ?></h1>
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
      <a href="../shared/order_medicine.php"><img
          src="../Images/medical-delivery-logo-icon-design-can-be-used-as-complement-to-125310061.jpg"></a>
          <a href="../shared/order_medicine.php">Order Medicine</a>
    </div>
  </div>

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