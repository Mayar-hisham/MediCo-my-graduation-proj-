<?php
include "../shared/conn.php";

if (isset($_SESSION["patient"])) {

    $sel = "SELECT * FROM `patient` WHERE pid = '".$_SESSION['pid']."'";
    $s = mysqli_query($connect , $sel);
    $num= mysqli_num_rows($s);
    $row = mysqli_fetch_assoc($s);
    if($row['paid'] == "yes"){

    if(isset($_POST['submit'])){
        //$medical_p = $_SESSION['pid'];
        
            $insert = "INSERT INTO `medical_profile` VALUES (NULL , '".$_SESSION['pid']."') ";
            $ins = mysqli_query($connect , $insert);
            header("location: /MediCoNew/patient/fill_in.php");
    }

?>

<form method="post">
    <input type="numbers" disabled  value="<?php echo $_SESSION['pid']; ?>">
    <button name="submit">Start</button>
</form>

<?php }   else{
    echo"Your payment is not approved or completed yet!";
} 
}?>