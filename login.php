<?php
include "shared/conn.php";

if (isset($_POST['login'])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $select = "SELECT * FROM `patient` WHERE email = '$email' and password = '$password'";

  $selectQuery = mysqli_query($connect, $select);

  $numberOfRows = mysqli_num_rows($selectQuery);

  $row = mysqli_fetch_assoc($selectQuery);
  if ($numberOfRows > 0) {
    $_SESSION["patient"] = $email;
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['pid'] = $row['id'];
    // echo  $_SESSION['name'] ;
    //  $dir = isset($_GET['dir']) ? $_GET['dir'] : "/ultras/main.php";
    header("location: /MediCoNew/patient.php");
  } else {

    if (isset($_POST['login'])) {
      $email = $_POST["email"];
      $password = $_POST["password"];
      $select = "SELECT * FROM `doctors` WHERE email = '$email' and password = '$password'";

      $selectQuery = mysqli_query($connect, $select);

      $numberOfRows = mysqli_num_rows($selectQuery);

      $row = mysqli_fetch_assoc($selectQuery);
      if ($numberOfRows > 0) {
        $_SESSION['doctor'] = $email;
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['id'] = $row['id'];

        // echo $_SESSION['admin'];

        //  $dir = isset($_GET['dir']) ? $_GET['dir'] : "/ultras/main.php";
        header("location: /MediCoNew/doctor.php");
      } else { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo "Wrong Email or Password"; ?>

        </div>
<?php }
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
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/footer.css">
  <link rel="stylesheet" href="CSS/loginstyle.css">
  <title>Medico</title>
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
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>

  <div class="container">
    <h1>Login</h1>
    <form method="POST">
      <label for="">Enter Your Email</label>
      <input name="email" type="text" placeholder="personemail@something.com" id="username" required>
      <label for="">Password:</label>
      <input name="password" type="password" placeholder="Password" id="password" required>
      <button name="login" type="submit" id="login-btn">Login</button>
    </form>
  </div>

  <script src="js/script.js"></script>
  <!-- <script src="js/loginscript.js"></script> -->

</body>

</html>