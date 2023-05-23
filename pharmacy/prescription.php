<?php 
include "../shared/conn.php";

if (isset($_SESSION['pharmacy'])) {

    if(isset($_GET['view'])){

    $id = $_GET['view'];

    $select = "SELECT * FROM `images` WHERE activity = 'yes' AND id = $id ";
    $sel = mysqli_query($connect , $select);
    $row = mysqli_num_rows($sel);
    ?>

<center>
<img style="width: 500px;height:500px" src="../upload/<?php echo $row['image']; ?> ">
<a href="./requests.php"><button>Back</button></a>
</center>

<?php
}}
    ?>