<?php


require('conn.php');
$id = $_GET['id'];

$sql = "delete from notification where  name='$id'";

if (mysqli_query($con, $sql)) {
    echo "<script>alert('data deleted successfully')</script>";

    echo "<script>window.open('facnot.php','_self')</script>";
}
