<?php

$peso = 55;
$altura = 1.56;
$resultado = $peso/($altura * $altura);

if($resultado >= 19 && $resultado <25){
    echo "Peso ideal";
}

if($resultado >= 25 && $resultado <30){
    echo "Sobre peso";
}

if($resultado >= 30 && $resultado <35){
    echo "Obesidade Grau 1";
}

if($resultado >= 35 && $resultado <40){
    echo "Obesidade Grau 2";
}
if($resultado >= 40 ){
    echo "Obesidade Grau 3";
}
