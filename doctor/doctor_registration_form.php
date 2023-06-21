<?php
include "../shared/conn.php";

function existing_email($connect, $email)
{
    $sql = "SELECT * FROM `doctors` WHERE email = ?;";
    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: /xampp/htdocs/MedoCoNew/doctor/doctor_registration_form.php");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultdata)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}



function empty_input_su($firstname, $lastname, $pp, $ds, $specialization, $email, $phone, $password)
{
    $result = 0;
    if (
        empty($firstname) || empty($email) || empty($phone)
        || empty($lastname) || empty($pp) || empty($ds) || empty($specialization) || empty($password)
    ) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}





if (isset($_POST['submit'])) {

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $age = $_POST['date'];


    $pp = $_FILES['pp']['name'];
    $ptype = $_FILES['pp']['type'];
    $ptmp = $_FILES['pp']['tmp_name'];
    $plocation = "../upload";
    move_uploaded_file($ptmp, $plocation . $pp);


    $yoe = $_POST['yoe'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];


    $ds = $_FILES['ds']['name'];
    $ltype = $_FILES['ds']['type'];
    $ltmp = $_FILES['ds']['tmp_name'];
    $llocation = "../upload/";
    move_uploaded_file($ltmp, $llocation . $ds);


    $email = $_POST['email'];
    $specialization = $_POST['spc'];
    $password = $_POST['password'];


    $image = $_FILES['image']['name'];
    $itype = $_FILES['image']['type'];
    $itmp = $_FILES['image']['tmp_name'];
    $ilocation = "../upload/";
    move_uploaded_file($itmp, $ilocation . $image);


    if (existing_email($connect, $email) !== false) {
        echo "email already exist!";
        exit();
    }

    if (empty_input_su($firstname, $lastname, $pp, $ds, $specialization, $email, $phone, $password) !== false) {
        echo "empty input!";
        exit();
    }


    $ins = "INSERT INTO `doctors` VALUES( Null , '$firstname',
     '$lastname' , '$age' , '$pp' , $yoe , '$address' , $phone ,
      '$ds' , '$email' , '$specialization' , $password , '$image' , 'no' , 'no')";
    $i = mysqli_query($connect, $ins);
    if ($i) {
        echo "Wait for your account to be accepted by admins, you will receive a call";
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
    <h1 class="h1_text" id="Requests">Registration</h1>
    <div class="conent">
        <form method="post" enctype='multipart/form-data' style="height:max-content">
            <label for="name">First Name:</label>
            <input type="text" id="name" name="fname" placeholder="Enter doctor name...">
            <label for="name">Last Name:</label>
            <input type="text" id="name" name="lname" placeholder="Enter doctor name...">
            <label for="Date of birth">Date of birth:</label>
            <input type="date" id="Date of birth" name="date" placeholder="Enter Date of birth...">
            <label for="Profession Practice">Profession Practice:</label>
            <input type="file" id="Profession Practice" name="pp" placeholder="Enter Profession Practice...">
            <label for="Profession Practice">years of experience:</label>
            <input type="text" id="Profession Practice" name="yoe" placeholder="Enter years of experience...">
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