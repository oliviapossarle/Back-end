<?php

function calculardesconto($preco, $desconto){
    $valordedesconto= $preco * $desconto / 100;

    return $preco - $valordedesconto;
}
echo"Preço final: R$", calculardesconto(100, 10);