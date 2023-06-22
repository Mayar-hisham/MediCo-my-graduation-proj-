<?php
include "../shared/conn.php";

if (isset($_POST['login'])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $select1 = "SELECT * FROM `patient` WHERE has_emh='yes' and email = '$email' and password = '$password' and blocked != 'yes'";
  $s1 = mysqli_query($connect, $select1);

  $numberOfRows = mysqli_num_rows($s1);

  $row = mysqli_fetch_assoc($s1);


  if ($numberOfRows > 0) {
    $_SESSION["patient"] = $email;
    $_SESSION['first_name'] = $row['first_name'] . $row['last_name'];
    $_SESSION['pid'] = $row['pid'];


    $_SESSION['medical_profile_id'] = $row['medical_profile_id'];
    $_SESSION['date_of_birth'] = $row['pdate_of_birth'];
    $_SESSION['blood_type'] = $row['blood_type'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['occupation'] = $row['occupation'];
    $_SESSION['marital_status'] = $row['marital_status'];
    $_SESSION['emergency_contact'] = $row['emergency_contact'];




    header("location: /MediCoNew/patient/patient_home.php");
  } else {

    if (isset($_POST['login'])) {
      $email = $_POST["email"];
      $password = $_POST["password"];

      $select1 = "SELECT * FROM `patient` WHERE email = '$email' 
          and password = '$password' and blocked != 'yes'";
      $s1 = mysqli_query($connect, $select1);

      $numberOfRows = mysqli_num_rows($s1);

      $row = mysqli_fetch_assoc($s1);


      if ($numberOfRows > 0) {
        $_SESSION["patient"] = $email;
        $_SESSION['first_name'] = $row['first_name'] . $row['last_name'];
        $_SESSION['pid'] = $row['pid'];


        $_SESSION['medical_profile_id'] = $row['medical_profile_id'];
        $_SESSION['date_of_birth'] = $row['pdate_of_birth'];
        $_SESSION['blood_type'] = $row['blood_type'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['occupation'] = $row['occupation'];
        $_SESSION['marital_status'] = $row['marital_status'];
        $_SESSION['emergency_contact'] = $row['emergency_contact'];



        header("location: /MediCoNew/patient/patient_home.php");
      } else {



        if (isset($_POST['login'])) {
          $email = $_POST["email"];
          $password = $_POST["password"];
          $select = "SELECT * FROM `doctors` WHERE email = '$email' and password = '$password' 
      and accepted = 'yes' and blocked != 'yes'";

          $selectQuery = mysqli_query($connect, $select);

          $numberOfRows = mysqli_num_rows($selectQuery);

          $row = mysqli_fetch_assoc($selectQuery);
          if ($numberOfRows > 0) {
            $_SESSION['doctor'] = $email;
            $_SESSION['dfirst_name'] = $row['dfirst_name'] . $row['dlast_name'];
            $_SESSION['specialization'] = $row['specialization'];
            $_SESSION['did'] = $row['id'];

            header("location: /MediCoNew/doctor/doctor_home.php");
          } else {

            if (isset($_POST['login'])) {
              $email = $_POST["email"];
              $password = $_POST["password"];
              $select = "SELECT * FROM `pharmacy` WHERE email = '$email' 
          and password = '$password' and blocked != 'yes'";

              $selectQuery = mysqli_query($connect, $select);

              $numberOfRows = mysqli_num_rows($selectQuery);

              $row = mysqli_fetch_assoc($selectQuery);
              if ($numberOfRows > 0) {
                $_SESSION['pharmacy'] = $email;
                $_SESSION['pharname'] = $row['name'];
                $_SESSION['phid'] = $row['id'];

                header("location: /MediCoNew/pharmacy/pharmacy_view.php");
              } else {

                if (isset($_POST['login'])) {
                  $email = $_POST["email"];
                  $password = $_POST["password"];
                  $select = "SELECT * FROM `admins` WHERE email = '$email' and password = '$password'";

                  $selectQuery = mysqli_query($connect, $select);

                  $numberOfRows = mysqli_num_rows($selectQuery);

                  $row = mysqli_fetch_assoc($selectQuery);
                  if ($numberOfRows > 0) {
                    $_SESSION['admin'] = $email;
                    $_SESSION['admin_id'] = $row['id'];

                    header("location: /MediCoNew/admin/admin_home.php");
                  } else { ?>
                    <div class="alert alert-danger" role="alert">
                      <pre>
          <?php echo " Make sure your account is not BLOCKED 
          or maybe you entered Wrong Email or Password"; ?>
          </pre>
                    </div>
<?php }
                }
              }
            }
          }
        }
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/footer.css">
  <link rel="stylesheet" href="../CSS/loginstyle.css">
  <title>Medico</title>
</head>

<body>
  <nav>
    <div class="logo">
      <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
    </div>
    <ul class="nav-links">
      <li><a href="../index.php">Home</a></li>
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>

  <div style="margin-top: 100px; height:max-content;" class="container">
    <h1>Login</h1>
    <form method="POST">
      <label for="">Enter Your Email</label>
      <input name="email" type="text" placeholder="personemail@something.com" id="username" required>
      <label for="">Password:</label>
      <input name="password" type="password" placeholder="Password" id="password" required>
      <button name="login" type="submit" id="login-btn" style="margin-top: 30px;">Login</button>
    </form>
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
  <script src="js/script.js"></script>

</body>

</html>