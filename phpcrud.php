<?php
    include('db.php');
    $res=mysqli_query($con, "select * from crud");

?>
<a href="add.php">Add Record</a>
<table border="1">
    <tr>
        <td>S. No.</td>
        <td>Name</td>
        <td>City</td>
        <td></td>
    </tr>

    <?php 
    $i=1;
    while($row=mysqli_fetch_assoc($res)) { ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['city'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
            </td>
        </tr>
    <?php
    $i++;
     } ?>
</table>