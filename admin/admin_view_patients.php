<?php
include "../shared/conn.php";




$qry = "SELECT * FROM `patient` ";
$rslt = mysqli_query($connect, $qry);


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = "DELETE FROM `patient` WHERE pid = $id ";
    $del = mysqli_query($connect, $delete);
    if ($del) {
        echo "ok";
    } else {
        echo "You need to delete from database";
    }
    $delete = "DELETE FROM `medical_profile` WHERE patient_id = $id ";
    $del = mysqli_query($connect, $delete);
}
if (isset($_GET['block'])) {
    $id = $_GET['block'];

    $delete = "UPDATE `patient` SET blocked = 'yes' WHERE pid = $id ";
    $del = mysqli_query($connect, $delete);
    if ($del) {
        echo "blocked";
    }
}

if (isset($_GET['unblock'])) {
    $id = $_GET['unblock'];

    $delete = "UPDATE `patient` SET blocked = 'no' WHERE pid = $id ";
    $del = mysqli_query($connect, $delete);
    if ($del) {
        echo "unblocked";
    }
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
            <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
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
    <h1 class="h1_text" id="Requests">Patients</h1>
    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>View patient profile</th>
                <th>View patient medical profile</th>
                <th>Delete</th>
                <th>Block</th>
            </tr>
        </thead>
        <?php while ($row = mysqli_fetch_array($rslt)) { ?>

            <tbody>
                <tr>
                    <td><?php echo $row['pid']  ?></td>
                    <td> <?php echo $row['first_name']    .  $row['last_name']   ?></td>
                    <td><a href="patient_profile_for_admin.php?view=<?php echo $row['pid']; ?> "> View</a></td>
                    
                    <td><?php $select = "SELECT * FROM `patient` WHERE paid = 'yes' 
                     AND has_emh = 'yes' AND pid = '" . $row['pid'] . "' ";

                        $sel = mysqli_query($connect, $select);
                        $sell = mysqli_num_rows($sel);
                        if ($sell > 0) { ?><a href="EMH_view_admin.php?emh=<?php echo $row['pid']; ?>">EMH</a> <?php } else { ?>No EMH <?php } ?></td>
                    <td><a href="admin_view_patients.php?delete=<?php echo $row['pid']; ?> "> delete</a></td>

                    <?php
                    if ($row['blocked'] == 'yes') {
                    ?>
                        <td><a href="admin_view_patients.php?unblock=<?php echo $row['pid']; ?> "> Unblock</a></td>
                    <?php } else { ?>
                        <td><a href="admin_view_patients.php?block=<?php echo $row['pid']; ?> "> Block</a></td>
                    <?php   } ?>
                </tr>
            <?php
        } {
        }
            ?>
            </tbody>
    </table>


</body>

</html>