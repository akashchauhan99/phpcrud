<?php
    include('db.php');
    $id = $_GET['id'];

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $city = $_POST['city'];
        mysqli_query($con, "update crud set name='$name', city='$city' where id='$id'");
        header("location:phpcrud.php");
        die();
    }

    $res=mysqli_query($con, "select * from crud where id='$id'");
    $row = mysqli_fetch_assoc($res);
    $name = $row['name'];
    $city = $row['city'];
?>
<form method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="textbox" name="name" value="<?php echo $name ?>"></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="textbox" name="city" value="<?php echo $city ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>
