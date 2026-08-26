<?php

$nota1 = 10;
$nota2 = 5;
$frequencia= 75;

$media= ($nota1 + $nota2)/2;

if($media >=7 && $frequencia >=75){
    echo "Aprovado";
}elseif($media >=5 && $media < 7){
    echo "Recuperação";
}else{
    echo "Reprovado";
}