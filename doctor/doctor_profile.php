<?php 
include "../shared/conn.php";

if (isset($_SESSION['doctor'])) {

  $select = "SELECT * FROM `doctors` WHERE id = '" . $_SESSION['did'] . "'";
  $sel = mysqli_query($connect , $select);



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
  <link rel="stylesheet" href="../CSS/doctorprofile.css">

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
      <li><a href="home.html">Logout</a></li>
    </ul>
  </nav>

  <div class="header">
    <div class="menu-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <h2 style="text-align: center; font-size: 30px; margin-left: 500px; padding: 10px;">your profile </h2>

  </div>
  <div class="cont1">
    <div class="navbar">
      <a href="#" class="active" id="notification-count">Notifications </a>
      <a href="TheElectronicMedicalHistory.php">Medical History</a>
      <a href="doctors.html">Doctors</a>
      <a href="#">Orders</a>
      <a href="#">Payment</a>
      <a href="#">Insurance Details</a>
      <a href="TheElectronicMedicalHistory.php">Edits of EMH</a>
    </div>
    <div class="conent">
      <div class="card_doctor">
        <div class="image">
          <img src="Images/pexels-thirdman-5327656.jpg" alt="Doctor's photo">
        </div>
        <div class="details">
          <h2 style="text-align: center; margin-top: -100px; margin-bottom:80px; margin-right: 300px;">Dr. <?php echo $_SESSION['dfirst_name']; ?>
          </h2>
          <?php foreach($sel as $s){ ?>
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
          <button id="upload-btn">Upload photo</button>
        </div>
      </div>
    </div>
  </div>


  <?php } }?>

  <script src="JS/script.js"></script>
</body>

</html>