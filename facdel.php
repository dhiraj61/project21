<?php


require('connection.php');
$id=$_GET['id'];

$sql="delete from faculty where  fac_id='$id'";

if(mysqli_query($con,$sql)){
    echo "<script>alert('data deleted successfully')</script>";
    
    echo "<script>window.open('checkfac.php','_self')</script>";
}




?>