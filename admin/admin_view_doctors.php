<?php
include "../shared/conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/The Electronic Medical History.css">
    <link rel="stylesheet" href="CSS/pharmacy's view.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Medico</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="./admin_home.php">Home</a></li>
            <li><a href="../shared/login.php?bbye='1'">Logout</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!--first section-->


    <h1 class="h1_text">Doctors</h1>
    <div class="container_img">
        <div class="image">
            <a href="requests_doctors_for_admin.php"><img src="../Images/requests.png"></a>
            <a href="requests_doctors_for_admin.php">Requests</a>
        </div>
        <div class="image">
            <a href="doctor_registration_form_for_admin.php"><img src="../Images/create icon.webp"></a>
            <a href="doctor_registration_form_for_admin.php">Create</a>
        </div>
        <div class="image">
            <a href="view_doctors_for_admin.php"><img src="../Images/view.png"></a>
            <a href="view_doctors_for_admin.php">View</a>
        </div>
    </div>
    <script src="JS/script.js"></script>

</body>

</html>