<?php

$nomecompleto = "olivia";
$senha = 4375678;
$confirmasenha = 4375678;
$idade = 23;

if($nomecompleto = " "){
    echo " Incorreto<br>";
}

else{
    echo "Correto<br>";
}

if($senha == $confirmasenha){
    echo "Confirme sua senha<br>";
}
else{
    echo "Senha correta<br>";
}

if($idade>=18){
    echo "Acesso liberado<br>";
}
else{
    echo "Acesso negado<br>";
}
?>