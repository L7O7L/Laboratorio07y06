<?php

include("database.php");
$con=conectar();

$id=$_POST['ID'];
$nombre=$_POST['Nombre'];
$serie=$_POST['Serie'];
$tipo=$_POST['Tipo'];
$marca=$_POST['Marca'];
$precio=$_POST['Precio'];

$sql="UPDATE productos SET Nombre='$nombre', Serie='$serie', Tipo='$tipo', Marca='$marca', Precio='$precio' WHERE ID='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: products.php");
    }
?>