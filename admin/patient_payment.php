<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">

    <title>Medico</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="../admin/admin_home.php">Home</a></li>
            <li><a href="../shared/login.php?bbye='1'">Logout</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!--the form -->


    <form class="form" method="POST" action="">
        <label for="nationalId">Enter Patient Email:</label>
        <input name="pemail" type="text">

        <label for="nationalId">Enter Patient ID:</label>
        <input name="pid" type="number">

        <button name="go" type="submit">Go</button>
    </form>
    <script src="JS/script.js"></script>
</body>

</html>
<?php
include "../shared/conn.php";

if (isset($_SESSION["admin"])) {

    if (isset($_POST['go'])) {
        $pemail = $_POST['pemail'];
        $pid = $_POST['pid'];

        $select = "SELECT * FROM `patient` WHERE email = '$pemail' and pid = '$pid' ";
        $sel = mysqli_query($connect, $select);

        // if($sel){
        $alter = "UPDATE `patient` SET paid = 'yes' WHERE pid = $pid and email = '$pemail'";
        $alt = mysqli_query($connect, $alter);
        if ($alt) {
            echo "done";
        } else {
            echo "something went wrong";
        }
    }
?>
<?php } ?>