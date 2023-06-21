<?php
include "./conn.php";

$select = "SELECT * FROM `doctors` WHERE accepted ='yes'";
$sel = mysqli_query($connect, $select);

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
  <!-- <link rel="stylesheet" href="../CSS/The Electronic Medical History.css"> -->
  <link rel="stylesheet" href="../CSS/doctors.css">

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

    <div class="search-bar" style="margin-top: 10px;">
      <form method="post" action="search.php">
        <pre>
        <input style="padding: 10px; border: none; border-radius: 5px; margin-right: 10px;" type="text" name="srch" placeholder="Search"><button style="background-color: #f1efef; color: rgb(3, 3, 6); border: none; border-radius: 5px; padding: 10px; cursor: pointer;" name="search">go</button>
        </pre>
      </form>
    </div>
  </nav>

  <div class="header" style="display: flex; align-items: center; background-color: #2c73ae9c; color: rgb(4, 29, 151); padding: 15px; margin-top: 12px;">

    <h2 style="text-align: center; font-size: 30px; margin-left: 650px; padding: 10px;">Doctors</h2>

  </div>
  <div class="cont1">
    <div class="navbar">

    </div>
  </div>
  <div class="content">
    <br><br><br><br><br>
    <div class="card-container">
      <?php foreach ($sel as $s) { ?>

        <div class="card_doctors">
          <img src="../upload/<?php echo $s['image'] ?>" alt="Doctor's photo">
          <div class="card-text">
            <h3>Name: <?php echo $s['dfirst_name'] . $s['dlast_name'] ?></h3>
            <p>Specialist in: <?php echo $s['specialization'] ?></p>
            <br>
            <center><a href="./profile.php?view=<?php echo $s['id']; ?>"><button style="margin-top:20px; background-color: #4c87af; color: white; font-size: 25px; padding: 10px 10px; border: none; border-radius: 25px; cursor: pointer;">View</button></a></center>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
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