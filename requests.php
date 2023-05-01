<?php 
include "shared/conn.php";

if (isset($_SESSION['pharmacy'])) {


    $select = "SELECT * FROM `images`";
    $sel = mysqli_query($connect , $select);

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/pharmacy's view.css">
    <title>Pharmacy's View</title>

</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="Images/medico.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="home.html">Home</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Help and Support</a></li>
            <li><a href="home.html">Logout</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <h1 class="h1_text" id="Requests">Requests</h1>
    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Date</th>
                <th>Name</th>
                <th>Delivery Area</th>
                <th>Accept</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sel as $s){  ?>
            <tr>
                <td><?php echo $s['id']; ?></td>
                <td><?php echo $s['date_of_order']; ?></td>
                <td><?php echo $s['patient_id']; ?></td>
                <td><?php echo $s['patient_address']; ?></td>
                <td><a href="sending_order_accepted.php?send=<?php echo $s['id']; ?>">Accept</a></td>
                <td><a href="requests.php?delete=<?php echo $s['id']; ?>">Ac</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php } ?>
    <script src="JS/script.js"></script>
</body>

</html>