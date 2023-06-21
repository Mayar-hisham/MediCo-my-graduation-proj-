<?php
include "../shared/conn.php";

if (isset($_SESSION["doctor"])) {

    $select = "SELECT * FROM `orders` WHERE activity = 'no'  AND opatient_id = '" . $_SESSION['did'] . "' ";

    $sel = mysqli_query($connect, $select);

    $num = mysqli_num_rows($sel);
    $row = mysqli_fetch_assoc($sel);



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/style.css">
        <link rel="stylesheet" href="../CSS/footer.css">
        <link rel="stylesheet" href="../CSS/pharmacy's view.css">
        <link rel="stylesheet" href="../CSS/style.css">
        <title>Medico</title>

    </head>

    <body>
        <nav>
            <div class="logo">
                <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
            </div>
            <ul class="nav-links">
                <li><a href="./doctor_home.php">Home</a></li>
                <li><a href="../shared/login.php?bbye='1'">Logout</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <h1 class="h1_text" id="Requests">Recieved Orders</h1>
        <table>
            <thead>
                <tr>
                    <th>Delivery Address</th>
                    <th>Date of Delivery</th>
                    <th>Time of Delivery</th>
                    <th>Prescription</th>
                    <th>Pharmacy Message</th>
                    <th>Delivery man phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sel as $s) { ?>
                    <tr>
                        <td><?php echo $s['patient_address']; ?></td>
                        <td><?php echo $s['dday']; ?></td>
                        <td><?php echo $s['dtime']; ?></td>
                        <td><img height="100px" width="100px" src="../upload/<?php echo $s['prescription']; ?>"></td>
                        <td><?php echo $s['message']; ?></td>
                        <td><?php echo $s['dphone']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
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
    <script src="../JS/script.js"></script>
    </body>

    </html>