<?php
include "../shared/conn.php";
if (isset($_SESSION['admin'])) {

if(isset($_POST['reg'])) {
    $username = mysqli_real_escape_string($connect,$_POST['name']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);
    $branches = mysqli_real_escape_string($connect,$_POST['branches']);
    $contacts = mysqli_real_escape_string($connect,$_POST['phone']);

    $image = $_FILES['image']['name'];
    $itype = $_FILES['image']['type'];
    $itmp = $_FILES['image']['tmp_name'];
   $ilocation = "../upload/";
  move_uploaded_file($itmp , $ilocation . $image);

   //($password != $conpassword){
       // echo "password does not match";
   // }
    
        $qq="INSERT INTO `pharmacy`(`id`, `name`, `address`, `phphone`,`email`,`password` , `image` , `blocked`)
        VALUES (NULL , '$username','$branches' ,'$contacts','$email','$password' , '$image' , 'no')";
   $q = mysqli_query($connect,$qq);

  //header('location:login.php');

  if($q){
    echo"ok";
  }else{
    echo"no".mysqli_error($connect);
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
            <li><a href="./admin_home.php">Home</a></li>
            <li><a href="../shared/login.php?bbye='1'">Logout</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <h1 class="h1_text" id="Requests">Registration</h1>
    <div class="conent">
        <form method="post" enctype="multipart/form-data">
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
            <label for="password">LOGO:</label>
            <input type="file" id="password" name="image" placeholder="Enter password...">
            <br> <br>
            <button type="submit" name="reg" id="save-button">Save</button>
        </form>
    </div>
    <?php } ?>

    <script src="JS/script.js"></script>
</body>

</html>