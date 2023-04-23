<?php
include "../shared/conn.php";

    $select = "SELECT*FROM `pharmacy`";
    $s = mysqli_query($connect , $select);

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete = "DELETE FROM `pharmacy` WHERE id = $id";
        $d = mysqli_query($connect , $delete);
    }
    ?>


<div class="container col-6 mt-5">
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>DELETE</th> 
        </tr>
        <?php foreach($s as $s){ ?>
        <tr>
            <td><?php echo $s['id']; ?></td>
            <td><?php echo $s['name']; ?></td>
            <td><?php echo $s['address']; ?></td>
            <td> <?php echo $s['phone']; ?> </td>
            <td><?php echo $s['email']; ?></td>
            <td><a href="viewpharmacy.php?delete=<?php echo $s['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</div>