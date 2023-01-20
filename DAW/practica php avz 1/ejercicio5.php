<?php
//Realiza un namespace con la constante _PI y las funciones areaCuadrado(base), areaRectangulo(base, altura), areaCirculo(radio).
namespace CalcularArea;

const _PI = 3.14;

function areaCuadrado($base){
    return $base*$base;
}

function areaRectangulo($base, $altura){
    $area = $base*$altura;
    return $area;
}

function areaCirculo($radio){
    
    $area = _PI*$radio^2;
    return $area;
}
?>