
<?php 
include "../shared/conn.php";

 if(isset($_SESSION['pharmacy'])){

    if(isset($_GET['send'])){
        $id = $_GET['send'];

        $send = "SELECT * FROM `images` WHERE id = $id";
        $e = mysqli_query($connect , $send);
        $row = mysqli_fetch_assoc($e);
        $pid = $row ['patient_id'];
        $paddr = $row ['patient_address'];
        $dfo = $row ['date_of_order'];
        $tfo = $row ['time_of_order'];
        $img = $row ['image'];

  $select = "SELECT * FROM `images` 
  JOIN `orders` ON images.id = orders.ord_id
  JOIN `patient` ON orders.opatient_id = patient.pid
  JOIN `pharmacy` ON orders.pharmacy_id = pharmacy.id 
  WHERE images.id = $id and pharmacy.id = '" . $_SESSION['phid'] . "' ";

				$sel = mysqli_query($connect, $select);
                $numberOfRows = mysqli_num_rows($sel);
    
                $row = mysqli_fetch_assoc($sel);
                if ($numberOfRows > 0) {
                    $_SESSION['accept'] = $id && $_SESSION['phid'];
                  $_SESSION['pharphone'] = $row['phphone'];}





                $_time = date('h:i: a', time());
                $_date = date('Y-m-d');


}}


if(isset($_POST['upload'])){
    
$pharmacy_id = $_SESSION['phid'];
$patient_id = $pid;
$order_id = $id;
$date_of_order = $dfo;
$time_of_order = $tfo;
$patient_address = $paddr;

$nname = $img;

$message = $_POST['message'];
$dtime = $_POST['dtime'];
$dday = $_POST['dday'];
$dphone = $_POST['dphone'];
$_date = $_date;
$_time = $_time;

$insert = "INSERT INTO `orders` VALUES (NULL , $pharmacy_id , '$patient_id' , '$order_id' , '$date_of_order' ,
 '$time_of_order' ,'$patient_address' , '$nname' , '$message' ,' $dtime' , '$dday' , $dphone , '$_date' , '$_time' , 'yes')";

$ins = mysqli_query($connect , $insert);

$alter = "UPDATE `images` SET activity = 'no' WHERE id = $id";
$alt = mysqli_query($connect , $alter);


        header("location: /MediCoNew/pharmacy/order_on_way.php ");

}
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
    <link rel="stylesheet" href="../CSS/sending_order_accepted.css">

    <title>Medico</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="../Images/medico.png" alt="Medico Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="./pharmacy_view.php">Home</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Help and Support</a></li>
            <li><a href="../shared/login.php?gbye='1'">Logout</a></li>
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
        <h2 style="text-align: center; font-size: 30px; margin-left: 500px; padding: 10px;">Sending your order </h2>

    </div>
    <div class="cont1">
        <div class="navbar">

        </div>
        <br><br><br><br><Br>
        <div class="conent">
            <form method="POST" enctype='multipart/form-data'>
                <label for="name">Pharmacy ID</label>
                <input type="text" disabled value="<?php echo $_SESSION['phid']; ?>" id="Pharmacy ID" name="Pharmacy ID" placeholder="Enter Pharmacy ID...">
                <label for="name">Patient ID</label>
                <input type="text"disabled value="<?php echo $pid ?>" id="Patient ID" name="Patient ID" placeholder="Enter Patient ID...">
                <label for="name">Order ID</label>
                <input type="text"disabled value="<?php echo $id ?>" id="order ID" name="order ID" placeholder="Enter order ID...">
                <label for="date">Date</label>
                <input type="text"disabled value="<?php echo $dfo ?>" id="date" name="date" placeholder="Enter date...">
                <label for="time">Time</label>
                <input type="text"disabled value="<?php echo $tfo ?>" id="time" name="time" placeholder="Enter time...">
                <label for="name">Patient Address</label>
                <input type="text"disabled value="<?php echo $paddr ?>" id="Patient Address" name="Patient Address" placeholder="Enter Patient Address...">
                
                <label for="medicine-img" class="custom-file-upload btn">
                    <i class="fa fa-upload"></i> Upload image for medicine / ارفع الروشتة
                    <input disabled value="<?php echo $img ?>" name="image" id="medicine-img" class="input-file">
                </label>
                
                <label for="time">Date of accepting the order</label>
                <input disabled value="<?php echo $_date ?>"  id="time of accepting the order" name="date of accepting the order"
                    placeholder="Enter time of accepting the order...">

                    <label for="time">Date of accepting the order</label>
                <input disabled  name="time" value="<?php echo $_time ?>"   id="time of accepting the order"
                    placeholder="Enter time of accepting the order...">

                    <label for="name">Estimated delivery time</label>
                <input  type="time" name="dtime"  id="estimated delivery day"
                    placeholder="Enter time of accepting the order...">

                   
                <label for="name">Estimated delivery day</label>
                <input  type="date" name="dday" id="estimated delivery day"
                    placeholder="Enter time of accepting the order...">


                   
                <label for="name">Delivery man phone number</label>
                <input type="text" id="delivery man phone number" name="dphone" 
                    placeholder="Enter delivery man phone number...">

                <label for="name">Type a message to your customer</label>
                <input name="message" type="text" id="type a message to your customer"
                    placeholder="Enter type a message to your customer...">

                <br>
                <button name="upload" type="submit" id="save-button">Submit</button>

            </form>
        </div>
    </div>
    <script src="JS/script.js"></script>
</body>

</html>