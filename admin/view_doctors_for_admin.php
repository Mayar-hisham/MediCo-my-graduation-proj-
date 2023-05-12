<?php
include "../shared/conn.php";
?>
   <?php
    $qry="SELECT * FROM `doctors` ";
$rslt=mysqli_query($connect,$qry);

if(isset($_GET['delete'])){
    $id = $_GET['delete'];




$delete = "DELETE FROM `doctors` WHERE id = $id";
    $del = mysqli_query($connect , $delete);

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
   
    <div class="content">
        
        <div class="card-container">
             <?php while ($row=mysqli_fetch_array($rslt)) {?>
            <div class="card_doctors">
             <img  src="../Images/pexels-thirdman-5327656.jpg" alt="Person 1">
                
                <div class="card-text">
             
                <h3>Name:  <?php   echo $row['dfirst_name']    .  $row['dlast_name']   ?></h3></td>
                 <p>specialization: <?php   echo $row['specialization']  ?></p>
                 
                 <a href="view_doctors_for_admin.php?delete=<?php echo $row['id'];?> "><button class="delete">Delete</button></a>
                    <a href="edit_doctor_profile_from_admin.html"> <button class="edit">Edit</button></a>
                    <a href="edit_doctor_profile_from_admin.php?view=<?php echo $row['id'];?> "><button class="block">VIEW</button></a> 
                    



                </div>
                
            </div>
                <?php
}
?>
            
    </div>


</div>

    <script src="../JS/script.js"></script>
    
</body>

</html>