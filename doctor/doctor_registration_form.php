<?php
include "../shared/conn.php";

if(isset($_POST['submit'])){

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $age = $_POST['date'];


    $pp = $_FILES['pp']['name'];
    $ptype = $_FILES['pp']['type'];
    $ptmp = $_FILES['pp']['tmp_name'];
   $plocation = "upload/";
  move_uploaded_file($ptmp , $plocation . $pp);


    $yoe = $_POST['yoe'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];


    $ds = $_FILES['ds']['name'];
    $ltype = $_FILES['ds']['type'];
    $ltmp = $_FILES['ds']['tmp_name'];
   $llocation = "upload/";
  move_uploaded_file($ltmp , $llocation . $ds);
    
    
    $email = $_POST['email'];
    $specialization = $_POST['spc']; 
    $password = $_POST['password'];


    $image = $_FILES['image']['name'];
    $itype = $_FILES['image']['type'];
    $itmp = $_FILES['image']['tmp_name'];
   $ilocation = "../upload/";
  move_uploaded_file($itmp , $ilocation . $image);


    $ins= "INSERT INTO `doctors` VALUES( Null , '$firstname',
     '$lastname' , '$age' , '$pp' , $yoe , '$address' , $phone ,
      '$ds' , '$email' , '$specialization' , $password , '$image' , 'no' , 'no')";
    $i = mysqli_query($connect , $ins);
   if($i){
        echo"Wait for your account to be accepted ny admins, you will receive an email";
    }
    
    //header("location: /MediCoNew/shared/login.php");
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
    <link rel="stylesheet" href="../CSS/doctor_registration_form.css">
    <title>Medico</title>

</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="../Images/medico.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Help and Support</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <h1 class="h1_text" id="Requests">Registration</h1>
    <div class="conent">
        <form method="post" enctype='multipart/form-data'>
            <label for="name">First Name:</label>
            <input type="text" id="name" name="fname" placeholder="Enter doctor name...">
            <label for="name">Last Name:</label>
            <input type="text" id="name" name="lname" placeholder="Enter doctor name...">
            <label for="Date of birth">Date of birth:</label>
            <input type="date" id="Date of birth" name="date" placeholder="Enter Date of birth...">
            <label for="Profession Practice">Profession Practice:</label>
            <input type="file" id="Profession Practice" name="pp"
                placeholder="Enter Profession Practice...">
                <label for="Profession Practice">years of experience:</label>
                <input type="text" id="Profession Practice" name="yoe"
                    placeholder="Enter years of experience...">
            <label for="Address">Your Clinic Address:</label>
            <input type="text" id="Address" name="address" placeholder="Enter Address...">
            <label for="Address">phone:</label>
            <input type="text" id="Address" name="phone" placeholder="Enter phone...">
            <label for="Doctor Syndicate">Doctor Syndicate:</label>
            <input type="file" id="Doctor Syndicate" name="ds" placeholder="Enter Doctor Syndicate...">
            <label for="Email">Email:</label>
            <input type="email" id="Email" name="email" placeholder="Enter Email...">
            <label for="Specialization">Specialization:</label>
            <input type="text" id="Specialization" name="spc" placeholder="Enter Specialization...">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter password...">
            <label for="password">Upload Personal Image</label>
            <input type="file" id="password" name="image" placeholder="Enter password...">
            <br> <br>
            <button name="submit" type="submit" id="save-button">Save</button>
        </form>
    </div>

    <script src="JS/script.js"></script>
</body>

</html>