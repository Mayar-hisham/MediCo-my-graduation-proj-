
<?php  
      include "shared/conn.php";

 if(isset($_SESSION["patient"])){

  $select = "SELECT * FROM `patient` 
  JOIN `images` ON patient.id = images.patient_id WHERE patient.id = '". $_SESSION['pid'] ."'";

  $sel = mysqli_query($connect , $select);
  
  $time = date('h:i: a', time());
  $_date = date('Y-m-d');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/footer.css">
  <link rel="stylesheet" href="CSS/The Electronic Medical History.css">
  <link rel="stylesheet" href="CSS/ordermedicine.css">

  <title>Medico</title>
</head>

<body>
  <nav>
    <div class="logo">
      <a href="#"><img src="Images/medico.png" alt="Medico Logo"></a>
    </div>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">Help and Support</a></li>
      <li><a href="home.html">Logout</a></li>
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
      <a href="#" class="active" id="notification-count">Notifications </a>
      <a href="TheElectronicMedicalHistory.php">Medical History</a>
      <a href="doctors.html">Doctors</a>
      <a href="#">Orders</a>
      <a href="#">Payment</a>
      <a href="#">Insurance Details</a>
      <a href="TheElectronicMedicalHistory.php">Edits of EMH</a>
    </div>
    <div class="conent">
      <div class="container_order">
      <?php


if(isset($_POST['upload'])){




  $_pid = $_SESSION['pid'];
  $paddr = $_POST['paddr'];
  $_date = $_date;
  $_time = $time;


  $name = $_FILES['image']['name'];
  $ltype = $_FILES['image']['type'];
  $ltmp = $_FILES['image']['tmp_name'];
 $llocation = "upload/";
move_uploaded_file($ltmp , $llocation . $name);
 
   /* $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
         // Upload file
         if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
              // Insert record
              */
              $query = "INSERT INTO `images` VALUES( NULL , $_pid , '$paddr' , '$_date' , '$_time' , '$name')";
               $sel = mysqli_query($connect,$query);

   //            if($sel){
     //           echo "yes";
       //       } else{
         //       echo "no".mysqli_error($connect);
           //   }
         }

?>

       <h1>Upload your prescription/medicine</h1>
       <form method="post" enctype='multipart/form-data'>

<?php     ?>

       <label for="nationalId" class="">Patient ID</label>
       <input disabled type="number" value="<?php echo $_SESSION['pid']; ?>" id="nationalId" name="pid" placeholder="">

       <br><br>

       <label  >Date</label>
        <input disabled id="date" value="<?php echo $_date ?>" name="date" placeholder="Enter date...">

        <br> <br>

        <label >time</label>
        <input disabled id="time" value="<?php echo $time ?>" name="time" placeholder="Enter time...">

       <br><br>

       <label=>Patient Address </label>
        <input type="text" name="paddr" placeholder="Enter address...">

       <br><br>


        <label for="medicine-img" class="custom-file-upload btn">
          <i class="fa fa-upload"></i> Upload image of medicine/
          ارفع الروشتة
          <input id="medicine-img" type="file" name='image' class="input-file"/>
        </label>
        
        <button type="submit" name='upload' class="submit">Submit</button>
</form>
      </div>
    </div>
  </div>

  <?php } ?>
  <script src="JS/scriptorder.js"></script>
</body>

</html>