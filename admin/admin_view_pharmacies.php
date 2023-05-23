<?php
include "../shared/conn.php";
//include "../shared/login.php";
if (isset($_SESSION['admin'])) {
?>

<?php
    $qry="SELECT * FROM `pharmacy` ";
$rslt=mysqli_query($connect,$qry);


if(isset($_GET['delete'])){
    $id_of_pharmacy = $_GET['delete'];




$delete = "DELETE FROM `pharmacy` WHERE id = $id_of_pharmacy";
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
    <title>Medico</title>

</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="../Images/medico.png" alt="Medico Logo"></a>
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
    <h1 class="h1_text" id="Requests">Pharmacies <a href="pharmacy_registration_form.php"><button>create pharmacy
                account</button></a></h1>
                
    <table>
        <div>
        <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>View pharmacy profile</th>
                <th>Edit pharmacy</th>
                <th>Delete pharmacy</th>
                <th>Block pharmacy</th>
            </tr>
                </div>
        </thead>
        <?php while ($row=mysqli_fetch_array($rslt)) {?>
        <tbody>
            
            <tr>
                <td> <?php   echo $row['id']?></td>
                <td> <?php   echo $row['name']?></td>
                <td><a href="pharmacy_profile.php?view=<?php echo $row['id'];?> ">View profile</a></td>
                <td><a href="edit_pharmacy_profile_from_admin.php?edit=<?php echo $row['id'];?> ">Edit profile</a></td>
                <td><a href="admin_view_pharmacies.php?delete=<?php echo $row['id'];?> ">Delete</a></td>
                <td><a href="#">Block</a></td>
            </tr>
            <?php
                }
            
                ?>
                </tbody>
    </table>

    <?php } ?>
 
 
    <script src="../JS/script.js"></script>
    
</body>

</html>