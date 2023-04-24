<?php
include "shared/conn.php";

if(isset($_SESSION['doctor'])){  ?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/footer.css">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="stylesheet" href="CSS/patient_profile.css">
	<title>Medico</title>
</head>

<body>
	<nav>
		<div class="logo">
			<a href="#"><img src="Images/medico.png" alt="Medico Logo"></a>
		</div>
		<ul class="nav-links">
			<li><a href="#">Home</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Help and Support</a></li>
			<li><a href="#">Logout</a></li>
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

		if(isset($_POST['go'])){
$id = $_POST['pid'];
$mid = $_POST['mid'];


  
  $sql = "SELECT * FROM `patient`
 JOIN `medical_profile` ON 
  patient.id = medical_profile.patient_id
 JOIN `personal_hostory` ON 
  medical_profile.id = personal_hostory.medical_profile_id 
 JOIN `past_history` ON
 medical_profile.id = past_history.medical_profile_id
 JOIN `family_history` ON
 medical_profile.id = family_history.medical_profile_id
 JOIN `clinical_history` ON
 medical_profile.id = clinical_history.medical_profile_id 
 JOIN `surgical_history` ON
 medical_profile.id = surgical_history.medical_profile_id 
 JOIN `doctor_diagnosis` ON
 medical_profile.id = doctor_diagnosis.medical_profile_id  
 JOIN `doctors` ON
 doctor_diagnosis.doctor_id = doctor_diagnosis.doctor_id
  WHERE patient.id = $id and medical_profile.id = $mid";
  $result = mysqli_query($connect , $sql);

  $numberOfRows = mysqli_num_rows($result);

  $row = mysqli_fetch_assoc($result);
  if($numberOfRows > 0){
      $_SESSION["patient_profile_access"] = $id && $mid;
	  $_SESSION['mid'] = $row['medical_profile_id'];
	  $_SESSION['id'] = $row['patient_id'];
  }


if($result){
  foreach($result as $r) {
?>

		<h2>Name : <?php echo $r['first_name']; ?></h2>
		<h2>Age : <?php echo $r['age']; ?></h2>
		<h2>Blood Group : <?php echo $r['blood_type']; ?></h2>
		<div class="search-bar">
			<input type="text" placeholder="Search">
			<button><img src="Images/plus_icon.png" alt="Add"></button>
		</div>
	</div>

	<div class="navbar">
		<a href="#" class="active">Notifications</a>
		<a href="The Electronic Medical History.html">Medical History</a>
		<a href="#">Doctors</a>
		<a href="#">Orders</a>
		<a href="#">Payment</a>
		<a href="#">Insurance Details</a>
		<a href="TheElectronicMedicalHistory.php">Edits of EMH</a>
	</div>

	<div class="content">
		<div class="profile-card">
			<img src="Images/my-profile-icon-png-3.jpg" alt="Your Profile Image" class="profile-image">
			<h2><a href="your-profile-link" style="margin-left: 25px;"><?php echo $r['first_name']; ?><?php echo $r['last_name']; ?>. </a></h2>
			<div class="profile-details">
				<h3>Current Illness: <?php echo $r['suffers']; ?></h3>

				<h3>Address: <?php echo $r['address']; ?></h3>

				<h3>Phone Number : <?php echo $r['phone']; ?></h3>

				<h3>Occupation : <?php echo $r['occupation']; ?></h3>

				<h3>Emergency Contacts : <?php echo $r['emergency_contact']; ?></h3>

			</div>
		</div>

<?php } foreach($result as $d){ ?>

<br> <br> <br> <br> <br> <br>
		<div class="card-container">
			<div class="card">
				<h2>By DR.<?php echo $d['dfirst_name'];?></h2>
				<p class="date"><?php echo $d['date']; ?></p>
				<h3><?php echo $d['specialization']; ?></h3>
				<p> <?php echo $d['diagnosis']; ?></p>
			</div>
		</div>


	</div>



	<?php }}}}?>
	<script src="JS/script.js"></script>
</body>

</html>