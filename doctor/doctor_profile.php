<?php
include "../shared/conn.php";




if (isset($_SESSION['doctor']) || isset($_SESSION["patient"])) {

  $select = "SELECT * FROM `doctors` WHERE id = '" . $_SESSION['did'] . "'";
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
    <link rel="stylesheet" href="../CSS/doctorprofile.css">

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
        <li><a href="../shared/login.php?goodbye='1'">Logout</a></li>
      </ul>
    </nav>

    <div class="header">
      <div class="menu-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <h2 style="text-align: center; font-size: 30px; margin-left: 500px; padding: 10px;">Doctor profile </h2>

    </div>
    <?php if (isset($_SESSION['doctor'])) { ?>
      <div class="cont1">
        <div class="navbar">
          <a href="../shared/doctors.php">Doctors</a>
          <a href="../shared/order_medicine.php">Order Medicine</a>
          <a href="order_tracking.php">Track Orders</a>
          <a href="patient_otp.php">Access patients</a>
          <a href="doctor_home.php">Home</a>
        </div>

      <?php } ?>
      <br><br><br><br><br>
      <div class="conent">
        <?php foreach ($sel as $s) { ?>
          <div class="card_doctor" style="margin-left:500px; height:max-content; margin-top:-670px; margin-bottom:50px ">
            <div class="image">
              <img src="../upload/<?php echo $row['image'] ?>" alt="Doctor's photo">
            </div>
            <div class="details">
              <h2 style="text-align: center; margin-top: -30px; margin-bottom:80px; margin-right: 300px;">Dr. <?php echo $_SESSION['dfirst_name']; ?>
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


  <?php }
      }
  ?>


  <script src="JS/script.js"></script>
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
  </body>

  </html>