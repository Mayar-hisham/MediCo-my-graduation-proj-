
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
  JOIN `patient` ON orders.opatient_id = patient.id
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


        header("location: /MediCoNew/order_on_way.php ");

}
?>

<form method="POST" enctype='multipart/form-data'>

<label for="nationalId" class="">Pharmacy ID</label>
       <input disabled type="number" value="<?php echo $_SESSION['phid']; ?>" id="nationalId" placeholder="">

       <br><br>

       <label for="nationalId" class="">Patient ID</label>
       <input disabled type="number" value="<?php echo $pid ?>" id="nationalId">

       <br><br>

       <label for="nationalId" class="">order ID</label>
       <input disabled type="number" value="<?php echo $id ?>" id="nationalId">

       <br><br>

       <label  >Date</label>
        <input disabled id="date" value="<?php echo $dfo ?>">

        <br> <br>

        <label >time</label>
        <input disabled id="time" value="<?php echo $tfo ?>">

       <br><br>

       <label=>Patient Address </label>
        <input disabled type="text" value="<?php echo $paddr ?>">

       <br><br>


<label for="medicine-img" class="custom-file-upload btn">
  <i class="fa fa-upload"></i> Upload image of medicine/
  ارفع الروشتة
  <input disabled value="<?php echo $img ?>"  name="image">
</label>

<br><br>

<label=>date of accepting the order </label>
 <input disabled value="<?php echo $_date ?>" >

 <br><br>

<label=>time of accepting the order </label>
 <input disabled  name="time" value="<?php echo $_time ?>" >

<br><br>

       <label=>estimated delivery time </label>
        <input type="time" name="dtime" >

        <br><br>

<label=>estimated delivery day </label>
 <input type="date" name="dday" >

       <br><br>

       <label=>delivery man phone number</label>
        <input type="number_format" name="dphone" >


        <br><br>

<label=>type a message to your customer </label>
 <input type="text" name="message">


 <br><br>


        
        <button type="submit" name='upload' class="submit">Submit</button>
</form>

<?php ?>
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
