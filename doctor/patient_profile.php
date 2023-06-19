<?php
include "../shared/conn.php";


if (isset($_SESSION['doctor'])) {  

?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../CSS/footer.css">
		<link rel="stylesheet" href="../CSS/style.css">
		<link rel="stylesheet" href="../CSS/patient_profile.css">
		<title>Medico</title>
	</head>

	<body>
		<nav>
			<div class="logo">
				<a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" height="100px" width="200px" alt="Medico Logo"></a>
			</div>
			<ul class="nav-links">
				<li><a href="doctor_home.php">Home</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Help and Support</a></li>
				<li><a href="../shared/login.php?goodbye='1'">Logout</a></li>
			</ul>
			<div class="burger">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
		</nav>

		<div class="header">
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<?php

			if (isset($_POST['go'])) {
				$id = $_POST['pid'];
				$mid = $_POST['mid'];



				$sql = "SELECT * FROM `patient`
 JOIN `medical_profile` ON 
  patient.pid = medical_profile.patient_id
 JOIN `personal_hostory` ON 
  medical_profile.m_id = personal_hostory.medical_profile_id 
 JOIN `past_history` ON
 medical_profile.m_id = past_history.medical_profile_id
 JOIN `family_history` ON
 medical_profile.m_id = family_history.medical_profile_id
 JOIN `clinical_history` ON
 medical_profile.m_id = clinical_history.medical_profile_id 
 JOIN `surgical_history` ON
 medical_profile.m_id = surgical_history.medical_profile_id 

  WHERE patient.pid = $id and medical_profile.m_id = $mid and patient.has_emh = 'yes'";
				$result = mysqli_query($connect, $sql);

				if($result){

				$numberOfRows = mysqli_num_rows($result);

				$r = mysqli_fetch_assoc($result);
				if ($numberOfRows > 0) {
					$_SESSION["patient_profile_access"] = $id && $mid;
					$_SESSION['mpfid'] = $r['medical_profile_id'];
					$_SESSION['id'] = $r['patient_id'];
					$_SESSION['dob'] = $r['pdate_of_birth'];
				}


				//if ($result) {echo "ok";}else{echo "no".mysqli_error($connect);}
			?>

						<h2>Name : <?php echo $r['first_name']; ?></h2>
						<h2>Age : <?php echo $_SESSION['dob']; ?></h2>
						<h2>Blood Group : <?php echo $r['blood_type']; ?></h2>
						<div class="search-bar">
							<button><a href="./doctor_form.php"><img src="../Images/plus_icon.png" alt="Add"></a></button>
						</div>
		</div>

		<div class="navbar">

			<a href="TheElectronicMedicalHistory.php">View EMH</a>
		</div>
<br><br><br><br><br><br>
		<div class="content">
			<div class="profile-card">
			<img width="200px" height="200px" src="../upload/ <?php echo $r['image'] ?> " alt="patient's photo">
				<h2><a href="your-profile-link" style="margin-left: 25px;"><?php echo $r['first_name']; ?><?php echo $r['last_name']; ?>. </a></h2>
				<div class="profile-details">
					<h3>Current Illness: <?php echo $r['suffers']; ?></h3>

					<h3>Address: <?php echo $r['address']; ?></h3>

					<h3>Phone Number : <?php echo $r['phone']; ?></h3>

					<h3>Occupation : <?php echo $r['occupation']; ?></h3>

					<h3>Emergency Contacts : <?php echo $r['emergency_contact']; ?></h3>

				</div>
			</div>

		<?php 
					$selec = "SELECT * FROM `doctor_diagnosis` 
					JOIN `doctors` ON doctors.id = doctor_diagnosis.doctor_id
					WHERE doctor_diagnosis.medical_profile_id = $mid";
		$s = mysqli_query($connect , $selec);?>

			<br> <br> <br> <br> <br> <br>
			<div class="card-container">
			<?php foreach($s as $r){ ?>
				<div class="card">
				<h6 style="color: white;">Doctor Specialization:</h6><div class="card-header"><?php echo $r['specialization']; ?></div>
                      <h6 style="color: white;">Diagnosis Date:</h6><p><?php echo $r['date']; ?></p>
                      <h6 style="color: white;">Diagnosis:</h6><p><?php echo $r['diagnosis']; ?></p>
                      <h6 style="color: white;">Doctor Name:</h6><p><?php echo $r['dr_fname']; ?> </p>
				</div> 
				<?php } ?>
			</div>


		</div>



<?php  }}else{
					echo"something wrong";
				
				}?>


<script src="JS/script.js"></script>
<footer class="sticky-footer">
        <div>
            <h6>Copyright &copy Medico-2023</h6>
        </div>
               <div>
               <h4 class="_14">  &nbsp  &nbsp  &nbsp CONTACT US:</h4>
      
                  <br>    &nbsp  &nbsp PHONE NO.: 01008775960 <br>
                   <br>    &nbsp  &nbsp EMAIL: MediCo23@gmail.com
</div>
<br>
<div class="footer-social-icons">
  <h4 class="r"> &nbsp &nbspFOLLOW US ON</h4>
  <br>
  <ul class="social-icons">
    <li><a href="www.facbook.com">&nbsp<img width=30px hight=40px
          src="../Images/icona1.png"></a></li>
    <li><a href="www.instagram.com"><img width=30px hight=40px
          src="../Images/icona2.png"></a></li></li>
    <li><a href="www.twitter.com"><img width=30px hight=40px
          src="../Images/twitter.jpg"></a></li>
</ul>
</div>
    </footer>




	<?php  }?>

</body>

</html>