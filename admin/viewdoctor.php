<?php
include "../shared/conn.php";

    $select = "SELECT*FROM `doctors`";
    $s = mysqli_query($connect , $select);

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete = "DELETE FROM `doctors` WHERE id = $id";
        $d = mysqli_query($connect , $delete);
    }
    ?>


<div class="container col-6 mt-5">
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Profession Practice</th>
            <th>Address</th>
            <th>Doctor Syndicate</th>
            <th>Email</th>  
            <th>Specialization</th> 
            <th>DELETE</th> 
        </tr>
        <?php foreach($s as $s){ ?>
        <tr>
            <td><?php echo $s['id']; ?></td>
            <td><?php echo $s['first_name']; ?></td>
            <td><?php echo $s['last_name']; ?></td>
            <td> <?php echo $s['age']; ?> </td>
            <td><?php echo $s['profession_practice']; ?></td>
            <td><?php echo $s['Email']; ?></td>
            <td><?php echo $s['specialization']; ?></td>
            <td><a href="viewdoctor.php?delete=<?php echo $s['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</div>