<?php

include "shared/conn.php";

if (isset($_SESSION['pharmacy'])) {



    if(isset($_GET['finished'])){
        $id_of_order = $_GET['finished'];

        $insert = "INSERT INTO `finished_orders` VALUES (NULL , $id_of_order)";
        $i = mysqli_query($connect , $insert);

        $alter = "UPDATE `orders` SET activity = 'no' WHERE id_of_order = $id_of_order";
$alt = mysqli_query($connect , $alter);

        
        header("location: /MediCoNew/finished_requests.php ");

}}


