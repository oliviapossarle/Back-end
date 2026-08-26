<?php

$nome = "Olívia Queen,";
$idade = 17;
$desconto = true;

if($idade >= 65 || $desconto == true){
    echo "$nome você tem desconto!!";
}
else{
    echo "Sem desconto na compra";
}
?>