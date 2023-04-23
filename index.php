<?php
include './shared/conn.php';


if(isset($_POST['login'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $select = "SELECT * FROM `patient` WHERE email = '$email' and password = '$password'";

    $selectQuery = mysqli_query($connect, $select);

    $numberOfRows = mysqli_num_rows($selectQuery);

    $row = mysqli_fetch_assoc($selectQuery);
    if($numberOfRows > 0){
        $_SESSION["patient"] = $email;
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['id'] = $row['id'];
        // echo  $_SESSION['name'] ;
      //  $dir = isset($_GET['dir']) ? $_GET['dir'] : "/ultras/main.php";
        header("location: /MediCo/patient/pmain.php");
    }
  


  else{

    if(isset($_POST['login'])){
      $email = $_POST["email"];
      $password = $_POST["password"];
      $select = "SELECT * FROM `doctors` WHERE email = '$email' and password = '$password'";

      $selectQuery = mysqli_query($connect , $select);

      $numberOfRows = mysqli_num_rows($selectQuery);

      $row = mysqli_fetch_assoc($selectQuery);
      if($numberOfRows > 0){
          $_SESSION['doctor'] = $email;
          $_SESSION['first_name'] = $row['first_name'];
          $_SESSION['id'] = $row['id'];

         // echo $_SESSION['admin'];

        //  $dir = isset($_GET['dir']) ? $_GET['dir'] : "/ultras/main.php";
          header("location: /MediCo/doctor/dmain.php");
        }
          
          else{?>
        <div class="alert alert-danger" role="alert">
      <?php  echo "Wrong Email or Password";?>
      
    </div>
    <?php }
  
      }
     
    }
  }

?>

  <center>
<div class="container">
    <form method="POST">
        <h4>Log In</h4>

        <label>Email</label><br>
        <input type="email" name="email" placeholder="type your email ...">

        <br>
        
        <label>Password</label><br>
        <input type="password" name="password" placeholder="create a password ...">

        <br>

        <button name="login" class="cbtn">Confirm</button>

    </form>
    </div>
</center>