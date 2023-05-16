<?php 
include "../shared/conn.php";

if (isset($_SESSION["admin"])) {

if(isset($_POST['go'])){
    $pemail = $_POST['pemail'];
    $pid = $_POST['pid'];

    $select = "SELECT * FROM `patient` WHERE email = '$pemail' and pid = '$pid' ";
    $sel = mysqli_query($connect , $select);

   // if($sel){
        $alter = "UPDATE `patient` SET paid = 'yes' WHERE pid = $pid and email = '$pemail'";
$alt = mysqli_query($connect , $alter);
//}
   }
?>





<form method="POST">
    <label>Enter Patient Email</label>
    <input name="pemail">

    <label>Enter Patient ID</label>
    <input name="pid">

    <button name="go">Go</button>
</form>



<?php } ?>