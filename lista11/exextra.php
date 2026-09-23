<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];

echo "Olá, $nome!<br><br>";
if ($idade >= 18) {
    echo "Você pode agendar o serviço.";
} else {
    echo "Você não pode agendar o serviço.";
}