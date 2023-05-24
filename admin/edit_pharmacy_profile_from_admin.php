<?php
include "../shared/conn.php";


if (isset($_SESSION['admin'])) { 
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];

        $select = "SELECT * FROM `pharmacy` WHERE id = $id";
        $sel = mysqli_query($connect , $select);
        $num = mysqli_num_rows($sel);
        $row = mysqli_fetch_assoc($sel);

        if($num > 0){


            if(isset($_POST['update'])){
                $name = $_POST['name'];
                $address = $_POST['branches'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $image = $_FILES['image']['name'];
                $itype = $_FILES['image']['type'];
                $itmp = $_FILES['image']['tmp_name'];
               $ilocation = "../upload/";
              move_uploaded_file($itmp , $ilocation . $image);
            

                $edit = "UPDATE `pharmacy` SET name = '$name' , address = '$address' , phphone = $phone , 
                email = '$email' , password = '$password' , image = '$image'  WHERE id = '".$_GET['edit']."'";
                $e = mysqli_query($connect , $edit);

                if($e){
                    echo "table updated successfully";
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

    <!--first section-->





    <h1 class="h1_text" id="Requests">Registration</h1>
    <div class="conent">
        <form method="post" enctype="multipart/form-data">
            <label for="Username">Pharmacy Name:</label>
            <input value="<?php echo $row['name'] ?>" type="text" id="Username" name="name" placeholder="Enter Username...">
            <label for="Email">Email:</label>
            <input value="<?php echo $row['email'] ?>" type="email" id="Email" name="email" placeholder="Enter Email...">
            <label for="Branches">Branches:</label>
            <input value="<?php echo $row['address'] ?>" type="text" id="Branches" name="branches" placeholder="Enter Branches...">
            <label for="Contacts for each branch">Contacts for each branch:</label>
            <input value="<?php echo $row['phphone'] ?>" type="numbers" id="Contacts for each branch" name="phone"
                placeholder="Enter Contacts for each branch...">
            <label for="password">Password:</label>
            <input value="<?php echo $row['password'] ?>" type="password" id="password" name="password" placeholder="Enter password...">
            <label for="password">LOGO:</label>
            <input value="<?php echo $row['image'] ?>" type="file" id="password" name="image" placeholder="Enter password...">
            <br> <br>
            <button type="submit" name="update" id="save-button">Save</button>
        </form>
    </div>
    <?php  } } }?>

    <script src="../JS/script.js"></script>
   
</body>

</html>