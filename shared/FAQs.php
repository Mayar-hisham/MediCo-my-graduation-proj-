<?php
include "./conn.php";

$select = "SELECT * FROM `doctors` WHERE accepted ='yes'";
$sel = mysqli_query($connect, $select);

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
  <!-- <link rel="stylesheet" href="../CSS/The Electronic Medical History.css"> -->
  <!-- <link rel="stylesheet" href="../CSS/doctors.css"> -->

  <title>Medico</title>
</head>

<body>
  <nav>
    <div class="logo">
      <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
    </div>
    <ul class="nav-links" style="margin-left:400px">

      <?php if (isset($_SESSION["patient"])) { ?>
        <li><a href="../patient/patient_home.php">Home</a></li>
      <?php  } ?>

      <?php if (isset($_SESSION["doctor"])) { ?>
        <li><a href="../doctor/doctor_home.php">Home</a></li>
      <?php  } ?>

      <?php if (isset($_SESSION["patient"])) { ?>
        <li><a href="../shared/login.php?bye='1'">Logout</a></li>
      <?php  } ?>

      <?php if (isset($_SESSION["doctor"])) { ?>
        <li><a href="../shared/login.php?goodbye='1'">Logout</a></li>
      <?php  } ?>


    </ul>
  </nav>
  <div class="cont1">
    <div class="navbar">

    </div>
  </div>
  <div class="content" style="margin-top: 50px; margin-left: 50px; font-size: x-large;">
    <p style="margin-top: 30px;"> Q: What is (MediCo) a medical history website?</p>
    <p style="margin-top: 30px;"> A: (MediCo) A medical history website is an online platform that allows
      individuals to create and
      maintain their personal health records, including information about their medical conditions,
      medications, allergies, surgeries, and other relevant health data.</p>

    <p style="margin-top: 30px;">Q: Why is it important to have a medical history website?</p>
    <p style="margin-top: 30px;">A: Having a medical history website can help individuals keep track of their
      health information in
      one
      place, which can be useful for managing chronic conditions, communicating with healthcare providers,
      and
      making informed decisions about their care. It can also be helpful in emergency situations when
      quick
      access to medical information is critical.</p>

    <p style="margin-top: 30px;">Q: Is it safe to store personal health information on a medical history
      website?</p>
    <p style="margin-top: 30px;">A: Most reputable medical history websites use encryption and other security
      measures to protect
      users'
      personal health information. However, it's important for individuals to research the privacy
      policies
      and security features of any website before storing sensitive data.</p>
    <p style="margin-top: 30px;">Q: Can I purchase my medicine through the website?</p>
    <p style="margin-top: 30px;">A:Yes, the MediCo website enables users to order all the medications easily and
      conveniently they
      require. This is accomplished by uploading the required medicine prescription to the system, and all
      participating pharmacies will make every effort to fulfil the user's requests.</p>

    <p style="margin-top: 30px;">Q: What would transpire if my order wasn't in stock?</p>
    <p style="margin-top: 30px;">A:When your order becomes ready, it will be pinded and you will receive a
      prompt message.</p>

    <p style="margin-top: 30px;">Q: Does the medication arrive continuously each month?</p>
    <p style="margin-top: 30px; margin-bottom: 30px;">A:Yes, there is a regular monthly supply to people with
      chronic illnesses.</p>
  </div>
  <div>
    <pre style="font-size: x-large; margin-left:30px">
    Contact Us: 
    Phone: 01008775960
    Email: medico@gmail.com
    Social media: 
    <a href="www.facbook.com">Facebook</a>
    <a href="www.instagram.com">Instagram</a>
    <a href="www.twitter.com">Twitter</a>
    </pre>
  </div>
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
  <script src="JS/script.js"></script>
</body>

</html>