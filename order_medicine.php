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
      <li><a href="home.html">Home</a></li>
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
      include "shared/conn.php";

if(isset($_POST['upload'])){
 
    $name = $_FILES['file']['name'];
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
              $query = "insert into images(name) values('".$name."')";
              mysqli_query($connect,$query);
         }

    }
 
}
?>

       <h1>Upload your prescription/medicine</h1>
       <form method="post" action="" enctype='multipart/form-data'>
        <label for="medicine-img" class="custom-file-upload btn">
          <i class="fa fa-upload"></i> Upload image of medicine/
          ارفع الروشتة
          <input id="medicine-img" type="file" name='file' class="input-file"/>
        </label>
        
        <button onclick="openModal()" type="submit" name='upload' class="submit">Submit</button>
</form>
        <div id="modal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>Your order is send sucessfully</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="JS/scriptorder.js"></script>
</body>

</html>