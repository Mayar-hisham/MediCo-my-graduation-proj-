<?php
include '../shared/conn.php';

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

    
$sel= "SELECT * FROM `pharmacy` WHERE email = '$email' AND password = '$password'";
$s = mysqli_query($connect , $sel);

if($s){
    echo "yes";
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