<?php
include "../shared/conn.php";

?>
<?php
$qry = "SELECT * FROM `doctors` WHERE accepted ='yes'";
$rslt = mysqli_query($connect, $qry);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `doctors` WHERE id = $id";
    $del = mysqli_query($connect, $delete);
}

if (isset($_GET['block'])) {
    $id = $_GET['block'];
    $delete = "UPDATE `doctors` SET blocked = 'yes' WHERE id = $id";
    $del = mysqli_query($connect, $delete);
}

if (isset($_GET['unblock'])) {
    $id = $_GET['unblock'];
    $delete = "UPDATE `doctors` SET blocked = 'no' WHERE id = $id";
    $del = mysqli_query($connect, $delete);
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
            <img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo">
        </div>
        <ul class="nav-links">
            <li><a href="./admin_home.php">Home</a></li>
            <li><a href="../shared/login.php?bbye='1'">Logout</a></li>
        </ul>
    </nav>

    <h1 class="h1_text" id="Requests">Doctors</h1>
    </div>

    <div class="content">

        <div class="card-container">
            <?php while ($row = mysqli_fetch_array($rslt)) { ?>
                <div class="card_doctors">
                    <img src="../upload/<?php echo $row['image'] ?>" alt="Doctor's photo">

                    <div class="card-text">

                        <h3>Name: <?php echo $row['dfirst_name']    .  $row['dlast_name']   ?></h3>
                        </td>
                        <p>specialization: <?php echo $row['specialization']  ?></p>

                        <a href="view_doctors_for_admin.php?delete=<?php echo $row['id']; ?> "><button class="delete">Delete</button></a>
                        <a href="doctor_registration_form_for_admin.php?edit=<?php echo $row['id']; ?>"> <button class="edit">Edit</button></a>
                        <a href="vieww_doctor_profile_from_admin.php?view=<?php echo $row['id']; ?> "><button class="view">VIEW</button></a>
                        <?php if ($row['blocked'] == 'yes') { ?>
                            <td><a href="view_doctors_for_admin.php?unblock=<?php echo $row['id']; ?> "><button class="block">Unblock</button></a></td>

                        <?php } else { ?>
                            <td><a href="view_doctors_for_admin.php?block=<?php echo $row['id']; ?> "><button class="block">Block</button></a></td>

                        <?php  } ?>




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