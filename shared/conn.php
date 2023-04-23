<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "medico";
    $connect = mysqli_connect($servername , $dbusername , $dbpassword , $dbname);
  /*  if($connect){
        echo "connected";
    }  */

    session_start();
    ?>