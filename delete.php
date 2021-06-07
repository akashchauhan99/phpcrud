<?php
    include('db.php');
    
    // echo '<pre>';
    // print_r($_GET);
    $id = $_GET['id'];
    // echo $id;

    mysqli_query($con, "delete from crud where id='$id'");
    header('location:phpcrud.php');
    die();
?>