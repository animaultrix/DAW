<?php

$host="localhost";
$user="id19687811_esteban";
$pass="1[QB]gOP|yucD?I(";
$bd="id19687811_inmobiliariabd";
$conexion = new mysqli($host,$user,$pass,$bd);
if($conexion){
}else{
    echo "no se ha podido conectar";
}
/*
$host="localhost";
$user="root";
$pass="";
$bd="id19687811_inmobiliariabd";
$conexion = new mysqli($host,$user,$pass,$bd);
if($conexion){
}else{
    echo "no se ha podido conectar";
}*/