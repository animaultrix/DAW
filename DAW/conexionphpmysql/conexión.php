<?php
$conexion = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db( $conexion, "clubdenatación");
$resultado = mysqli_query( $conexion, "SELECT nombre FROM nadadores");
$salida = mysqli_fetch_array( $resultado );
printf ("%s", $salida[0]);
mysqli_close( $conexion );
?>