<?php
$conexion = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db( $conexion, "clubdenatación");
$sql = "CREATE TABLE instalacion (
    Id INT (3) PRIMARY KEY NOT NULL,
    Nombre VARCHAR(40) NOT NULL,
    Piscinas INT(3) NOT NULL,
    Olimpica BOOLEAN NOT NULL
    )";
$conexion->query($sql);
mysqli_close( $conexion );
?>