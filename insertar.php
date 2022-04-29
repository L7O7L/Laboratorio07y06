<?php
include("database.php");
$con=conectar();

$id=$_POST['ID'];
$nombre=$_POST['Nombre'];
$serie=$_POST['Serie'];
$tipo=$_POST['Tipo'];
$marca=$_POST['Marca'];
$precio = $_POST['Precio'];


$sql="INSERT INTO productos VALUES('$id','$nombre','$serie','$tipo', '$marca', '$precio')";
$query= mysqli_query($con,$sql);

if($query){

    Header("Location: products.php");
    
}else {
}
?>