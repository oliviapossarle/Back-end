<?php

$valor_pedido = 100;
$valor_minimo_entrega = 50;
$idade_cliente = 16;
$estoque_disponivel = 362;      
$quantidade_pedida = 37;
$status_pedido = "pago";

if ($valor_pedido >= $valor_minimo_entrega) {
    echo "Entrega grátis<br>";
}
else{
    echo "Taxa 10,00";
}

if($idade_cliente >= 18){
    echo "Bebida liberada!<br>";
}
else{
    echo "Bebida não liberada<br>";
}

if($quantidade_pedida <= $estoque_disponivel){
    echo "Aceito<br>";
}
else{
    echo "Não aceito<br>";
}

if($status_pedido == "pago"){
    echo " Liberado para produção<br>";
}
else{
    echo "Não liberado para produção<br>";
}
?>