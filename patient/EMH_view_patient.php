<?php
include "../shared/conn.php";

if (isset($_SESSION["patient"])) {

  $sl = "SELECT * FROM medical_profile WHERE patient_id = '" . $_SESSION['pid'] . "'";
  $sll = mysqli_query($connect, $sl);
  $num = mysqli_num_rows($sll);
  $r = mysqli_fetch_assoc($sll);

  if ($num > 0) {
    $_SESSION['mpfid'] = $r['m_id'];
  }



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
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">

    <title>Medico</title>
  </head>

  <body>
    <nav>
      <div class="logo">
        <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
      </div>
      <ul class="nav-links">
        <li><a href="./patient_home.php">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Help and Support</a></li>
        <li><a href="../shared/login.php?bye='1'">Logout</a></li>
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


      $sql = "SELECT * FROM patient
 JOIN medical_profile ON 
  patient.pid = medical_profile.patient_id

 WHERE patient.has_emh = 'yes' AND patient.paid = 'yes' AND 
  pid = '" . $_SESSION['pid'] . "'";
      $result = mysqli_query($connect, $sql);

      $numberOfRows = mysqli_num_rows($result);

      $row = mysqli_fetch_assoc($result);

      if ($numberOfRows > 0) {
        //$_SESSION['medi_id'] = $r['medical_p_id'];
      }

      if ($result) {
      ?>
        <h2>Name : <?php echo $row['first_name']; ?></h2>
        <h2>Age : <?php echo $row['pdate_of_birth']; ?></h2>
        <h2>Blood Type : <?php echo $row['blood_type']; ?></h2>
        <h2>Medical Profile ID : <?php echo $row['m_id']; ?></h2>
        <div class="search-bar">

        </div>
    </div>
    <div class="cont1">
      <div class="navbar">
        <a href="../shared/doctors.php">Doctors</a>
        <a href="../shared/order_medicine.php">Order Medicine</a>
        <a href="./order_tracking.php">Track your Orders</a>
        <a href="../shared/payment.html">Payment</a>
        <a href="EMH_view_patient.php">EMH</a>
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

            <?php
            $selec = "SELECT * FROM personal_hostory WHERE prsdate_of_edit = ( SELECT MAX(prsdate_of_edit) FROM personal_hostory ) AND medical_profile_id = '" . $_SESSION['mpfid'] . "'";
            $s = mysqli_query($connect, $selec);
            $numberOfRows = mysqli_num_rows($s);
            $r = mysqli_fetch_assoc($s);

            if ($s) {
            ?>
              <div id="personal-history" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
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

            <?php } ?>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#family-history" aria-expanded="false" aria-controls="family-history">
                <h1 style="font-size: 25px;"> Family History </h1>
              </button>
            </h2>


            <?php
            $selec = "SELECT * FROM family_history WHERE fdate_of_edit = ( SELECT MAX(fdate_of_edit) FROM family_history ) AND medical_profile_id = '" . $_SESSION['mpfid'] . "'";
            $s = mysqli_query($connect, $selec);
            $numberOfRows = mysqli_num_rows($s);
            $r = mysqli_fetch_assoc($s);

            if ($s) {



            ?>


              <div id="family-history" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                  <br>
                  <?php  ?>
                  Date of filling in the data: <span style="margin-left: 20px;"><?php echo $r['fdate_of_edit']; ?></span> <br> <br>
                  Blood Relatives Diseases and connection <br> <br>
                  <?php echo $r['relative1']; ?> <span style="margin-left: 20px;"><?php echo $r['disease1']; ?></span> <br> <br>
                  <?php echo $r['relative2']; ?> <span style="margin-left: 20px;"><?php echo $r['disease2']; ?></span> <br>
                  Additional Infomation: <?php echo $r['add_info']; ?>
                </div>
              </div>
            <?php } ?>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#past-history" aria-expanded="false" aria-controls="past-history">
                <h1 style="font-size: 25px;"> Past History </h1>
              </button>
            </h2>

            <?php
            $selec = "SELECT * FROM past_history WHERE pdate_of_edit = ( SELECT MAX(pdate_of_edit) FROM past_history ) AND medical_profile_id = '" . $_SESSION['mpfid'] . "'";
            $s = mysqli_query($connect, $selec);
            $numberOfRows = mysqli_num_rows($s);
            $r = mysqli_fetch_assoc($s);

            if ($s) {
            ?>
              <div id="past-history" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

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

            <?php } ?>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#surgical-history1" aria-expanded="false" aria-controls="surgical-history1">
                <h1 style="font-size: 25px;"> Surgical History </h1>
              </button>
            </h2>


            <?php
            $selec = "SELECT * FROM surgical_history WHERE sdate_of_edit = ( SELECT MAX(sdate_of_edit) FROM surgical_history ) AND medical_profile_id = '" . $_SESSION['mpfid'] . "'";
            $s = mysqli_query($connect, $selec);
            $numberOfRows = mysqli_num_rows($s);
            $r = mysqli_fetch_assoc($s);

            if ($s) {



            ?>


              <div id="surgical-history1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                  <table>
                    <tr>
                      <th>Date of Procedure</th>
                      <th>Surgery Type</th>
                      <th>Surgeon</th>
                      <th>Medication Prescribed</th>
                      <th>Rehabilitation</th>
                    </tr>
                    <tr>

                      <td><?php echo $r['date_of_procedure']; ?></td>
                      <td><?php echo $r['surgery_type']; ?></td>
                      <td><?php echo $r['surgeon']; ?></td>
                      <td><?php echo $r['medication_prescribed']; ?></td>
                      <td><?php echo $r['rehabilitation']; ?> </td>
                    </tr>
                    <br>
                    <tr>
                      <th>Date of Procedure2</th>
                      <th>Surgery Type2</th>
                      <th>Surgeon2</th>
                      <th>Medication Prescribed2</th>
                      <th>Rehabilitation2</th>
                    </tr>
                    <tr>

                      <td><?php echo $r['date2']; ?></td>
                      <td><?php echo $r['type2']; ?></td>
                      <td><?php echo $r['surgeon2']; ?></td>
                      <td><?php echo $r['medicine2']; ?></td>
                      <td><?php echo $r['rbt2']; ?> </td>
                    </tr>
                    <br>
                    <tr>
                      <th>Date of Procedure3</th>
                      <th>Surgery Type3</th>
                      <th>Surgeon3</th>
                      <th>Medication Prescribed3</th>
                      <th>Rehabilitation3</th>
                    </tr>
                    <tr>
                      <td><?php echo $r['date3']; ?></td>
                      <td><?php echo $r['type3']; ?></td>
                      <td><?php echo $r['surgeon3']; ?></td>
                      <td><?php echo $r['medicine3']; ?></td>
                      <td><?php echo $r['rbt3']; ?> </td>
                    </tr>
                    <br>
                    <tr>
                      <th>Date of Procedure4</th>
                      <th>Surgery Type4</th>
                      <th>Surgeon4</th>
                      <th>Medication Prescribed4</th>
                      <th>Rehabilitation4</th>
                    </tr>
                    <tr>

                      <td><?php echo $r['date4']; ?></td>
                      <td><?php echo $r['type4']; ?></td>
                      <td><?php echo $r['surgeon4']; ?></td>
                      <td><?php echo $r['medicine4']; ?></td>
                      <td><?php echo $r['rbt4']; ?> </td>
                    </tr>
                  </table>
                </div>
              </div>
            <?php } ?>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#surgical-history2" aria-expanded="false" aria-controls="surgical-history2">
                <h1 style="font-size: 25px;"> Clinical history </h1>
              </button>
            </h2>


            <?php
            $selec = "SELECT * FROM clinical_history WHERE cdate_of_edit = ( SELECT MAX(cdate_of_edit) FROM clinical_history ) AND medical_profile_id = '" . $_SESSION['mpfid'] . "'";
            $s = mysqli_query($connect, $selec);
            $numberOfRows = mysqli_num_rows($s);
            $r = mysqli_fetch_assoc($s);

            if ($s) {



            ?>


              <div id="surgical-history2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                  <br>
                  <?php  ?>
                  Date of filling in the data: <span style="margin-left: 20px;"><?php echo $r['cdate_of_edit']; ?></span> <br> <br>
                  Files: <span style="margin-left: 20px;">
                    <img width="200px" height="200px" src="../upload/<?php echo $r['files']; ?>">
                  </span> <br> <br>

                </div>
              </div>
            <?php } ?>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#doctors-diagnosis" aria-expanded="false" aria-controls="doctors-diagnosis">
                <h1 style="font-size: 25px;"> Doctor diagnosis </h1>
              </button>
            </h2>

            <?php
            $selec = "SELECT * FROM doctor_diagnosis 
              JOIN doctors ON doctors.id = doctor_diagnosis.doctor_id
              WHERE doctor_diagnosis.medical_profile_id = '" . $_SESSION['mpfid'] . "'";
            $s = mysqli_query($connect, $selec);
            //$numberOfRows = mysqli_num_rows($s);
            //$r = mysqli_fetch_assoc($s);





            ?>



            <div id="doctors-diagnosis" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">

                <div class="container">
                  <div class="column">
                    <?php foreach ($s as $r) { ?>
                      <div class="card">
                        <h6 style="color: white;">Doctor Specialization:</h6>
                        <div class="card-header"><?php echo $r['specialization']; ?></div>
                        <h6 style="color: white;">Diagnosis Date:</h6>
                        <p><?php echo $r['date']; ?></p>
                        <h6 style="color: white;">Diagnosis:</h6>
                        <p><?php echo $r['diagnosis']; ?></p>
                        <h6 style="color: white;">Doctor Name:</h6>
                        <p><?php echo $r['dr_fname']; ?> </p>
                      </div>
                    <?php } ?>

                  </div>

                </div>

              </div>
            </div>

          </div>

        </div>
      </div>


  <?php

      }
    }

    //} 

  ?>


  <script src="JS/script.js"></script>
  <footer>
    <div class="sticky-footer">
      <div class="footer-content">
        <p style="color:white">Follow Us On</p>
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
  </body>

  </html>