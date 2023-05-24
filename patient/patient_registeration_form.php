<?php
include "../shared/conn.php";

if(isset($_POST['signup'])){

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $maritalstatus = $_POST['maritalstatus'];
    $email = $_POST['email'];
    $allergies = $_POST['allergies'];
    $bloodtype = $_POST['bloodtype'];
    $age = $_POST['date']; 
    $phone = $_POST['phone'];
    $em_cont = $_POST['em_cont'];
    $address = $_POST['address'];
    $password = $_POST['password'];


    $ins= "INSERT INTO `patient` VALUES( Null , '$firstname',
     '$lastname' , '$gender' , '$occupation' , '$maritalstatus' , '$email' ,
      '$allergies' , '$bloodtype' , '$age' , $phone , $em_cont , '$address' , $password , 'no' , 'no' , 'no')";
    $i = mysqli_query($connect , $ins);

    header("location: /MediCoNew/shared/login.php");



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
    <link rel="stylesheet" href="../CSS/patient_registration_form.css">
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
    <h1 class="h1_text" id="Requests">Registration</h1>
    <div class="conent">
        <form method="post">
            <label for="name">First Name:</label>
            <input type="text" id="name" name="fname" placeholder="Enter name...">
            <label for="name">Last Name:</label>
            <input type="text" id="name" name="lname" placeholder="Enter name...">
            <label for="Gender">Gender:</label>
            <select id="Gender" name="gender">
                <option value="" hidden>Select your Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <label for="Phone">occupation:</label>
            <input type="text" id="Phone" name="occupation" placeholder="Enter occupation...">
            <label for="Marital Status">Marital Status:</label>
            <select id="Marital Status" name="maritalstatus">
                <option value="" hidden>Select your Marital Status</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
                <option value="Other">Other</option>
            </select>
            <label for="Email">Email:</label>
            <input type="email" id="Email" name="email" placeholder="Enter Email...">
            <label for="Email">Allergies:</label>
            <input type="text" id="Email" name="allergies" placeholder="Enter allergies...">
            <label for="Blood Type">Blood Type:</label>
            <select id="Blood Type" name="bloodtype">
                <option value="" hidden>Select your Blood Type</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <label for="Date of birth">Date of birth:</label>
            <input type="date" id="Date of birth" name="date" placeholder="Enter Date of birth..." min="0">
            <label for="Phone">Phone:</label>
            <input type="tel" id="Phone" name="phone" placeholder="Enter Phone...">
            <label for="Phone">Emergency contact:</label>
            <input type="tel" id="Phone" name="em_cont" placeholder="Enter Phone...">
            <label for="Address">Address:</label>
            <input type="text" id="Address" name="address" placeholder="Enter Address...">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter password...">
            <br> <br>
            <button name="signup" type="submit" id="save-button">Save</button>
        </form>
    </div>

    <script src="JS/script.js"></script>
</body>

</html>