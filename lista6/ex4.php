<?php

echo "Pizzaria <br>";
echo "MENU <br>1- Pizza<br> 2- Hambúrguer<br> 3- refrigerante<br> 4- sobremesa<br> 5- Sair <br>";

$opcao= 1;

switch($opcao){
    case 1:
        echo"Qual sabor?";
        break;
    case 2:
        echo"Qual tipo de hambúrguer?";
        break;
    case 3:
        echo "Qual refrigerante?";
        break;
    case 4:
        echo"Qual sobremesa?";
        break;
    case 5:
        echo"Obrigado por utilizar o serviço da pizzaria";
        break;  
    default:
        echo"opção inválida";
        break;
        
}