<?php
include './shared/conn.php';


if(isset($_POST['login'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $select = "SELECT * FROM `patient` WHERE email = '$email' and password = '$password'";

    $selectQuery = mysqli_query($connect, $select);

    $numberOfRows = mysqli_num_rows($selectQuery);

    $row = mysqli_fetch_assoc($selectQuery);
    if($numberOfRows > 0){
        $_SESSION["patient"] = $email;
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['id'] = $row['id'];
        // echo  $_SESSION['name'] ;
      //  $dir = isset($_GET['dir']) ? $_GET['dir'] : "/ultras/main.php";
        header("location: /MediCo/patient/pmain.php");
    }
  


  else{

    if(isset($_POST['login'])){
      $email = $_POST["email"];
      $password = $_POST["password"];
      $select = "SELECT * FROM `doctors` WHERE email = '$email' and password = '$password'";

      $selectQuery = mysqli_query($connect , $select);

      $numberOfRows = mysqli_num_rows($selectQuery);

      $row = mysqli_fetch_assoc($selectQuery);
      if($numberOfRows > 0){
          $_SESSION['doctor'] = $email;
          $_SESSION['first_name'] = $row['first_name'];
          $_SESSION['id'] = $row['id'];

         // echo $_SESSION['admin'];

        //  $dir = isset($_GET['dir']) ? $_GET['dir'] : "/ultras/main.php";
          header("location: /MediCo/doctor/dmain.php");
        }
          
          else{?>
        <div class="alert alert-danger" role="alert">
      <?php  echo "Wrong Email or Password";?>
      
    </div>
    <?php }
  
      }
     
    }
  }

?>




<!DOCTYPE html>
<html >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="Doctor.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>
<body>
	<header>
    
  

 <header id="header-wrap">
     
        <!-- Navbar Start -->
       <div id="navbar">
         <img  id= "logoo" src="imgs/medico.png" alt="logo" width="200"> 
  <a href="#home">Contact</a>
  <a href="#news">About us</a>
  <a href="#lo">Login</a>
  <a href="Register.html">Register</a>
  <a href="Medico home.html">Home</a>
  <script>
    var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>

</div>
	<script>const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
}); </script>


	
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signUp">
				<form class="form-inline">
					<label for="chk" aria-hidden="true">Sign up</label>
					<h1>Hello There!</h1>
					<p>Please, Enter your personal details and start journey with us :) </p>
					<input type="text" name="txt" placeholder="First Name" required="">
					 <input type="text" name="txt" placeholder="Last Name" required="">
					 <select required>
        <option value="" disabled selected hidden>Choose Your Gender...</option>
        <option>Male</option>
        <option>Female</option>
    </select>
                        <input  type="tel" name="phone" placeholder="+201145569697" required="">
    					<input type="text" name="txt" placeholder="Address" required="">
					    <input type="date" id="birthday" name="birthday"required="">					

					<select required>
        <option value="" disabled selected hidden>What Is Your Martial Status?</option>
        <option>Single</option>
        <option>Married</option>
        <option>Widowed</option>
        <option>Divorced</option>

    </select>
					<select required>
					<option value="" disabled selected hidden>Do You Have Any Allergies?</option>
        <option>Yes</option>
        <option>No</option>
    </select>
					<select required>
        <option value="" disabled selected hidden>Choose Your Blood Type....</option>
        <option>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>AB+</option>
        <option>AB-</option>
        <option>O+</option>
        <option>O-</option>

    </select>
    			    <input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
<input type="password" name="pswd" placeholder="Confirm Password" required="">
					<button>Sign up</button>
				</form>
			</div>
<footer>
		
		<p>
	Copyright ©2023 Medico. Terms and Conditions and Privacy Policy.
</p>
</footer>

			<div class="logIn">

				<form id=lo>
					<label for="chk" aria-hidden="true">Login</label>
					<h2>Welcome Back!</h2>
					<p id=p2>💜 We Miss You 💜<br>To keep connected with us please login with your personal info</p>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			

	</div>
	


</body>



</html>