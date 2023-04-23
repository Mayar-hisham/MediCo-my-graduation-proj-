<?php
include "../shared/conn.php";

    $select = "SELECT*FROM `patient`";
    $s = mysqli_query($connect , $select);

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete = "DELETE FROM `patient` WHERE id = $id";
        $d = mysqli_query($connect , $delete);
    }
    ?>


<div class="container col-6 mt-5">
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gendar</th>
            <th>Marital Status</th>
            <th>Email</th>
            <th>Allergies</th>
            <th>Blood Type</th>  
            <th>Age</th> 
            <th>Phone</th>  
            <th>Address</th>

            <th>DELETE</th> 
        </tr>
        <?php foreach($s as $s){ ?>
        <tr>
            <td><?php echo $s['id']; ?></td>
            <td><?php echo $s['first_name']; ?></td>
            <td><?php echo $s['last_name']; ?></td>
            <td> <?php echo $s['gender']; ?> </td>
            <td><?php echo $s['marital_status']; ?></td>
            <td><?php echo $s['email']; ?></td>
            <td><?php echo $s['allergies']; ?></td>
            <td><?php echo $s['blood_type']; ?></td>
            <td><?php echo $s['age']; ?></td>
            <td><?php echo $s['phone']; ?></td>
            <td><?php echo $s['address']; ?></td>
            <td><a href="viewpatient.php?delete=<?php echo $s['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
