<?php
include "conn.php";

if (isset($_SESSION["patient"])) {

  $select = "SELECT * FROM `patient` 
  JOIN `images` ON patient.pid = images.patient_id WHERE patient.pid = '" . $_SESSION['pid'] . "'";

  $sel = mysqli_query($connect, $select);

  $time = date('h:i: a', time());
  $_date = date('Y-m-d');

  if (isset($_POST['upload'])) {




    $_pid = $_SESSION['pid'];
    $paddr = $_POST['paddr'];
    $_date = $_date;
    $_time = $time;


    $name = $_FILES['image']['name'];
    $ltype = $_FILES['image']['type'];
    $ltmp = $_FILES['image']['tmp_name'];
    $llocation = "../upload/";
    move_uploaded_file($ltmp, $llocation . $name);

    $perd = $_POST['perd'];

    $query = "INSERT INTO `images` VALUES( NULL , $_pid , NULL , '$paddr' ,
                 '$_date' , '$_time' , '$name' , 'yes' , '$perd')";
    $sel = mysqli_query($connect, $query);
    if ($sel) {
      header("location: ../patient/order_tracking.php");
    }
  }

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
    <link rel="stylesheet" href="../CSS/ordermedicine.css">

    <title>Medico</title>
  </head>

  <body>
    <nav>
      <div class="logo">
        <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
      </div>
      <ul class="nav-links">
        <li><a href="../patient/patient_home.php">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Help and Support</a></li>
        <li><a href="../shared/login.php?bye='1'">Logout</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

    <div class="header">
      <div class="menu-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <h2 style="text-align: center; font-size: 30px; margin-left: 500px; padding: 10px;">order your medicine</h2>

    </div>
    <div class="cont1">
      <div class="navbar">
        <a href="doctors.html">Doctors</a>
        <a href="../patient/order_tracking.php">Track Orders</a>
        <a href="./payment.html">Payment</a>
      </div>
      <div class="conent">
        <div class="container_order">


          <br><br><br><br>
          <h1>Upload your prescription/medicine</h1>
          <form method="post" enctype='multipart/form-data'>

            <?php     ?>

            <label for="nationalId" class="">Patient ID</label>
            <input disabled type="number" value="<?php echo $_SESSION['pid']; ?>" id="nationalId" name="pid" placeholder="">

            <br><br>

            <label>Date</label>
            <input disabled id="date" value="<?php echo $_date ?>" name="date" placeholder="Enter date...">

            <br> <br>

            <label>time</label>
            <input disabled id="time" value="<?php echo $time ?>" name="time" placeholder="Enter time...">

            <br><br>

            <label=>Patient Address </label>
              <input type="text" name="paddr" placeholder="Enter address...">

              <br><br>


              <label for="medicine-img" class="custom-file-upload btn">
                <i class="fa fa-upload"></i> Upload image of medicine/
                ارفع الروشتة
                <input id="medicine-img" type="file" name='image' class="input-file" />
              </label>

              <br><br>

              <?php
              $sel = "SELECT * FROM `patient` WHERE pid = '" . $_SESSION['pid'] . "'";
              $s = mysqli_query($connect, $sel);
              $num = mysqli_num_rows($s);
              $row = mysqli_fetch_assoc($s);
              if ($row['paid'] == "yes") { ?>
                <label for="choose">Order this Medicine Periodically?</label>
                <label class="choose" for="option1">Yes</label>
                <input type="radio" id="option1" name="perd" value="Yes">
                <label class="choose" for="option2">No</label>
                <input type="radio" id="option2" name="perd" value="No">
                <br>
                <h7 style="color: green;">Note That: Order will be delivered monthly on the same date.</h7>
              <?php } else { ?>
                <label>Order this Medicine Periodically?</label>
                <input name="perd" value="No">
                <h7 style="color: red;">You Can't use this feature now to use it click here <a href="../shared/payment.html">know more</a></h3>
                <?php } ?>



                <button type="submit" name='upload' class="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>

  <?php }
if (isset($_SESSION['doctor'])) {





  $select = "SELECT * FROM `doctors` 
  JOIN `images` ON doctors.id = images.patient_id WHERE doctors.id = '" . $_SESSION['did'] . "'";

  $sel = mysqli_query($connect, $select);

  $time = date('h:i: a', time());
  $_date = date('Y-m-d');

  if (isset($_POST['upload'])) {




    $_pid = $_SESSION['did'];
    $paddr = $_POST['paddr'];
    $_date = $_date;
    $_time = $time;


    $name = $_FILES['image']['name'];
    $ltype = $_FILES['image']['type'];
    $ltmp = $_FILES['image']['tmp_name'];
    $llocation = "../upload/";
    move_uploaded_file($ltmp, $llocation . $name);

    $perd = $_POST['perd'];

    $query = "INSERT INTO `images` VALUES( NULL , NULL , '" . $_SESSION['did'] . "', '$paddr' , '$_date' ,
                 '$_time' , '$name' , 'yes' , '$perd')";
    $sel = mysqli_query($connect, $query);
    if ($sel) {
      header("location: ../doctor/order_tracking.php");
    } else {
      echo mysqli_error($connect);
    }
  }

  ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="../CSS/style.css">
      <link rel="stylesheet" href="../CSS/footer.css">
      <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
      <link rel="stylesheet" href="../CSS/ordermedicine.css">

      <title>Medico</title>
    </head>

    <body>
      <nav>
        <div class="logo">
          <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
          <li><a href="../doctor/doctor_home.php">Home</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Help and Support</a></li>
          <li><a href="../shared/login.php?goodbye='1'">Logout</a></li>
        </ul>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>

      <div class="header">
        <div class="menu-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <h2 style="text-align: center; font-size: 30px; margin-left: 500px; padding: 10px;">order your medicine</h2>

      </div>
      <div class="cont1">
        <div class="navbar">

          <a href="doctors.html">Doctors</a>
          <a href="../doctor/order_tracking.php">Track Orders</a>
          <a href="./payment.html">Payment</a>

        </div>
        <div class="conent">
          <div class="container_order">



            <h1>Upload your prescription/medicine</h1>
            <form method="post" enctype='multipart/form-data'>

              <?php     ?>

              <label for="nationalId" class="">Patient ID</label>
              <input disabled type="number" value="<?php echo $_SESSION['did']; ?>" id="nationalId" name="pid" placeholder="">

              <br><br>

              <label>Date</label>
              <input disabled id="date" value="<?php echo $_date ?>" name="date" placeholder="Enter date...">

              <br> <br>

              <label>time</label>
              <input disabled id="time" value="<?php echo $time ?>" name="time" placeholder="Enter time...">

              <br><br>

              <label=>Patient Address </label>
                <input type="text" name="paddr" placeholder="Enter address...">

                <br><br>


                <label for="medicine-img" class="custom-file-upload btn">
                  <i class="fa fa-upload"></i> Upload image of medicine/
                  ارفع الروشتة
                  <input id="medicine-img" type="file" name='image' class="input-file" />
                </label>
                <br>
                <label for="choose">Order this Medicine Periodically?</label>
                <label class="choose" for="option1">Yes</label>
                <input type="radio" id="option1" name="perd" value="Yes">
                <label class="choose" for="option2">No</label>
                <input type="radio" id="option2" name="perd" value="No">
                <br>
                <h7 style="color: green;">Note That: Order will be delivered monthly on the same date.</h7>

                <button type="submit" name='upload' class="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>

    <?php
  } ?>
    <script src="JS/scriptorder.js"></script>
    </body>

    </html>