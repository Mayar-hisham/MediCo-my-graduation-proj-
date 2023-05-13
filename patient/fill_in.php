<?php
include "../shared/conn.php";

if (isset($_SESSION["patient"])) {


        
            $select = "SELECT * FROM `medical_profile` WHERE patient_id = '".$_SESSION['pid']."'";
            $sel = mysqli_query($connect , $select);
            $numrow = mysqli_num_rows($sel);
            $row = mysqli_fetch_assoc($sel);
            if ($numrow > 0) {
                $_SESSION['patient_medical_profile_id'] = $row['id'];
                $_SESSION['access'] = $row['id'].$row['patient_id'];
           
              }

            //header("location: /MediCoNew/patient/The_EMH_for_patient.php");
        
?>


please press Start to fill in your Electronic Medical History

<form method="POST"action="The_EMH_for_patient.php">
<input name="id" value="your id is <?php echo $_SESSION['pid']; ?>">
<input name="mpid" value="your medical profile id is <?php echo $row['id'] ?>">

<a ><button name="fill_in">start</button></a>
</form>









    <?php } ?>