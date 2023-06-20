<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- <link rel="stylesheet" href="../CSS/The Electronic Medical History.css"> -->
    <link rel="stylesheet" href="../CSS/order_tracking.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <title>Medico</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="./doctor_home.php">Home</a></li>
            <li><a href="../shared/doctors.php">Doctors</a></li>
            <li><a href="#">Order Medicine</a></li>
            <li><a href="../shared/order_medicine.php">Contact Us</a></li>
            <li><a href="#">Help and Support</a></li>
            <li><a href="../shared/login.php?bye='1'">Logout</a></li>
        </ul>
        <!-- <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div> -->
    </nav>
    <div class="header" style="display: flex; align-items: center; background-color: #2c73ae9c; color: rgb(4, 29, 151); padding: 15px; margin-top: 12px;">
        <div class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <h2 style="text-align: center; font-size: 30px; margin-left: 600px; padding: 10px;">Your Orders</h2>

    </div>
    <div class="cont1">
        <div class="content">
            <div class="container_img">
                <div class="image">
                    <span><img src="../Images/letters-1459347_1280.png" alt="Order received"></span>
                    <p><a href="./ord_pending.php">Orders pending</a></p>
                </div>
                <div class="image">
                    <span><img src="../Images/medical-delivery-logo-icon-design-can-be-used-as-complement-to-125310061.jpg" alt="Orders on way"></span>
                    <p><a href="./ord_onway.php">Orders on way</a></p>
                </div>
                <div class="image">
                    <span><img src="../Images/order rec icon.webp" alt="Order accepted"></span>
                    <p><a href="./ord_rec.php">Order received</a></p>
                </div>
            </div>
        </div>
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
    <script src="../JS/script.js"></script>
</body>

</html>