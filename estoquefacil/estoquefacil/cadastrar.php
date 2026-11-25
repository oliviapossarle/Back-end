<?php

include "config/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$qtd = $_POST["quantidade"];

$nomeImagem = null;

if(isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0){
     $extensoesPermitidas = ["jpg", "jpeg", "png", "webp"];
     $extensao = strtolower(pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION));
}
if(!in_array($extensao, $extensoesPermitidas)){
    echo "Formato não permitido. Use JPG, JPEG, PNG ou WEBP";
}
if($_FILES["imagem"]["size"] > 2 * 1024 * 1024){
    die ("Imagem muito grande!");
}
