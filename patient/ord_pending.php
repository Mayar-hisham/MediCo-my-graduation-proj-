<?php 
include "../shared/conn.php";

if (isset($_SESSION["patient"])) {

    $select ="SELECT * FROM `images` WHERE activity = 'yes'  AND patient_id = '".$_SESSION['pid']."' ";

    $sel = mysqli_query($connect , $select);

    $num = mysqli_num_rows($sel);
    $row = mysqli_fetch_assoc($sel);

    if($num > 0){

?>
 <h1><?php echo $row['patient_address'] ?></h1>








    <?php } else{
        echo "No pending Orders";
    }}?>