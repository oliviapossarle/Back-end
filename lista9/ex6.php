<?php

$music = ["Palácios e Castelos", "Dia Lugar e Hora", "Meio Termo", "Morena", "Água com Açucar", "Eu Você o Mar e Ela"];

$qtd = count ($music);
    echo "Tem $qtd musica na PLAYLIST: <br>";

foreach ($music as $n) {
    echo "$n <br>";
}