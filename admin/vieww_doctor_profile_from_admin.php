<?php
include "../shared/conn.php";



$qry = "SELECT * FROM `doctors` ";
$rslt = mysqli_query($connect, $qry);


if (isset($_GET['view'])) {
    $id = $_GET['view'];

    $view = "SELECT * FROM `doctors` where id= '" . $_GET['view'] . "'";
    $e = mysqli_query($connect, $view);
    $num = mysqli_num_rows($e);
    $row = mysqli_fetch_assoc($e);





?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/style.css">
        <link rel="stylesheet" href="../CSS/footer.css">
        <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
        <link rel="stylesheet" href="../CSS/edit_doctor_profile_from_admin.css">
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
        <h1 class="h1_text" id="Requests">Doctor <?php echo $row['dfirst_name']; ?>'</h1>
        <div class="conent">

            <div class="card_doctor">
                <div class="image">
                    <h4>Doctor Prsonal Picture</h4>
                    <br>
                    <img src="../upload/<?php echo $row['image'] ?>" alt="Doctor's photo">
                    <h4>Doctor Profession Practice Picture</h4>
                    <br>
                    <img src="../upload/<?php echo $row['profession_practice'] ?>" alt="Doctor's photo">
                    <h4>Doctor Syndicate Picture</h4>
                    <br>
                    <img src="../upload/<?php echo $row['doctor_syndicate'] ?>" alt="Doctor's photo">
                </div>
                <div class="details">
                    <h2 style="text-align: center; margin-top: -100px; margin-bottom:80px; margin-right: 300px;">NAME:
                        <?php echo $row['dfirst_name']    .  $row['dlast_name']   ?>
                    </h2>
                    <p>specialization: <br> <span><?php echo $row['specialization']  ?></span> </p>
                    <p>Experience: <br> <span><?php echo $row['years_of_exp']  ?></span> </p>
                    <div class="uls">
                        <p>Clinic branches:</p>

                        <ul>
                            <li><?php echo $row['daddress']  ?></li>

                        </ul>
                        <p>Contact:</p>
                        <ul>
                            <li>Phone:<?php echo $row['phone']  ?></li>
                            <li>Email: <?php echo $row['email']  ?></li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
        </div>
    <?php } ?>

    <script src="../JS/script.js"></script>
    </body>

    </html>