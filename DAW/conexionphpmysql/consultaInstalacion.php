<?php
$conexion = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db( $conexion, "clubdenatación");
$resultado = mysqli_query( $conexion, "SELECT * FROM instalacion");
while($consulta = mysqli_fetch_array($resultado)){
    echo $consulta['Nombre'];
    echo "<br>";
}
mysqli_close( $conexion );
?>