<?php
include '../shared/conn.php';

if(isset($_POST['signup'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $maritalstatus = $_POST['maritalstatus'];
    $email = $_POST['email'];
    $allergies = $_POST['allergies'];
    $bloodtype = $_POST['bloodtype'];
    $age = $_POST['age']; 
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];


    $ins= "INSERT INTO `patient` VALUES( Null , '$firstname',
     '$lastname' , '$gender' , '$maritalstatus' , '$email' ,
      '$allergies' , '$bloodtype' , $age , $phone , '$address' , $password)";
    $i = mysqli_query($connect , $ins);

    if($i){
    echo "done";   
    }else{
        echo"no".mysqli_error($connect);
    }



}
?>

<center>
<div class="container">
    <form method="POST">
        <h4>Sign Up</h4>
        
        <label>First Name</label><br>
        <input type="text" name="firstname" placeholder="type your name ...">

        <br>

        <label>Last Name</label><br>
        <input type="text" name="lastname" placeholder="type your name ...">
        <br>

        <label>Gender</label><br>
        <input type="text" name="gender" placeholder="type your email ...">

        <br>

        <label>Marital Status</label><br>
        <input type="text" name="maritalstatus" placeholder="type your email ...">

        <br>

        <label>Email</label><br>
        <input type="email" name="email" placeholder="type your email ...">

        <br>

        <label>Allergies</label><br>
        <input type="text" name="allergies" placeholder="type your email ...">

        <br>
        
        <label>Blood Type</label><br>
        <input type="text" name="bloodtype" placeholder="create a password ...">

        <br>

        <label>Age</label><br>
        <input type="numbers" name="age" placeholder="type your email ...">

        <br>

        <label>Phone</label><br>
        <input type="numbers" name="phone" placeholder="type your email ...">

        <br>

        <label>Address</label><br>
        <input type="text" name="address" placeholder="type your email ...">

        <br>

        <label>password</label><br>
        <input type="password" name="password" placeholder="type your email ...">

        <br>

        <button name="signup">Confirm</button>

    </form>
    </div>
</center>