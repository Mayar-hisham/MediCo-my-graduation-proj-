
<?php
include "../shared/conn.php";
if(isset($_GET['view'])){
    $id = $_GET['view'];

    $view="SELECT * FROM `pharmacy` where id=$id";
    $e = mysqli_query($connect , $view);
        $row = mysqli_fetch_assoc($e);
}
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
    <link rel="stylesheet" href="../CSS/pharmacy_profile.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Medico</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="Images/medico.png" alt="Medico Logo"></a>
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


    <h1 class="h1_text">Pharmacy Profile</h1>
    <div class="phar">
        <div class="phar name">
            <p>Name: <?php echo $row['name']; ?></p>
        </div>
        <div class="phar branches">
            <p>Branches: <?php echo $row['address']; ?></p>
        </div>
        <div class="phar contacts">
            <p>Contacts:</p>
            <p>Phone: <?php echo $row['phphone']; ?></p>
            <p>Email: <?php echo $row['email']; ?></p>
        </div>
    </div>
   
    <script src="JS/script.js"></script>
   

</body>

</html>