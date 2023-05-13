<?php 
include "../shared/conn.php";

if (isset($_SESSION['admin'])) {

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
            <li><a href="#">Logout</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!--first section-->


    <h1 class="h1_text">Wellcome Admin</h1>
    <div class="container_img">
        <div class="image">
            <a href="admin_view_doctors.html"><img src="../Images/10.png"></a>
            <a href="admin_view_doctors.php">Doctors</a>
        </div>
        <div class="image">
            <a href="admin_view_pharmacies.php"><img src="../Images/pharmacy logo.png"></a>
            <a href="admin_view_pharmacies.php">Pharmacies</a>
        </div>
        <div class="image">
            <a href="admin_view_patients.php"><img src="../Images/9.jpg"></a>
            <a href="admin_view_patients.php">Patients</a>
        </div>
    </div>

    <?php } ?>
    <script src="../JS/script.js"></script>
</body>

</html>