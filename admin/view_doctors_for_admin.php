<?php
include "../shared/conn.php";
?>
   <?php
    $qry="SELECT * FROM `doctors` ";
$rslt=mysqli_query($connect,$qry);

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
    <link rel="stylesheet" href="../CSS/doctors.css">
    <title>Medico</title>

</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="../Images/medico.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>
 
    <h1 class="h1_text" id="Requests">Doctors</h1>
    </div>
    <?php while ($row=mysqli_fetch_array($rslt)) {?>
    <div class="content">
        
        <div class="card-container">
            <div class="card_doctors">
                <img src="../Images/pexels-thirdman-5327656.jpg" alt="Person 1">
                
                <div class="card-text">
             
                <h3>Name:  <?php   echo $row['dfirst_name']    .  $row['dlast_name']   ?></h3></td>
                 <p>specialization: <?php   echo $row['specialization']  ?></p>
                 
                    <button class="delete">Delete</button>
                    <a href="edit_doctor_profile_from_admin.html"> <button class="edit">Edit</button></a>
                    <button class="block">Block</button>
                    



                </div>
                
            </div>
            
    </div>
    <?php
}
?>

</div>

    <script src="../JS/script.js"></script>
    
</body>

</html>