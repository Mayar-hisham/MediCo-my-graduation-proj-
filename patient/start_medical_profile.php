<?php
include "./shared/conn.php";

if (isset($_SESSION["patient"])) {
if(isset($_POST['submit'])){
$medical_p = $_SESSION['pid'];

    $insert = "INSERT INTO `medical_profile` VALUES (NULL , '$medical_p') ";
    $ins = mysqli_query($connect , $insert);


    header("location: /MediCoNew/The_EMH_for_patient.php");
}

?>

<form method="post">
    <input type="numbers" disabled  value="<?php echo $_SESSION['pid']; ?>">
    <button name="submit">Start</button>
</form>

<?php }?>