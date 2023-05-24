<?php 
include "../shared/conn.php";

if (isset($_SESSION["doctor"])) {

    $select ="SELECT * FROM `orders` WHERE activity = 'no'  AND opatient_id = '".$_SESSION['did']."' ";

    $sel = mysqli_query($connect , $select);

    $num = mysqli_num_rows($sel);
    $row = mysqli_fetch_assoc($sel);

    if($num > 0){

?>
 <h1><?php echo $row['pharmacy_id'] ?></h1>








    <?php } else{
        echo "No Orders Received yet!";
    }}?>