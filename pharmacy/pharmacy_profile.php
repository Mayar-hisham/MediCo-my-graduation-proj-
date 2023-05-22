
<?php
include "../shared/conn.php";

if(isset($_GET['view'])){
    $id = $_GET['view'];

    $view="SELECT * FROM `pharmacy` where id=$id";
    $e = mysqli_query($connect , $view);
        $row = mysqli_fetch_assoc($e);
}
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/The Electronic Medical History.css">
    <link rel="stylesheet" href="../CSS/pharmacy_profile.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Medico</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="Images/medico.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Help and Support</a></li>
            <li><a href="login.php?gbye='1'">Logout</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!--first section-->


    <h1 class="h1_text">Pharmacy Profile</h1>
    <div class="phar">
        <div class="phar name">
            <p>Name:</p>
        </div>
        <div class="phar branches">
            <p>Branches:</p>
        </div>
        <div class="phar contacts">
            <p>Contacts:</p>
        </div>
    </div>
   
    <script src="JS/script.js"></script>
    <footer class="sticky-footer">
        <div>
            <h6>Copyright &copy Medico-2023</h6>
        </div>
               <div>
               <h4 class="_14">  &nbsp  &nbsp  &nbsp CONTACT US:</h4>
      
                  <br>    &nbsp  &nbsp PHONE NO.: 01008775960 <br>
                   <br>    &nbsp  &nbsp EMAIL: MediCo23@gmail.com
</div>
<br>
<div class="footer-social-icons">
  <h4 class="r"> &nbsp &nbspFOLLOW US ON</h4>
  <br>
  <ul class="social-icons">
    <li><a href="www.facbook.com">&nbsp<img width=30px hight=40px
          src="../Images/icona1.png"></a></li>
    <li><a href="www.instagram.com"><img width=30px hight=40px
          src="../Images/icona2.png"></a></li></li>
    <li><a href="www.twitter.com"><img width=30px hight=40px
          src="../Images/twitter.jpg"></a></li>
</ul>
</div>
    </footer>
</body>

</html>