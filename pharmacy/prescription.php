<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
    <link rel="stylesheet" href="../CSS/footer.css">

    <title>Medico</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="../pharmacy/pharmacy_view.php">Home</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Help and Support</a></li>
            <li><a href="../shared/login.php?bbye='1'">Logout</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!--the form -->

    <center>
        <img style="width: 500px;height:500px; margin-top:50px" src="../upload/<?php echo $row['image']; ?> ">

    </center>
    <a href="./requests.php"><button style="margin-top:20px; margin-bottom:20px; margin-left:700px; background-color: #4c87af; color: white; font-size: 25px; padding: 10px 20px; border: none; border-radius: 25px; cursor: pointer;">Back</button></a>
    <!-- <form class="form" method="POST" action="">
        <label for="nationalId">Enter Patient Email:</label>
        <input name="pemail" type="number" id="nationalId" name="nationalId" placeholder="">

        <label for="nationalId">Enter Patient ID:</label>
        <input name="pid" type="number" id="nationalId" name="nationalId" placeholder="">

        <button name="go" type="submit">Go</button>
    </form> -->
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
<?php
include "../shared/conn.php";

if (isset($_SESSION['pharmacy'])) {

    if (isset($_GET['view'])) {

        $id = $_GET['view'];

        $select = "SELECT * FROM `images` WHERE activity = 'yes' AND id = $id ";
        $sel = mysqli_query($connect, $select);
        $row = mysqli_num_rows($sel);
?>
<?php
    }
}
?>