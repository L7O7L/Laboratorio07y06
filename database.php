<?php 

$conexion = mysqli_connect("localhost", "root", "", "usuarios");

function conectar(){

    $bd = "productos";
    $conexion02 = mysqli_connect("localhost", "root", "", "productos");

    mysqli_select_db($conexion02, $bd);

    return $conexion02;

}

?>