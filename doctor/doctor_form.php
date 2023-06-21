<?php
include "../shared/conn.php";


if (isset($_SESSION['doctor'])) {
  if (isset($_SESSION["patient_profile_access"])) {

    //$date = date('m/d/Y h:i:s a', time());
    $time = date('h:i: a', time());
    $date = date('Y-m-d');



    if (isset($_POST['upload'])) {

      $_mfid = $_SESSION['mpfid'];
      $_dname = $_SESSION['did'];
      $_dfn = $_SESSION['dfirst_name'];
      $_sp = $_SESSION['specialization'];
      $_date = $date;
      $_time = $time;
      $weight = $_POST['wt'];
      $vt = $_POST['vt'];
      $observation = $_POST['observation'];
      $diagnosis = $_POST['diagnosis'];
      $symptoms = $_POST['symptoms'];
      $prescription = $_POST['prescription'];


      $insert = " INSERT INTO `doctor_diagnosis` VALUES
     (NULL , $_mfid , $_dname , '$_dfn' , '$_sp' , '$_date' , '$_time' , '$weight' , '$vt' , '$observation' , '$symptoms' , '$diagnosis' , '$prescription') ";

      $ins = mysqli_query($connect, $insert);

      if ($ins) {
        echo "Diagnosis Done Successfully";
      }
    }

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
      <link rel="stylesheet" href="../CSS/doctorform.css">

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
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>

      <div class="header">
        <div class="menu-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <h2 style="text-align: center; font-size: 30px; margin-left: 500px; padding: 10px;">Doctors diagnosis</h2>

      </div>
      <div class="cont1">
        <div class="navbar">
        </div>
        <br><br><br><br><br>
        <div class="conent">
          <form method="POST">

            <label for="name">Medical Profile ID:</label>
            <input type="text" disabled value=" <?php echo $_SESSION['mpfid']; ?>" id="name" name="mfid">

            <label for="name">Doctor ID:</label>
            <input type="text" disabled value=" <?php echo $_SESSION['did']; ?>" id="name" name="did">

            <label for="name">Doctor First Name:</label>
            <input type="text" disabled value=" <?php echo $_SESSION['dfirst_name']; ?>" id="name" name="dfn">

            <label for="date">Date:</label>
            <input type="text" disabled id="date" value="<?php echo $date ?>" name="date" placeholder="Enter date...">

            <label for="date">time:</label>
            <input type="text" disabled id="date" value="<?php echo $time ?>" name="time" placeholder="Enter date...">

            <label for="specialty">Medical Specialty:</label>
            <input type="text" disabled id="speciality" name="sp" value="<?php echo $_SESSION['specialization']; ?>">

            <label for="diagnosis">Diagnosis:</label>
            <input type="text" id="diagnosis" name="diagnosis" placeholder="Enter diagnosis...">

            <label for="diagnosis">Weight:</label>
            <input type="text" id="diagnosis" name="wt" placeholder="Enter patient weight...">

            <label for="diagnosis">Visit Type:</label>
            <input type="text" id="diagnosis" name="vt" placeholder="Enter visit type...">

            <label for="diagnosis">observation:</label>
            <input type="text" id="diagnosis" name="observation" placeholder="Enter your observations...">

            <label for="diagnosis">Symptoms:</label>
            <input type="text" id="diagnosis" name="symptoms" placeholder="Enter symptoms...">

            <label for="title">prescription:</label>
            <input type="text" id="title" name="prescription" placeholder="Enter prescription...">

            <button name="upload" type="submit" id="save-button">Save</button>
          </form>
        </div>


    <?php }
} ?>
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