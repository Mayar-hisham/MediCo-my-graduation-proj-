<?php
include "../shared/conn.php";

if (isset($_SESSION["patient"])){

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">

    <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">

    <title>Medico</title>
  </head>

  <body>
    <nav>
      <div class="logo">
        <a href="#"><img src="../Images/medico.png" alt="Medico Logo"></a>
      </div>
      <ul class="nav-links">
        <li><a href="home.html">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Help and Support</a></li>
        <li><a href="home.html">Logout</a></li>
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


        $sql = "SELECT * FROM `patient`
 JOIN `medical_profile` ON 
  patient.pid = medical_profile.patient_id
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
 /*JOIN `doctor_diagnosis` ON
 medical_profile.id = doctor_diagnosis.medical_profile_id */

 WHERE patient.pid = '" . $_SESSION['pid'] . "' 
 and medical_profile.id = '" . $_SESSION['patient_medical_profile_id'] . "' ";
        $result = mysqli_query($connect, $sql);

        $numberOfRows = mysqli_num_rows($result);

				$r = mysqli_fetch_assoc($result);

                if($r){
                    echo "ok";
                }else{
                  echo"reason".mysqli_error($connect);
                }




      ?>
            <h2>Name : <?php echo $r['first_name']; ?></h2>
            <h2>Age : <?php echo $r['pdate_of_birth']; ?></h2>
            <h2>Blood Type : <?php echo $r['blood_type']; ?></h2>
            <div class="search-bar">
              <input type="text" placeholder="Search">
              <a href="doctor_form.html"><button><img src="Images/plus_icon.png" alt="Add"></button></a>
            </div>
    </div>
    <div class="cont1">
      <div class="navbar">
        <a href="#" class="active">Notifications</a>
        <a href="TheElectronicMedicalHistory.php">Medical History</a>
        <a href="doctors.html">Doctors</a>
        <a href="#">Orders</a>
        <a href="#">Payment</a>
        <a href="#">Insurance Details</a>
        <a href="TheElectronicMedicalHistory.php">Edits of EMH</a>
      </div>
      <div class="content">
        <br>
        <br>
        <br>
        <br>
        <h1 style="color: blue; text-align: left;">The Electronic Medical History</h1>




        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#personal-history" aria-expanded="false" aria-controls="personal-history">
                <h1 style="font-size: 25px;"> Personal History</h1>
              </button>
            </h2>
            <div id="personal-history" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="" class="edit_link">EDIT</a>
                <br>
               <?php ?>
                Date of filling in the data: <span style="margin-left: 20px;"><?php echo $r['prsdate_of_edit']; ?></span> <br> <br>
                Height: <span style="margin-left: 20px;"><?php echo $r['height']; ?></span> <br> <br>
                Weight: <span style="margin-left: 20px;"><?php echo $r['weight']; ?></span> <br> <br>
                Do you Drink Caffeine? <span style="margin-left: 20px;"><?php echo $r['caffaien']; ?></span> <br> <br>
                Do you smoke? <span style="margin-left: 20px;"><?php echo $r['smoking']; ?></span> <br> <br>
                Current Medicine <span style="margin-left: 20px;"><?php echo $r['current_medicine']; ?></span> <br> <br>
                What do you suffer from? <span style="margin-left: 20px;"><?php echo $r['suffers']; ?></span>
                <br> <br>
                Do you drink alcohol? <span style="margin-left: 20px;"><?php echo $r['alcohol']; ?></span> <br> <br>
                How many cigarettes per day? <span style="margin-left: 20px;"><?php echo $r['cigarettes_quantity']; ?></span> <br> <br>
                How many pack of cigarettes per day? <span style="margin-left: 20px;"><?php echo $r['cigarettes_packes_quantity']; ?></span> <br> <br>
                Allergies: <span style="margin-left: 20px;"><?php echo $r['allergies']; ?></span> <br> <br>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#family-history" aria-expanded="false" aria-controls="family-history">
                <h1 style="font-size: 25px;"> Family History </h1>
              </button>
            </h2>
            <div id="family-history" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="" class="edit_link">EDIT</a>
                <br>
                <?php  ?>
                Date of filling in the data: <span style="margin-left: 20px;"><?php echo $r['fdate_of_edit']; ?></span> <br> <br>
                Blood Relatives Diseases and connection <br> <br>
                <?php echo $r['relative1']; ?> <span style="margin-left: 20px;"><?php echo $r['disease1']; ?></span> <br> <br>
                <?php echo $r['relative2']; ?> <span style="margin-left: 20px;"><?php echo $r['disease2']; ?></span> <br> <br>
                Additional Infomation: <?php echo $r['add_info']; ?>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#past-history" aria-expanded="false" aria-controls="past-history">
                <h1 style="font-size: 25px;"> Past History </h1>
              </button>
            </h2>
            <div id="past-history" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="" class="edit_link">EDIT</a>
                <br>
                <?php ?>
                Date of filling in the data: <span style="margin-left: 20px;"><?php echo $r['pdate_of_edit']; ?></span> <br> <br>
                past illness: <span style="margin-left: 20px;"><?php echo $r['past_illness']; ?></span> <br> <br>
                past medicine: <span style="margin-left: 20px;"><?php echo $r['past_medicine']; ?></span>
                <br> <br>
                past allergies: <span style="margin-left: 20px;"><?php echo $r['past_allergies']; ?></span> <br> <br>
                past habits: <span style="margin-left: 20px;"><?php echo $r['past_habits']; ?></span> <br> <br>
                past phobia: <span style="margin-left: 20px;"><?php echo $r['past_phobia']; ?></span> <br> <br>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#surgical-history1" aria-expanded="false" aria-controls="surgical-history1">
                <h1 style="font-size: 25px;"> Surgical History </h1>
              </button>
            </h2>
            <div id="surgical-history1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="" class="edit_link">EDIT</a>
                <table>
                  <tr>
                    <th>Date of Procedure</th>
                    <th>Surgery Type</th>
                    <th>Surgeon</th>
                    <th>Medication Prescribed</th>
                    <th>Rehabilitation</th>
                  </tr>
                  <tr>
                  
                    <td><?php echo $r['sdate_of_edit']; ?></td>
                    <td><?php echo $r['surgery_type']; ?></td>
                    <td><?php echo $r['surgeon']; ?></td>
                    <td><?php echo $r['medication_prescribed']; ?></td>
                    <td><?php echo $r['rehabilitation'];?> </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#surgical-history2" aria-expanded="false" aria-controls="surgical-history2">
                <h1 style="font-size: 25px;"> Clinical history </h1>
              </button>
            </h2>
            <div id="surgical-history2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="" class="edit_link">EDIT</a>
                <br>
                <?php  ?>
                Date of filling in the data: <span style="margin-left: 20px;"><?php echo $r['cdate_of_edit']; ?></span> <br> <br>
                Files: <span style="margin-left: 20px;"><?php echo $r['files']; ?></span> <br> <br>

              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#doctors-diagnosis" aria-expanded="false" aria-controls="doctors-diagnosis">
                <h1 style="font-size: 25px;"> Doctor diagnosis </h1>
              </button>
            </h2>
            <div id="doctors-diagnosis" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a href="#" class="edit_link">EDIT</a>
                <div class="container">
                  <div class="column">
                    <div class="card">
                    <?php  ?>
                      <div class="card-header"><?php echo $r['specialization']; ?></div>
                      <p><?php echo $r['date']; ?></p>
                      <p><?php echo $r['diagnosis']; ?></p>
                      <p><?php echo $r['dr_fname'] . $r['dr_lname']; ?> </p>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


<?php
         
 }
?>


<script src="JS/script.js"></script>
  </body>

  </html>