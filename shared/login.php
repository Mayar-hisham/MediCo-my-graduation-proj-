<?php
include "../shared/conn.php";

  if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
  
    $select1 = "SELECT * FROM `patient` WHERE has_emh='yes' and email = '$email' and password = '$password'";
    $s1 = mysqli_query($connect , $select1);
  
    $numberOfRows = mysqli_num_rows($s1);
  
    $row = mysqli_fetch_assoc($s1);


      if ($numberOfRows > 0) {
        $_SESSION["patient"] = $email;
        $_SESSION['first_name'] = $row['first_name'].$row['last_name'];
        $_SESSION['pid'] = $row['pid'];
    
    
        $_SESSION['medical_profile_id'] = $row['medical_profile_id'];
        $_SESSION['date_of_birth'] = $row['pdate_of_birth'];
       $_SESSION['blood_type'] = $row ['blood_type'];
        //$_SESSION['current_illness'] = $row['current_illness'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['occupation'] = $row['occupation'];
        $_SESSION['marital_status'] = $row['marital_status'];
        $_SESSION['emergency_contact'] = $row['emergency_contact']; 




      header("location: /MediCoNew/patient/patient_profile_for_patient.php"); 
      
      
        }else{

         if (isset($_POST['login'])) {
          $email = $_POST["email"];
          $password = $_POST["password"];
        
          $select1 = "SELECT * FROM `patient` WHERE email = '$email' and password = '$password'";
          $s1 = mysqli_query($connect , $select1);
        
          $numberOfRows = mysqli_num_rows($s1);
        
          $row = mysqli_fetch_assoc($s1);


      if ($numberOfRows > 0) {
        $_SESSION["patient"] = $email;
        $_SESSION['first_name'] = $row['first_name'].$row['last_name'];
        $_SESSION['pid'] = $row['pid'];
    
    
        $_SESSION['medical_profile_id'] = $row['medical_profile_id'];
        $_SESSION['date_of_birth'] = $row['pdate_of_birth'];
       $_SESSION['blood_type'] = $row ['blood_type'];
        //$_SESSION['current_illness'] = $row['current_illness'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['occupation'] = $row['occupation'];
        $_SESSION['marital_status'] = $row['marital_status'];
        $_SESSION['emergency_contact'] = $row['emergency_contact']; 



      header("location: /MediCoNew/patient/patient_profile_without_emh.php");
  }

else{

  
  
  if (isset($_POST['login'])) {
      $email = $_POST["email"];
      $password = $_POST["password"];
      $select = "SELECT * FROM `doctors` WHERE email = '$email' and password = '$password' and accepted = 'yes'";

      $selectQuery = mysqli_query($connect, $select);

      $numberOfRows = mysqli_num_rows($selectQuery);

      $row = mysqli_fetch_assoc($selectQuery);
      if ($numberOfRows > 0) {
        $_SESSION['doctor'] = $email;
        $_SESSION['dfirst_name'] = $row['dfirst_name'] .$row['dlast_name'];
        $_SESSION['specialization'] = $row['specialization'];
        $_SESSION['did'] = $row['id'];

        // echo $_SESSION['admin'];

        //  $dir = isset($_GET['dir']) ? $_GET['dir'] : "/ultras/main.php";
        header("location: /MediCoNew/doctor/doctor_home.php");

      } else{

        if (isset($_POST['login'])) {
          $email = $_POST["email"];
          $password = $_POST["password"];
          $select = "SELECT * FROM `pharmacy` WHERE email = '$email' and password = '$password'";
    
          $selectQuery = mysqli_query($connect, $select);
    
          $numberOfRows = mysqli_num_rows($selectQuery);
    
          $row = mysqli_fetch_assoc($selectQuery);
          if ($numberOfRows > 0) {
            $_SESSION['pharmacy'] = $email;
            $_SESSION['pharname'] = $row['name'];
            $_SESSION['phid'] = $row['id'];
    
            // echo $_SESSION['admin'];
    
            //  $dir = isset($_GET['dir']) ? $_GET['dir'] : "/ultras/main.php";
            header("location: /MediCoNew/pharmacy/pharmacy_view.php");


      } else{

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
    
            // echo $_SESSION['admin'];
    
            //  $dir = isset($_GET['dir']) ? $_GET['dir'] : "/ultras/main.php";
            header("location: /MediCoNew/admin/admin_home.php");


      }
      
      
      
      else { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo "Wrong Email or Password"; ?>

        </div>
<?php }
        }}}}
    }}}}}
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
      <a href="#"><img src="../Images/medico.png" alt="Medico Logo"></a>
    </div>
    <ul class="nav-links">
      <li><a href="../index.php">Home</a></li>
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