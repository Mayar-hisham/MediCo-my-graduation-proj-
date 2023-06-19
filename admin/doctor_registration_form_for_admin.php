<?php 
include "../shared/conn.php";

if (isset($_SESSION['admin'])) {

  function existing_email($connect , $email){
    $sql = "SELECT * FROM `doctors` WHERE email = ?;";
    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt , $sql)) {
        header("location: /xampp/htdocs/MedoCoNew/admin/doctor_registration_form_for_admin.php");
        exit();
    }
    mysqli_stmt_bind_param( $stmt , "s" , $email);
mysqli_stmt_execute($stmt);

$resultdata = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultdata)) {
  return $row;
}
else {
    $result = false;
    return $result;
}
mysqli_stmt_close($stmt);
}



function empty_input_su($firstname , $lastname , $pp , $ds , $specialization , $email , $phone , $password){
    $result = 0;
    if(empty($firstname) || empty($email) || empty($phone) 
    || empty($lastname) ||empty($pp) ||empty($ds) ||empty($specialization) || empty($password)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
    }




    if(isset($_POST['submit'])){

        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $age = $_POST['date'];
    
    
        $pp = $_FILES['pp']['name'];
        $ptype = $_FILES['pp']['type'];
        $ptmp = $_FILES['pp']['tmp_name'];
       $plocation = "../upload/";
      move_uploaded_file($ptmp , $plocation . $pp);
    
    
        $yoe = $_POST['yoe'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
    
    
        $ds = $_FILES['ds']['name'];
        $ltype = $_FILES['ds']['type'];
        $ltmp = $_FILES['ds']['tmp_name'];
       $llocation = "../upload/";
      move_uploaded_file($ltmp , $llocation . $ds);
        
        
        $email = $_POST['email'];
        $specialization = $_POST['spc']; 
        $password = $_POST['password'];


        $image = $_FILES['image']['name'];
        $itype = $_FILES['image']['type'];
        $itmp = $_FILES['image']['tmp_name'];
       $ilocation = "../upload/";
      move_uploaded_file($itmp , $ilocation . $image);


      if (existing_email( $connect , $email ) !== false) {
        echo "email already exist!";
        exit();  
    }
    
    if (empty_input_su( $firstname , $lastname , $pp , $ds , $specialization , $email , $phone , $password ) !== false) {
        echo "empty input!";
        exit(); 
    }
    
    
        $ins= "INSERT INTO `doctors` VALUES( Null , '$firstname',
         '$lastname' , '$age' , '$pp' , $yoe , '$address' , $phone ,
          '$ds' , '$email' , '$specialization' , '$password' , '$image' , 'yes' , 'no')";
        $i = mysqli_query($connect , $ins);
     if($i){
            echo"Registered Successfully";
        }
    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];


        $sel = "SELECT * FROM `doctors` WHERE id = '".$_GET['edit']."'";
        $s = mysqli_query($connect , $sel);
        $num = mysqli_num_rows($s);
        $row = mysqli_fetch_assoc($s);
    }

    if(isset($_POST['edit'])){

        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $age = $_POST['date'];
    
    
        $pp = $_FILES['pp']['name'];
        $ptype = $_FILES['pp']['type'];
        $ptmp = $_FILES['pp']['tmp_name'];
       $plocation = "../upload/";
      move_uploaded_file($ptmp , $plocation . $pp);
    
    
        $yoe = $_POST['yoe'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
    
    
        $ds = $_FILES['ds']['name'];
        $ltype = $_FILES['ds']['type'];
        $ltmp = $_FILES['ds']['tmp_name'];
       $llocation = "../upload/";
      move_uploaded_file($ltmp , $llocation . $ds);
        
        
        $email = $_POST['email'];
        $specialization = $_POST['spc']; 
        $password = $_POST['password'];

        $image = $_FILES['image']['name'];
        $itype = $_FILES['image']['type'];
        $itmp = $_FILES['image']['tmp_name'];
       $ilocation = "../upload/";
      move_uploaded_file($itmp , $ilocation . $image);
        $id = $_GET['edit'];
    
    
        $ins= "UPDATE `doctors` SET dfirst_name = '$firstname',
         dlast_name = '$lastname' , date_of_birth = '$age' , profession_practice = '$pp' , years_of_exp = $yoe , 
         daddress = '$address' , phone = $phone ,
          doctor_syndicate = '$ds' , email = '$email' , specialization = '$specialization' ,
           password = '$password' , image = '$image' WHERE id = $id";
        $i = mysqli_query($connect , $ins);
     if($i){
            echo"Registered Successfully";
        }else{echo "no".mysqli_error($connect);}
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
            <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" height="100px" width="200px" alt="Medico Logo"></a>
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
        <form method="post" enctype='multipart/form-data'>
            <label for="name">First Name:</label>
         <?php    if(isset($_GET['edit'])){ ?>
            <input value="<?php echo $row['dfirst_name']?>" type="text" id="name" name="fname" placeholder="Enter doctor name...">
            <?php }else{ ?>
                <input type="text" id="name" name="fname" placeholder="Enter doctor name...">
              <?php } ?>
            <label for="name">Last Name:</label>
            <?php if(isset($_GET['edit'])){ ?>
            <input type="text" value="<?php echo $row['dlast_name']?>" id="name" name="lname" placeholder="Enter doctor name...">
              <?php }else{ ?>
            <input type="text" id="name" name="lname" placeholder="Enter doctor name...">
            <?php }?>
            <label for="Date of birth">Date of birth:</label>
            <?php if(isset($_GET['edit'])){ ?>
                <input value="<?php echo $row['date_of_birth']?>" id="Date of birth" name="date" placeholder="Enter Date of birth...">
              <?php }else{ ?>
                <input type="date" id="Date of birth" name="date" placeholder="Enter Date of birth...">
            <?php }?>
    
            <label for="Profession Practice">Profession Practice:</label>
            <?php if(isset($_GET['edit'])){ ?>
                <input type="file" id="Profession Practice" name="pp"
                placeholder="Enter Profession Practice...">
              <?php }else{ ?>
                <input type="file" id="Profession Practice" name="pp"
                placeholder="Enter Profession Practice...">
            <?php }?>
            
                <label for="Profession Practice">years of experience:</label>
                <?php if(isset($_GET['edit'])){ ?>
                <input value="<?php echo $row['years_of_exp']?>" id="Profession Practice" name="yoe">
              <?php }else{ ?>
                <input type="text" id="Profession Practice" name="yoe"
                placeholder="Enter years of exp...">
            <?php }?>

            <label for="Address">Your Clinic Address:</label>
            <?php if(isset($_GET['edit'])){ ?>
                <input type="text" value="<?php echo $row['daddress']?>" id="Address" name="address" placeholder="Enter Address...">
              <?php }else{ ?>
                <input type="text" id="Address" name="address" placeholder="Enter Address...">
            <?php }?>
            
            <label for="Address">phone:</label>
            <?php if(isset($_GET['edit'])){ ?>
                <input type="text" value="<?php echo $row['phone']?>" id="Address" name="phone" placeholder="Enter phone...">
              <?php }else{ ?>
                <input type="text" id="Address" name="phone" placeholder="Enter phone...">
            <?php }?>
            
            <label for="Doctor Syndicate">Doctor Syndicate:</label>
            <?php if(isset($_GET['edit'])){ ?>
                <input type="file" id="Doctor Syndicate" name="ds" placeholder="Enter Doctor Syndicate...">
              <?php }else{ ?>
                <input type="file" id="Doctor Syndicate" name="ds" placeholder="Enter Doctor Syndicate...">
            <?php }?>
            
            <label for="Email">Email:</label>
            <?php if(isset($_GET['edit'])){ ?>
                <input type="email" value="<?php echo $row['email']?>" id="Email" name="email" placeholder="Enter Email...">
              <?php }else{ ?>
                <input type="email" id="Email" name="email" placeholder="Enter Email...">
            <?php }?>
            
            <label for="Specialization">Specialization:</label>
            <?php if(isset($_GET['edit'])){ ?>
                <input type="text" value="<?php echo $row['specialization']?>" id="Specialization" name="spc" placeholder="Enter Specialization...">
              <?php }else{ ?>
                <input type="text" id="Specialization" name="spc" placeholder="Enter Specialization...">
            <?php }?>

            <label for="password">Password:</label>
            <?php if(isset($_GET['edit'])){ ?>
                <input type="password" value="<?php echo $row['password']?>" id="password" name="password" placeholder="Enter password...">

              <?php }else{ ?>
                <input type="password" id="password" name="password" placeholder="Enter password...">
            <?php }?>


            <label for="password">Upload Personal Picture:</label>
            <?php if(isset($_GET['edit'])){ ?>
                <input type="file" value="<?php echo $row['image']?>" id="password" name="password" placeholder="Enter password...">

              <?php }else{ ?>
                <input type="file" id="password" name="image" placeholder="Enter password...">
            <?php }?>


            
            <br> <br>
            <?php if(isset($_GET['edit'])){ ?>
            <button name="edit" type="submit" id="save-button">Save</button>
            <?php }else{?>
                <button name="submit" type="submit" id="save-button">Save</button>
                <?php } ?> 
        </form>
    </div>

    <?php } ?>
    <script src="JS/script.js"></script>
</body>

</html>