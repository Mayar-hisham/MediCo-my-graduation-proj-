<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "medico";
    $connect = mysqli_connect($servername , $dbusername , $dbpassword , $dbname);
   // if($connect){
     //   echo "connected";
  //  }  

    session_start();

    
    ?>

<?php
//logout action
if (isset($_GET['bye'])) {

	session_destroy();
	unset($_SESSION['patient']);
	header('location:login.php');
}



if (isset($_GET['goodbye'])) {

	session_destroy();
	unset($_SESSION['doctor']);
	header('location:login.php');
}



if (isset($_GET['gbye'])) {

	session_destroy();
	unset($_SESSION['pharmacy']);
	header('location:login.php');
}



if (isset($_GET['bbye'])) {

	session_destroy();
	unset($_SESSION['admin']);
	header('location:login.php');
}

?>