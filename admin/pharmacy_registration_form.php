<?php
include "../shared/conn.php";
if (isset($_SESSION['admin'])) {

if(isset($_POST['reg'])) {
    $username = mysqli_real_escape_string($connect,$_POST['name']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);
    $branches = mysqli_real_escape_string($connect,$_POST['branches']);
    $contacts = mysqli_real_escape_string($connect,$_POST['phone']);

   //($password != $conpassword){
       // echo "password does not match";
   // }
    
        $qq="INSERT INTO `pharmacy`
        VALUES (NULL , '$username','$branches' ,'$contacts','$email','$password' , 'no')";
   $q = mysqli_query($connect,$qq);

  //header('location:login.php');

  if($q){
    echo 'NOW PLEASE LOGIN';?> <a href="../shared/login.php">LOGIN HERE</a>  <?php
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
    <link rel="stylesheet" href="../CSS/pharmacy_registration_form.css">
    <title>Medico</title>

</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="../Images/medico.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="login.php?bbye='1'">Logout</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <h1 class="h1_text" id="Requests">Registration</h1>
    <div class="conent">
        <form method="post">
            <label for="Username">Pharmacy Name:</label>
            <input type="text" id="Username" name="name" placeholder="Enter Username...">
            <label for="Email">Email:</label>
            <input type="email" id="Email" name="email" placeholder="Enter Email...">
            <label for="Branches">Branches:</label>
            <input type="text" id="Branches" name="branches" placeholder="Enter Branches...">
            <label for="Contacts for each branch">Contacts for each branch:</label>
            <input type="numbers" id="Contacts for each branch" name="phone"
                placeholder="Enter Contacts for each branch...">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter password...">
            <br> <br>
            <button type="submit" name="reg" id="save-button">Save</button>
        </form>
    </div>
    <?php } ?>

    <script src="JS/script.js"></script>
</body>

</html>