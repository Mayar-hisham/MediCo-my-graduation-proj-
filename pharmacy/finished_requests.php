<?php

include "../shared/conn.php";


if (isset($_SESSION['pharmacy'])) {

    $select = "SELECT * FROM `finished_orders` 
    JOIN `orders` ON finished_orders.id_of_pending = orders.id_of_order 
    JOIN `patient` ON orders.opatient_id = patient.pid";
    $sel = mysqli_query($connect , $select);


    if(isset($_GET['delete'])){
        $id_of_order = $_GET['delete'];




$delete = "DELETE FROM `orders` WHERE id_of_order = $id_of_order";
        $del = mysqli_query($connect , $delete);

        $dlt = "DELETE FROM `finished_orders` WHERE id_of_pending = $id_of_order";
        $dl = mysqli_query($connect , $dlt);

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
            <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" height="100px" width="200px" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="./pharmacy_view.php">Home</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Help and Support</a></li>
            <li><a href="../shared/login.php?gbye='1'">Logout</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <h1 class="h1_text" id="Requests">Finished Requests</h1>

    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>ID of pending</th>
                <th>Date of delivery order</th>
                <th>time of delivery order</th>
                <th>customer phone</th>
                <th>customer Address</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sel as $s){ ?>
            <tr>
                <td><?php echo $s['id']; ?></td>
                <td><?php echo $s['id_of_order']; ?></td>
                <td><?php echo $s['date_of_accept']; ?></td>
                <td><?php echo $s['time_of_accept']; ?></td>
                <td><?php echo $s['phone']; ?></td>
                <td><?php echo $s['patient_address']; ?></td>
                <td><a href="finished_requests.php?delete=<?php echo $s['id_of_order']; ?>">Delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php }?>
  
    <script src="JS/script.js"></script>
    <footer class="sticky-footer">
        <div>
            <h6>Copyright &copy Medico-2023</h6>
        </div>
               <div>
               <h4 class="_14">  &nbsp  &nbsp  &nbsp CONTACT US:</h4>
      
                  <br>    &nbsp  &nbsp PHONE NO.: 01008775960 <br>
                   <br>    &nbsp  &nbsp EMAIL: MediCo23@gmail.com
</div>
<br>
<div class="footer-social-icons">
  <h4 class="r"> &nbsp &nbspFOLLOW US ON</h4>
  <br>
  <ul class="social-icons">
    <li><a href="www.facbook.com">&nbsp<img width=30px hight=40px
          src="../Images/icona1.png"></a></li>
    <li><a href="www.instagram.com"><img width=30px hight=40px
          src="../Images/icona2.png"></a></li></li>
    <li><a href="www.twitter.com"><img width=30px hight=40px
          src="../Images/twitter.jpg"></a></li>
</ul>
</div>
    </footer>
</body>

</html>