<?php
include '../shared/conn.php';

if(isset($_POST['signup'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $pp = $_POST['pp'];
    $address = $_POST['address'];
    $ds = $_POST['ds'];
    $email = $_POST['email'];
    $specialization = $_POST['specialization']; 
    $password = $_POST['password'];


    $ins= "INSERT INTO `doctors` VALUES( Null , '$firstname',
     '$lastname' , $age , '$pp' , '$address' ,
      '$ds' , '$email' , '$specialization' , $password)";
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

        <label>Age</label><br>
        <input type="numbers" name="age" placeholder="type your email ...">

        <br>

        <label>Profession Practice</label><br>
        <input type="text" name="pp" placeholder="type your email ...">

        <br>

        <label>Address</label><br>
        <input type="text" name="address" placeholder="type your email ...">

        <br>

        <label>Doctor Syndicate</label><br>
        <input type="text" name="ds" placeholder="type your email ...">

        <br>
        
        <label>Email</label><br>
        <input type="email" name="email" placeholder="create a password ...">

        <br>

        <label>Specialization</label><br>
        <input type="text" name="specialization" placeholder="type your email ...">

        <br>

        <label>password</label><br>
        <input type="password" name="password" placeholder="type your email ...">

        <br>

        <button name="signup">Confirm</button>

    </form>
    </div>
</center>