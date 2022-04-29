<?php

include("database.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM productos WHERE ID='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: products.php");
    }
?>
