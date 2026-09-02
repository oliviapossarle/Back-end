<?php

function verificarIdade($idade){
    if($idade<16){
        return"Voto Opcional";   
    }elseif($idade<18){
        return "Voto Opcional";
    }else{
        return"Voto Obrigatório";
    }
}
echo verificarIdade(17);
?>