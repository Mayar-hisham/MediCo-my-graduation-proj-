<?php
include "../shared/conn.php";

if (isset($_SESSION["patient"])) {



  $select = "SELECT * FROM `medical_profile` WHERE patient_id = '" . $_SESSION['pid'] . "'";
  $sel = mysqli_query($connect, $select);
  $numrow = mysqli_num_rows($sel);
  $row = mysqli_fetch_assoc($sel);
  if ($numrow > 0) {
    $_SESSION['patient_medical_profile_id'] = $row['m_id'];
    $_SESSION['access'] = $row['m_id'] . $row['patient_id'];
  }

  //header("location: /MediCoNew/patient/The_EMH_for_patient.php");

?>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
  <link rel="stylesheet" href="../CSS/footer.css">

  <title>Medico</title>
</head>

<body>
  <nav>
    <div class="logo">
      <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
    </div>
    <ul class="nav-links">
      <li><a href="../patient/patient_home.php">Home</a></li>
      <li><a href="../shared/FAQs.php">FAQs</a></li>
      <li><a href="../shared/login.php?bbye='1'">Logout</a></li>
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>

  <!--the form -->

  <form method="POST" action="">
    <center>
      <p style="margin-top:200px; margin-bottom:40px"> Please press Start to fill in your Electronic Medical History</p>
    </center>
    <input disabled type="text" style="padding:20px; margin-top:15px; margin-right:30px; margin-left:550px;" name="id" value="your id is <?php echo $_SESSION['pid']; ?>">
    <input disabled type="text" style="padding:20px;" name="mpid" value="your medical profile id is <?php echo $row['m_id']; ?>">
    <a><button style="margin-top:50px; margin-bottom:20px; margin-left:730px; background-color: #4c87af; color: white; font-size: 25px; padding: 10px 20px; border: none; border-radius: 25px; cursor: pointer;" name="fill_in">start</button></a>
  </form>
  <!-- <form class="form" method="POST" action="">
        <label for="nationalId">Enter Patient Email:</label>
        <input name="pemail" type="number" id="nationalId" name="nationalId" placeholder="">

        <label for="nationalId">Enter Patient ID:</label>
        <input name="pid" type="number" id="nationalId" name="nationalId" placeholder="">

        <button name="go" type="submit">Go</button>
    </form> -->
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