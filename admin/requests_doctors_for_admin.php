<?php
include "../shared/conn.php";

if (isset($_SESSION['admin'])) {

    $select = "SELECT * FROM `doctors` WHERE accepted = 'no'";
    $sel = mysqli_query($connect , $select);

    $num = mysqli_num_rows($sel);
    $row = mysqli_fetch_assoc($sel);

    
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
    
    $delete = "DELETE FROM `doctors` WHERE id = '".$_GET['delete']."'";
        $del = mysqli_query($connect , $delete);
    
    }

    if(isset($_GET['accept'])){
        $id = $_GET['accept'];
    
    $dele = "UPDATE `doctors` SET accepted = 'yes' WHERE id = '".$_GET['accept']."'";
        $d = mysqli_query($connect , $dele);
    
    }

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
            <li><a href="./admin_home.php">Home</a></li>
            <li><a href="../shared/login.php?bbye='1'">Logout</a></li>
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
                <th>Name</th>
                <th>View registeration form</th>
                <th>Accept request</th>
                <th>Reject request</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sel as $s){ ?>
            <tr>
                <td><?php echo $s['id']; ?></td>
                <td><?php echo $s['dfirst_name'].$s['dlast_name']; ?></td>
                <td><a href="vieww_doctor_profile_from_admin.php?view=<?php echo $s['id'] ?>">View</a></td>
                <td><a href="requests_doctors_for_admin.php?accept=<?php echo $s['id'] ?>">Accept request</a></td>
                <td><a href="requests_doctors_for_admin.php?delete=<?php echo $s['id'] ?>">Reject request</a></td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
    <?php } ?>
   
    <script src="../JS/script.js"></script>
</body>

</html>