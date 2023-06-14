<?php
include "../shared/conn.php";

if (isset($_SESSION["patient"])) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
    <link rel="stylesheet" href="../CSS/pharmacy's view.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Medico</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="../Images/medico.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="../shared/login.php?bye='1'">Logout</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!--first section-->


    <h1 class="h1_text">Medico</h1>
    <div class="container_img">

    <?php
    $sel = "SELECT * FROM `patient` JOIN
    `medical_profile` ON patient.pid = medical_profile.m_id
         
    WHERE medical_profile.patient_id = '".$_SESSION['pid']."'
    OR patient.pid = '".$_SESSION['pid']."'";
    $s = mysqli_query($connect , $sel);
    $num= mysqli_num_rows($s);
    $row = mysqli_fetch_assoc($s);

    if($num > 0){

     if($row['paid'] == "yes" && $row['has_emh'] == "no" && 
$row['pid'] = $_SESSION['pid'] && $row['patient_id'] = $_SESSION['pid'] ){?>

<div class="image">
<a href="./The_EMH_for_patient.php"><img src="../Images/EMH.png"></a>
<a href="./The_EMH_for_patient.php">Fill in Your EMH</a>
</div>


<?php } elseif($row['has_emh'] == "yes"){?>

<div class="image">
<a href="./EMH_view_patient.php"><img src="../Images/EMH.png"></a>
<a href="./EMH_view_patient.php">View your EMH</a>
</div>



<?php } }else{ 
    
    $sel = "SELECT * FROM `patient` 
    WHERE pid = '".$_SESSION['pid']."'";
    $s = mysqli_query($connect , $sel);
    $num= mysqli_num_rows($s);
    $row = mysqli_fetch_assoc($s);
    
    if($row['paid'] == "yes" && $row['has_emh'] == "no"){ ?>

<div class="image">
    <a href="./start_medical_profile.php"><img src="../Images/EMH.png"></a>
    <a href="./start_medical_profile.php">Create your EMH</a>
</div><?php } else{ ?>
    <div class="image">
            <a href="../shared/payment.html"><img src="../Images/EMH.png"></a>
            <a href="../shared/payment.html">Know more about EMH
                <br> and payment methods</a>
        </div>
   <?php }}?>


            <?php
    $sel = "SELECT * FROM `patient` WHERE pid = '".$_SESSION['pid']."'";
    $s = mysqli_query($connect , $sel);
    $num= mysqli_num_rows($s);
    $row = mysqli_fetch_assoc($s);
    if($row['has_emh'] == "yes"){ ?>
        <div class="image">
            <a href="./patient_profile_for_patient.php"><img src="../Images/my-profile-icon-png-3.jpg"></a>
            <a href="./patient_profile_for_patient.php">My profile</a>
        </div>
<?php }else{?>
            <div class="image">
            <a href="./patient_profile_without_emh.php"><img src="../Images/my-profile-icon-png-3.jpg"></a>
            <a href="./patient_profile_without_emh.php">My profile</a>
        </div>
<?php } ?>



        <div class="image">
            <a href="../shared/order_medicine.php"><img
                    src="../Images/medical-delivery-logo-icon-design-can-be-used-as-complement-to-125310061.jpg"></a>
            <a href="../shared/order_medicine.php">Order medicine</a>
        </div>

        
        <div class="image">
            <a href="./order_tracking.php"><img
                    src="../Images/medical-delivery-logo-icon-design-can-be-used-as-complement-to-125310061.jpg"></a>
            <a href="./order_tracking.php">Track your Orders</a>
        </div>
    </div>
    <footer>
        <div class="sticky-footer">
            <div class="footer-content">
                <p>Follow Us On</p>
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

    <?php } ?>
    <script src="JS/script.js"></script>
</body>

</html>