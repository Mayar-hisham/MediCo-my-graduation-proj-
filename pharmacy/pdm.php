<?php

include "../shared/conn.php";


if (isset($_SESSION['pharmacy'])) {

    $select = "SELECT * FROM `images`
    JOIN `orders` ON images.id = orders.ord_id 
WHERE order_cd = 'yes' AND orders.pharmacy_id = '" . $_SESSION['phid'] . "'";
    $sel = mysqli_query($connect, $select);


    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];




        $delete = "DELETE FROM `images` WHERE id = $id";
        $del = mysqli_query($connect, $delete);
    }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../CSS/footer.css">
        <link rel="stylesheet" href="../CSS/pharmacy's view.css">
        <title>Pharmacy's View</title>

    </head>

    <body>
        <nav>
            <div class="logo">
                <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" style="height:100px; width:250px; margin-left: 10px;" alt="Medico Logo"></a>
            </div>
            <ul class="nav-links">
                <li><a href="./pharmacy_view.php">Home</a></li>
                <li><a href="../shared/login.php?gbye='1'">Logout</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <h1 class="h1_text" id="Requests">Periodic Delivery Orders</h1>

        <table>
            <thead>
                <tr>
                    <th>Number</th>
                    <th>ID of patient</th>
                    <th>Address</th>
                    <th>presc</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($sel as $s) { ?>
                    <tr>
                        <td><?php echo $s['id']; ?></td>
                        <td><?php echo $s['patient_id']; ?></td>
                        <td><?php echo $s['patient_address']; ?></td>
                        <td><a href="periodic_del.php?view=<?php echo $s['id']; ?>">view prescription</a></td>

                        <td><a href="pdm.php?delete=<?php echo $s['id']; ?>">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } ?>

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