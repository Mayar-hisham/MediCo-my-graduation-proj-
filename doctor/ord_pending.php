<?php 
include "../shared/conn.php";

if (isset($_SESSION["doctor"])) {

    $select ="SELECT * FROM `images` WHERE activity = 'yes'  AND d_id = '".$_SESSION['did']."' ";

    $sel = mysqli_query($connect , $select);

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
            <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" height="100px" width="200px" alt="Medico Logo"></a>
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
    <h1 class="h1_text" id="Requests">Pending Orders</h1>
    <table>
        <thead>
            <tr>
                <th>Delivery Address</th>
                <th>Date of order</th>
                <th>Time of oredr</th>
                <th>Prescription</th>
                <th>Cancel oredr</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sel as $s){ ?>
            <tr>
                <td><?php echo $s['patient_address']; ?></td>
                <td><?php echo $s['date_of_order']; ?></td>
                <td><?php echo $s['time_of_order']; ?></td>
                <td><img height="100px" width="100px" src="../upload/<?php echo $s['image']; ?>"></td>
                <td><a href="ord_pending.php?cancel=<?php echo $s['id'] ?>">Cancel Order</a></td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
    <?php }?>
   
    <script src="../JS/script.js"></script>
</body>

</html>