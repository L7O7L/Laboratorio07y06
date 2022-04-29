<?php

$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

session_start();

include('database.php');

$request = "SELECT * FROM usuario_activos WHERE Email='$email' AND Contraseña='$contraseña'";
$result = mysqli_query($conexion, $request);

$filas = mysqli_num_rows($result);

if($filas){

    header("location: products.php");

}else{

    ?>
    <?php
    include("index.php");
    ?>
    <h1>ERROR EN LA AUTENTIFICACIÓN</h1>
    <?php
}

mysqli_free_result($result);
mysqli_close($conexion);