<?php 
include "./conn.php";
if(isset($_POST['search'])){
    $name = $_POST['srch'];

$select ="SELECT * FROM `doctors` WHERE accepted = 'yes' AND dfirst_name LIKE'%$name%' OR specialization LIKE'%$name%' ";
$sel = mysqli_query($connect , $select);

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
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/footer.css">
  <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
  <link rel="stylesheet" href="../CSS/doctors.css">

  <title>Medico</title>
</head>

<body>
  <nav>
    <div class="logo">
      <a href="#"><img src="../Images/Medico_Logo_2_Final-removebg-preview-1.png" height="100px" width="200px" alt="Medico Logo"></a>
    </div>
  </nav>

  <div class="header">
    <div class="menu-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <h2 style="text-align: center; font-size: 30px; margin-left: 500px; padding: 10px;">Doctors</h2>

    <div class="search-bar">
      <form method="post" action="search.php">
      <input type="text" name="srch" placeholder="Search"><button name="search">go</button>

      </form>
    </div>
  </div>
  <div class="cont1">
    <div class="navbar">

    </div>
  </div>
  <div class="content">
  <br><br><br><br><br>
    <div class="card-container">
      <?php foreach($sel as $s){ ?>
        
      <div class="card_doctors">
      <img src="../upload/<?php echo $s['image'] ?>" alt="Doctor's photo">
        <div class="card-text">
          <h3>Name: <?php echo $s['dfirst_name'].$s['dlast_name'] ?></h3>
          <p>Specialist in: <?php echo $s['specialization']?></p>
          <br>
          <center><a href="../doctor/doctor_profile.php?view=<?php echo $s['id']; ?>"><button>View</button></a></center>
        </div>
      </div>
     <?php } }else{echo "nothing found";}?>
    </div>
  </div>
  <script src="JS/script.js"></script>
</body>

</html>